@extends('layouts.app')
@section('title', 'Confirmación de pago')
@section('content')
<body style="background-color: #033E6B"> 
<div class="container">
   <div class="row">
    <div align="center" style="margin-top: 2%" >
<p style="color: white; font-weight: 700; font-size:40px">¡Pago exitoso!</p>
<p style="color: white; font-weight: 200; font-size:20px;margin-top: 1%">¡Gracias por inscribirte! Conserva tu folio de confirmación.</p>
</div>
      <div class=" container" style="background-color: #33cbcc;border-color: #33cbcc;  width: 76%;border-width: 1px;margin-top: 1%;border-radius: 10px" align="center">
<br>
       <p style="color: white; font-weight:500; font-size:26px">Folio de confirmación {{ $order->id }}</p>
<br>

      </div>
      <br>
       <div align="center" style="margin-top: 2%" >
<p style="color: white; font-weight: 200; font-size:20px">En breve nos pondremos en contacto contigo.</p>
<p style="color: white; font-weight: 200; font-size:20px">Para facturación puedes contactarnos en el WhatsApp <a style="color: white" href="https://web.whatsapp.com/send?phone=+52(55)69417110&amp;text=Hola, necesito más información ¿Podría ayudarme? vengo del sitio https://innovatium.mx/">+52 55 6941 7110</a> con tu comprobante de pago a la mano.</p>
</div>
         
       <!--  <div class="col-md-offset-2 col-xs-12 col-sm-12 col-md-8 pt-3 card" 
              style="background-color:#eeeeee; border:1px solid grey;  border-radiUs:10px;">
                <h2 class="alert alert-success text-center">¡RECIBIMOS SU PAGO!</h2>
                <hr>

                

                <h3>Muchas gracias por su pago de la orden: {{ $order->id }}, hemos enviado a su correo, la confirmación de su pedido.</h3>

                <p>¿Tienes dudas? Envíanos un WhatApp al 5539000734 con tu orden de pedido y correo.</p>
                


                <a href="#" class="btn btn-info">Enviar WhatApp</a>
                
                <br><br>
                <div class="division mt-3 mb-3" style="border:1px solid grey;"></div>

                <div class="mt-3 mb-3">
                          <br>
                                <a href="{{ url('/') }}" class="btn btn-info btn-bg btn-block">REGRESAR AL HOME</a>      
                                <br><br>
                </div>
                  
                
         </div>--->
        
   </div>

</div>
<br><br><br>



@endsection