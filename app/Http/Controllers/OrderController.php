<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Workshop;
use App\PaymentPlatform;
use App\Events_Workshops;

use DB;


class OrderController extends Controller
{
    public function create(Request $request)
    {
        
    	$order = new Order();
        //Quien paga
        $order->name = $request->input('name');
    	$order->email = $request->input('email');
    	$order->phone = $request->input('phone');
        //Que apga
        $order->workshop_id = $request->input('workshop_id');
        //Que medio usa de pago
        $order->payment_platform_id  = $request->input('payment_platform_id');
        //Cuanto paga
        $order->amount = $request->input('amount');
        /*
        *Status de la orden de pago
        *  0 es creada
        *  1 es paga
        *  2 es cancela o rechazada  
        */
        $order->status = 0;
        $order->fk_id_evt_wrk = $request->input('iddelevento');
        $order->politicas = "SI";
        $order->save();

    

        return redirect()->route('mostrarorden',['id'=>$order->id] );

    }

   

    public function mostrarevento($id_evt_wrk, $payment_platform_id, $precios_id)
    {
        $date_now = date('Y-m-d');
        
        /*
        *Si dan click en pagar con MXN o 1 en el parametro, se pagará con MP
         Si dan click en pagar con USD o 2 en el paramtro, se pagará  CON PayPal
        */
        $payment_platform_id = DB::table('payment_platforms')
        ->where('id', $payment_platform_id)
        ->first();
        
        //SE TOMA EL PRIMER PRECIO que cumple con la regla de vigencia inicio y vigencia fin
        //se debe contemplar tener otro filtro ademas de las fechas como: preferencia por cliente
    	$precios = DB::table('precios')
    	->select('precios.preciomx', 'precios.preciousd')
        ->where('precios_id', $precios_id) 
    	//->where('precios.fk_id_precios', '=', $id_workshop)
        //->where('precios.vigencia_ini', '<=', $date_now)
        //->where('precios.vigencia_fin', '>=', $date_now)
        ->first();  

        //obtiene el detalle del WorkShop que se va a comprar
         $workshop = DB::table('events_workshops') 
        ->select('workshops.name','workshops.workshop_id','events_workshops.start_date','events_workshops.id_evt_wrk')
        ->join('workshops', 'workshops.workshop_id', '=' ,'events_workshops.id_workshop')
        ->where('events_workshops.id_evt_wrk', '=', $id_evt_wrk)
        ->first(); 


  
         return view('pago.detalle')
                            ->with(
                                ["precios" => $precios,
                                 "workshop" => $workshop, 
                                 "payment_platform_id" => $payment_platform_id]);
     
    }

    public function mostrarorden($id)
    {
 
        $order = DB::table('orders')
        ->where('orders.id', $id)
        ->first();
        if($order->status == 1){
             //  return Redirect::to('open_event_edit/' . $precioup->fk_id_precios)->with('toast_success', 'Precio editado correctamente');
            return view('pago.gracias')->with('order',$order);//aqui ya no se puede volver a pagar
        }
        $workshop = DB::table('events_workshops') 
        ->select('workshops.name','workshops.workshop_id','events_workshops.start_date')
        ->join('workshops', 'workshops.workshop_id', '=' ,'events_workshops.id_workshop')
        ->where('events_workshops.id_evt_wrk', '=', $order->workshop_id)
        ->first();  

      //si payment_platform_id =1 paga con paypla usd, 
      //si orden payment_platform_id =2 va a mercado pago
        if($order->payment_platform_id == 1){
          
            return view('pago.paypal')->with(
                ["order" => $order, "workshop" => $workshop]);


        }
        if($order->payment_platform_id == 2){
            return view('pago.mercadopago')->with(
                    ["order" => $order, "workshop" => $workshop]);
        }
    }

            
    public function checkStatus($id){

        $order = DB::table('orders')
        ->where('orders.id', $id)
        ->first();

        
        /**ORDEN ESTA PAGA */
        if($order->status == 1){
           return view('pago.gracias')->with('order', $order);      
        }
        
        
    } 
    

}