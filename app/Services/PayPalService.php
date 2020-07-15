<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use DB;


class PayPalService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $clientId;

    protected $clientSecret;

    public function __construct()
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {
        
        
  
        /**Extraemos la orden de la table orders */  
        $orderTable = DB::table('orders')
        ->where('orders.id', $request->order_id)
        ->first();
         
        /**almacenamos el id de la orden en una session */
        session()->put('orderTableId', $orderTable->id);


        $workshop = DB::table('workshops')
            ->where('workshops.workshop_id', $orderTable->workshop_id)
            ->first();
            //return dd($workshop);
        /**ENVIAMOS A CREAR LA ORDEN con el monto en la tabla orders del id recibido*/        
        $order = $this->createOrder($orderTable->amount, $workshop->name);


        $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approvalId', $order->id);

        return redirect($approve->href);


    }

    public function handleApproval()
    {
        if (session()->has('approvalId') && session()->has('orderTableId')) {
        

            $approvalId = session()->get('approvalId');
            $orderTableId = session()->get('orderTableId');

            

            $payment = $this->capturePayment($approvalId);
            $capturePayment = $this->capturePayment($payment->id);
            dd($capturePayment);
            //$fee_detail = $payment->purchase_units[0]->payments->captures[0]->seller_receivable_breakdown->paypal_fee->value;

            //$net_received_amount = $payment->purchase_units[0]->payments->captures[0]->seller_receivable_breakdown->net_amount->value;  
            
            /*
            $name = $payment->payer->name->given_name;
            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
            $amount = $payment->value;
            $currency = $payment->currency_code;
            */

            $orderActualizar = DB::table('orders')
            ->where('orders.id',  $orderTableId)
            ->update(['status' => 1,'external_reference' => $payment->id]);
           //quite esos porque me daba error en productivo->update(['status' => 1,'external_reference' => $payment->id, 'fee_details' => $fee_detail, 'net_received_amount' => $net_received_amount]);


            return redirect()->route('gracias', ['id' => $orderTableId ]);


        }
   
           return "pago rechazado";
    }



    public function createOrder($value, $workshop)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => round($value),
                        ],
                        'description' => $workshop,
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('approval'),
                    'cancel_url' => route('cancelled'),
                ]
            ],
            [],
            $isJsonRequest = true
        );
    }

    public function capturePayment($approvalId)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}",
            [],
            [],
            [
                'Content-Type' => 'application/json',
            ]
        );
    }

    public function resolveFactor($currency)
    {
        $zeroDecimalCurrencies = ['JPY'];

        if (in_array(strtoupper($currency), $zeroDecimalCurrencies)) {
            return 1;
        }

        return 100;
    }
}
