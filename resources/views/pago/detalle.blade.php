@extends('layouts.app')
@section('title', 'Procesando pago')
@section('content')
<body style="background-color: #033E6B"> 
  <div align="center" style="margin-top: -2%" >

    @if( $payment_platform_id->id == 1 )
<p style="color: white; font-weight: 700; font-size:40px">Realizar Pago USD (dólares americanos) <img src="{{ asset('images/payment-platforms/paypal.jpg') }}">
</p>@endif
  @if( $payment_platform_id->id == 2 )
<p style="color: white; font-weight: 700; font-size:40px">Realizar Pago MXN (pesos mexicanos) <img class="grandemob"  src="{{ asset('images/mercadopago1.png') }}">
</p>@endif

<style type="text/css">
    @media only screen and (max-device-width: 2625px) and (min-device-width: 504px){
img.grandemob{

    width:7%;
}
}

@media (max-width: 503px)  and (min-device-width:300px){
    

   img.grandemob{

    width:35%;
}
    
}
</style>

<div class="container">
<p style="color: white; font-weight: 200; font-size:20px">Para realizar pago con transferencia bancaria por favor contáctanos en el WhatsApp <a style="color: white" href="https://web.whatsapp.com/send?phone=+52(55)69417110&amp;text=Hola, necesito más información ¿Podría ayudarme? vengo del sitio https://innovatium.mx/">+52 55 69417110</a>. 
Para realizar pago con tarjeta de crédito o débito, llena los datos del participante y haz clic en el botón Continuar.


</p><br>

</div>
</div>



<div class=" container" style="background-color: #33cbcc;border-color: #33cbcc;  width: 74%;border-width: 1px;border-radius: 10px" align="center">

   <p style="color: white; font-weight:200; font-size:20px">{{  $workshop->name }}</p>

         @php
           setlocale(LC_TIME, 'es_MX.UTF-8');
           $start_date = strftime("%d %b %Y", strtotime($workshop->start_date));
           $workshop->start_date = $start_date;         
         @endphp

     <p style="color: white; font-weight:200; font-size:20px">Inicia: {{  $workshop->start_date }}</p>

                @if( $payment_platform_id->id == 1 )
             <p style="color: white; font-weight:200; font-size:20px">Precio: ${{  $precios->preciousd }} USD</p>
                @endif
               
                @if( $payment_platform_id->id == 2 )
               <p style="color: white; font-weight:200; font-size:20px">Precio: ${{  $precios->preciomx }} MXN</p>
                @endif
  </div>

<BR>
  <div class="container">
   <!-- <form action="{{ route('createorder') }}" method="POST" style="margin-top:20px;">

                   @csrf
                   
                   <div class="form-group">
                        <input class="form-control" type="text" name="name" id="name" required placeholder="Nombre del participante">
                   </div> 
                   <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" required placeholder="Correo electrónico del participante">
                   </div> 

                   <div class="form-group">
                        <input class="form-control" type="text" name="phone" id="phone" required placeholder="Número de WhatsApp del participante">
                   </div> 
                   <div class="form-group">
                       <input class="form-control" type="hidden" name="iddelevento" id="iddelevento" value="{{$workshop->id_evt_wrk}}" required placeholder="id del evento">
                     
                   </div>
                   <div class="form-group">
                        <label style="color: white;font-weight: 500"><input type="checkbox" id="cbox1" name="politica" required> He leído y aceptado los términos descritos en las <a href="{{ asset('pdf/aviso_de_privacidad.pdf') }}" alt="aviso de privacidad"   target="_blank" style="color: white;"><b>Políticas de Privacidad.</b></a> Autorizo el envío de comunicaciones informativas relativas a las actividades o servicios por correo electrónico o cualquier otro medio equivalente.
</label>
                      
                   </div>  
                   <div class="form-group">
                        <input class="form-control" type="hidden" value="{{ $workshop->workshop_id }}" name="workshop_id" id="workshop_id" required>
                   </div> 
                     
                     
                   @if( $payment_platform_id->id == 1 )
                    @php /*pagara en dolares por paypal*/ @endphp
                   <div class="form-group">
                       <input type="hidden" name="payment_platform_id" value="{{ $payment_platform_id->id }}" >
                   </div> 
                   <div class="form-group">
                       <input type="hidden" name="amount" value="{{ $precios->preciousd }}" >
                   </div> 
                   @endif

                   @if( $payment_platform_id->id == 2 )
                     @php /*pagara en pesos por mercadopago*/ @endphp
                   <div class="form-group">
                       <input type="hidden" name="payment_platform_id" value="{{ $payment_platform_id->id }}" >
                   </div> 
                   <div class="form-group">
                       <input type="hidden" name="amount" value="{{ $precios->preciomx }}" >
                   </div> 
                   @endif

 


                <div align="center">
                   <input type="submit" value="Continuar" class="btn btn-success" style="color:white;width: 30%;">
                 </div>
          
                </form>-->
    
  </div>


