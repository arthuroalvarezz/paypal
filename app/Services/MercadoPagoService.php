<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use App\Services\CurrencyConversionService;
use DB;

class MercadoPagoService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $key;

    protected $secret;

    protected $baseCurrency;

    protected $converter;


   // public function __construct(CurrencyConversionService $converter)
    public function __construct()
    {
        $this->baseUri = config('services.mercadopago.base_uri');
        $this->key = config('services.mercadopago.key');
        $this->secret = config('services.mercadopago.secret');
        $this->baseCurrency = config('services.mercadopago.base_currency');

       // $this->converter = $converter;
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $queryParams['access_token'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        return $this->secret;
    }

    public function handlePayment(Request $request)
    {
        $request->validate([
            'card_network' => 'required',
            'card_token' => 'required',
            'email' => 'required',
            'order_id' => ['required','numeric','exists:orders,id']
        ]);

        /**Extraemos la orden de la table orders */  
        $order = DB::table('orders')
        ->where('orders.id', $request->order_id)
        ->first();

        $workshop = DB::table('workshops')
        ->where('workshops.workshop_id', $order->workshop_id)
        ->first();

//return dd($workshop);

        $payment = $this->createPayment(
            $order,
            $workshop,
            $request->card_network,
            $request->card_token,
            $request->email
        );

        //return dd($payment);

        if ($payment->status === "approved") {
            
            $name = $payment->payer->first_name; 
            $fee_detail = $payment->fee_details[0] ->amount;
            $net_received_amount = $payment->transaction_details->net_received_amount;

            //$amount = number_format($payment->transaction_amount, 0, ',', '.');
            /**ACTUALIZAR EL STATUS DE ORDER 1 pago*/

            $orderActualizar = DB::table('orders')
            ->where('orders.id', $request->order_id)
            ->update(['status' => 1,'external_reference' => $payment->id, 'fee_details' => $fee_detail, 'net_received_amount' => $net_received_amount]);
           
            return redirect()->route('gracias', ['id' =>  $order->id ]);


        }

            /**ACTUALIZAR EL STATUS DE ORDER 2 rechazado*/
            $orderActualizar = DB::table('orders')
            ->where('orders.id', $request->order_id)
            ->update(['status' => 2]);
            /**ACTUALIZAR EL STATUS DE ORDER */

            return view('pago.error');
        
    }

    public function handleApproval()
    {
        //
    }

    public function createPayment($order, $workshop, $cardNetwork, $cardToken, $email, $installments = 1)
    {
       // return dd($order);
        return $this->makeRequest(
            'POST',
            '/v1/payments',
            [],
            [
                'payer' => [
                    'email' => $email,
                ],

                'description' => $workshop->name,

                'external_reference' => $order->id,
                'statement_descriptor' => 'Innovatium',
                'binary_mode' => true,
                //'transaction_amount' => round($value * $this->resolveFactor($currency)),
                'transaction_amount' => round($order->amount),
                'payment_method_id' => $cardNetwork,
                'token' => $cardToken,
                'installments' => $installments,
                'statement_descriptor' => config('app.name'),
            ],
            [],
            $isJsonRequest = true
        );


    }

    public function resolveFactor($currency)
    {
        return $this->converter
            ->convertCurrency($currency, $this->baseCurrency);
    }
}
