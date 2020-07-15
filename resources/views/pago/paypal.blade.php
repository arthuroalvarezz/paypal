@extends('layouts.app')
@section('title', 'Pago USD')
@section('content')
   
 <body style="background-color: #033E6B"> 
@php
$xd = $order->fk_id_evt_wrk;

@endphp


       <?php $content2 = DB::table('events_workshops') 
      ->select('events_workshops.id_evt_wrk','events_workshops.start_date','workshops.name')  

      ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
      ->join('orders', 'orders.fk_id_evt_wrk', '=', 'events_workshops.id_evt_wrk')
      //->groupBy('precios.fk_id_precios')
      ->orderBy('start_date','ASC')
      ->where('events_workshops.id_evt_wrk', $xd )
      ->get();   ?>
   
              
<div class="container">

   <div class="row">

      
         
         <div class="col-md-offset-2 col-xs-12 col-sm-12 col-md-8 pt-3 card" 
              style="background-color:#eeeeee; border:1px solid grey;  border-radius:10px;">
                <h2>Detalle Orden de Pago</h2>
                <div class="division mt-3 mb-3" style="border:1px solid grey;"></div>
                <hr>
                 Procesado de forma segura con <img src="{{ asset('images/payment-platforms/paypal.jpg') }}" style="margin-top: -2%;">
    <p>{{$content2[0]->name}}</p>
                   @php
                      setlocale(LC_TIME, 'es_MX.UTF-8');
                      $start_date = strftime("%d %b %Y", strtotime($content2[0]->start_date));
                      $content2[0]->start_date = $start_date;         
                   @endphp
                <p>Inicia: {{$content2[0]->start_date}}</p>
             
                <p>Precio: ${{  $order->amount }}  
                   
                       @if($order->payment_platform_id == 1)
                        USD
                       @endif  

                       @if($order->payment_platform_id == 2)
                        MXN
                       @endif  
                    
                </p>
                <p style="display: none;">Folio: {{ $order->id }} </p>
                <p>Asistente: {{ $order->name }}</p> 

                <div class="division mt-3 mb-3" style="border:1px solid grey;"></div>
            
                 <hr>      
                 <div class="text-center mt-3">
                                   <img src="{{  asset('images/pagar-seguro.png') }}" alt="Pagos seguros" class="img-fluid">

                 </div>     


                 <form action="{{ route('pay')  }}" method="POST" id="paymentForm" class="mt-3">
                 @csrf
                           
                           <div class="form-group">
                             <label style="display: none;" for="">payment_platform ocultar</label>
                             <input type="hidden" name="payment_platform" value="{{ $order->payment_platform_id }}">
                           </div>

                           <div class="form-group">
                             <label style="display: none;" for="">order_id ocultar</label>
                             <input type="hidden" name="order_id" value="{{ $order->id }}">
                           </div>


                            <div class="text-center mt-3">
                                <button type="submit" id="payButton" class="btn btn-primary btn-lg btn-block">PAGAR AHORA CON PAYPAL</button>
                            </div>

                    <br>
                </form>

         </div>
        
   </div>

</div>



@endsection