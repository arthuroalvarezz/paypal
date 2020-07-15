<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Resolvers\PaymentPlatformResolver;
use App\Currency;
use App\PaymentPlatform;
use App\Order;
use DB;

class PaymentController extends Controller
{
    //
    protected $paymentPlatformResolver;

    //el constructor recibe un objeto de PaymentPlatformResolver
    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
        /*$this->middleware('auth');*/
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }

  


    public function pay(Request $request)
    {


    
       
        $rules = [
            /**NECESITAMOS EL id de la plataforma de pago */
            'payment_platform' => ['required','exists:payment_platforms,id'],
            /**Por seguridad el monto lo extramos de la tabla orders */
            'order_id' => ['required','numeric','exists:orders,id'],

        ];

        $request->validate($rules);
       
        $order = DB::table('orders')
        ->where('orders.id', $request->order_id)
        ->first();
        if($order->status == 1){
             //  return Redirect::to('open_event_edit/' . $precioup->fk_id_precios)->with('toast_success', 'Precio editado correctamente');
            return view('pago.gracias')->with('order',$order);//aqui ya no se puede volver a pagar
           // return "Esta cuenta ya fue previamente pagada";
        }

        //Accedemos a la Clase PaymentPlatformResolver
        //En el constructor se agrego esta clase
        $paymentPlatform = $this->paymentPlatformResolver->resolverService($request->payment_platform);
        
        
        //guardamos el id del payment_platform
        session()->put('paymentPlatformId', $request->payment_platform);
        
     
        //metodo de App/Service/MercadoPago o App/Service/PayPal
        //Enviamos el request y el id de la orden
        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {

        if(session()->has('paymentPlatformId')){


            //Accedemos a PaymentPlatformResolver,
            // pero ya no temos acceso al request de los datos enviados,
            //pero guardamos el id de la plataforma de pago
            //en session
            $paymentPlatform = $this->paymentPlatformResolver
                ->resolverService(session()->get('paymentPlatformId'));
            

             
            //metodo de App/Service/MercadoPago
            return $paymentPlatform->handleApproval();
        }

        return redirect()
            ->route('pago')
            ->withErrors('No podemos recuperar su plataforma de pago. Por favor, inténtalo de nuevo');
    }

    public  function cancelled()
    {
        return view('pago.error');

      //  return redirect()->back()->with('toast_success', 'Algo salio mal, ¿quieres volver a intentarlo?');
        
    }
}