<div class="container" >
   <div class="row">

      
         
         <div class="col-md-offset-0 col-xs-12 col-sm-12 col-md-12 pt-3 card" 
              style="background-color:#eeeeee; border:1px solid grey;  border-radius:10px;">
               <h2>Datos del participante</h2>
                <hr>
                    
                <div class="division mt-2 mb-3" style="border:1.5px solid grey;"></div>
               <form action="{{ route('createorder') }}" method="POST" style="margin-top:20px;" onSubmit="javascript:document.form.reset();">

                   @csrf
                   
                   <div class="form-group">
                        <label for="nombre"><span class="text-danger"></span>Nombre completo</label>
                        <input class="form-control" type="text" name="name" id="name" required placeholder="Nombre completo ">
                   </div> 
                   <div class="form-group">
                        <label for="nombre"><span class="text-danger"></span> Correo electrónico</label>
                        <input class="form-control" type="email" name="email" id="email" required placeholder="Correo electrónico ">
                   </div> 

                   <div class="form-group">
                        <label for="nombre"><span class="text-danger"></span> Número de WhatsApp</label>
                        <input class="form-control" type="text" name="phone" id="phone" required placeholder="Número de WhatsApp ">
                   </div> 
                   <div class="form-group">
                       <!-- <label for="nombre"><span class="text-danger">*</span> Ingrese su teléfono:</label>-->
                       <input class="form-control" type="hidden" name="iddelevento" id="iddelevento" value="{{$workshop->id_evt_wrk}}" required placeholder="id del evento">
                     
                   </div>
                   <div class="form-group">
                        <label style="color: black;font-weight: 500"><input type="checkbox" id="cbox1" name="politica" required> He leído y aceptado los términos descritos en las <a href="{{ asset('pdf/aviso_de_privacidad.pdf') }}" alt="aviso de privacidad"   target="_blank" style="color: black;"><b>Políticas de Privacidad.</b></a> Autorizo el envío de comunicaciones informativas relativas a las actividades o servicios por correo electrónico o cualquier otro medio equivalente.
</label>
                      
                   </div>  
                   <div class="form-group">
                        <input class="form-control" type="hidden" value="{{ $workshop->workshop_id }}" name="workshop_id" id="workshop_id" required>
                   </div> 
                     
                     
                   @if( $payment_platform_id->id == 1 )
                    @php /*pagara en dolares por paypal*/ @endphp
                   <div class="form-group">
                       <input type="hidden" name="payment_platform_id" value="{{ $payment_platform_id->id }}" >
                   </div> 
                   <div class="form-group">
                       <input type="hidden" name="amount" value="{{ $precios->preciousd }}" >
                   </div> 
                   @endif

                   @if( $payment_platform_id->id == 2 )
                     @php /*pagara en pesos por mercadopago*/ @endphp
                   <div class="form-group">
                       <input type="hidden" name="payment_platform_id" value="{{ $payment_platform_id->id }}" >
                   </div> 
                   <div class="form-group">
                       <input type="hidden" name="amount" value="{{ $precios->preciomx }}" >
                   </div> 
                   @endif

 


                <!-- <div align="center">
                   <input type="submit" value="Continuar" class="btn btn-success" style="color:white;width: 30%;">
                 </div>-->
               <input type="submit" value="CONTINUAR" class="btn btn-success btn-lg btn-block mt-3 mb-3" style="color:white;">
                  <!-- <hr>
                   <span class="text-danger">*</span> Estos valores son obligatorios-->
                </form>

         </div>
        
   </div>

</div>

<!----
<div class="container" style="">
   <div class="row">

      
         
         <div class="col-md-offset-2 col-xs-12 col-sm-12 col-md-8 pt-3 card" 
              style="background-color:#eeeeee; border:1px solid grey;  border-radiUs:10px;">---->
             <!--   <h2>Detalles del Evento</h2>
                <hr>
                <h5>Workshop: {{  $workshop->name }}</h5>

                @if( $payment_platform_id->id == 1 )
                  <h5>Precio: ${{  $precios->preciousd }} USD</h5>
                @endif
               
                @if( $payment_platform_id->id == 2 )
                 <h5>Precio: ${{  $precios->preciomx }} MXN</h5>
                @endif-->
              

               
               <!-----
                <div class="division mt-3 mb-3" style="border:1px solid grey;"></div>

                <h5 class="text-center">¿Estás interesado en asistir a este WorkShop?</h5>
                <p>Llena el siguiente formulario para completar tu registro.</p>--------------->


               <!-- <form action="{{ route('createorder') }}" method="POST" style="margin-top:20px;">

                   @csrf
                   
                   <div class="form-group">
                        <label for="nombre"><span class="text-danger">*</span>Ingrese  nombre completo:</label>
                        <input class="form-control" type="text" name="name" id="name" required>
                   </div> 
                   <div class="form-group">
                        <label for="nombre"><span class="text-danger">*</span> Ingrese email:</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                   </div> 

                   <div class="form-group">
                        <label for="nombre"><span class="text-danger">*</span> Ingrese su teléfono:</label>
                        <input class="form-control" type="text" name="phone" id="phone" required>
                   </div>
                   <div class="form-group">
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" required> Este check</label>
                      
                   </div>  
                   <div class="form-group">
                        <input class="form-control" type="hidden" value="{{ $workshop->workshop_id }}" name="workshop_id" id="workshop_id" required>
                   </div> 
                     
                     
                   @if( $payment_platform_id->id == 1 )
                    @php /*pagara en dolares por paypal*/ @endphp
                   <div class="form-group">
                       <input type="hidden" name="payment_platform_id" value="{{ $payment_platform_id->id }}" >
                   </div> 
                   <div class="form-group">
                       <input type="hidden" name="amount" value="{{ $precios->preciousd }}" >
                   </div> 
                   @endif

                   @if( $payment_platform_id->id == 2 )
                     @php /*pagara en pesos por mercadopago*/ @endphp
                   <div class="form-group">
                       <input type="hidden" name="payment_platform_id" value="{{ $payment_platform_id->id }}" >
                   </div> 
                   <div class="form-group">
                       <input type="hidden" name="amount" value="{{ $precios->preciomx }}" >
                   </div> 
                   @endif

 


                
                   <input type="submit" value="PROCEDER A PAGAR" class="btn btn-success btn-lg btn-block mt-3 mb-3" style="color:white;">
                   <hr>
                   <span class="text-danger">*</span> Estos valores son obligatorios
                </form>--->
<!---
         </div>
        
   </div>

</div>--->


@endsection