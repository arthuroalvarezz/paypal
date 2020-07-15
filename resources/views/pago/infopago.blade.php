@extends('layouts.app')

@section('content')
<div align="center" style="margin-top: -2%" >
<p style="color: white; font-weight: 700; font-size:40px">Realizar pago</p>
<div class="container">
<p style="color: white; font-weight: 200; font-size:20px">Si requieres factura, puedes contactarnos en el WhatsApp +52 55 6941 7110 con tu comprobante de pago a la mano.
Si deseas realizar pago con transferencia electrónica por favor contáctanos en el WhatsApp +52 55 6941 7110.
Si deseas realizar pago con tarjeta de crédito o débito por favor selecciona una opción.
</p><br>
</div>
</div>


<div id="main">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <!--  <h2>Editar Precio</h2>-->
                </div>
                 
          
                <div class="card-body">
                  
                        
                      
              
  @php 
                                  setlocale(LC_TIME, 'es_MX.UTF-8');
                                  $vigencia_ini = strftime("%d %b %Y", strtotime($content->vigencia_ini));
                                  $content->vigencia_ini = $vigencia_ini; 

                                  $vigencia_fin = strftime("%d %b %Y", strtotime($content->vigencia_fin));
                                  $content->vigencia_fin = $vigencia_fin;

$content->fk_id_precios = $content->fk_id_precios;

                                @endphp 

<!---------<div class="form-group row">
                        <label for="initAdd-date-input" class="col-sm-2 col-form-label" style="color: white">Datos actuales</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{ $content->descripcion }} ${{ number_format($content->preciomx, 2) }} MXN / ${{ number_format($content->preciousd, 2) }} USD (Vigente al {{ $content->vigencia_fin }}) " name="fecha_inicial" readonly type="">
                        </div>
                        </div>------------>
   
<!--<div class="container">
<p style="color: white; font-weight: 200; font-size:20px">{{$content->tipo}}
</p>
</div>-->
<div class=" container" style="background-color: #33cbcc;border-color: #33cbcc;  width: 78%;border-width: 12px" align="center">
                          @php
       $xd = $content->fk_id_precios; 
       @endphp    

      <?php $content2 = DB::table('events_workshops') 
      ->select('workshops.*','events_workshops.id_evt_wrk','precios.*','events_workshops.start_date','events_workshops.end_date','events_workshops.id_precios','precios.fk_id_precios')  
      ->join('precios', 'precios.fk_id_precios', '=', 'events_workshops.id_evt_wrk')
      ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
      //->groupBy('precios.fk_id_precios')
      ->orderBy('start_date','ASC')
      ->where('events_workshops.id_evt_wrk', $xd)
      ->get();   ?>

         @php
           setlocale(LC_TIME, 'es_MX.UTF-8');
           $start_date = strftime("%d %b %Y", strtotime($content2[0]->start_date));
           $content2[0]->start_date = $start_date;         
         @endphp 
             
         <p style="color: #333; font-weight:500; font-size:20px">  {{$content2[0]->name}}</p>
         <p style="color: #333; font-weight:500; font-size:20px">Inicia  {{$content2[0]->start_date}}</p>    
         <p style="color: #333; font-weight:500; font-size:20px">   {!! $content->descripcion !!} ${{ number_format($content->preciomx, 2) }} MXN / ${{ number_format($content->preciousd, 2) }} USD (Vigente al {{ $content->vigencia_fin }}) </p>
              
  </div>

<br>

<!----------------------formulario-------------------------------------------------------------------------------------------------->




                     
<!-------------------------------------------------------------------------------------------------->
 
 



<!------------------------------------------------------------------------------------------------>

                     
                       
                     
<!---------quitar<section id="contact" class="section green">
  <div class="container">------>
    <!-- <h2 style=" font-size: 46px; font-weight: 700; margin-bottom: 40px; letter-spacing: -1px; color:white;text-align: center;">Contacto</h2>
   
    <p>Bienvenid@ a Innovatium®, no dudes en contactarnos para obtener mayor información de nuestros talleres, formas de pago y descuentos especiales. Tenemos la opción de realizar talleres y coaching in company con base a las necesidades de tu organización.</p>------>
  <!------sirve  <p aling="center"></p>
    <div class="blankdivider30"></div>
    <div class="row">
      <div class="span12">
        <div class="cform" id="contact-form" style="margin-top: -6%">
        <div id="sendmessage">Su mensaje ha sido enviado. Muchas gracias!</div>
            <div id="errormessage"></div>
         <form action="{{asset('contacto/enviar.php')}}" method="post" >
              <div class="row">
                <div class="span12">
                  <div class="field your-name form-group">
                    <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" required="" style="background-color: white" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
                  <div class="field your-email form-group">
                    <input type="email" class="form-control" name="correo" id="email" placeholder="Correo Electrónico" data-rule="email" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
                  <div class="field subject form-group">
                    <input type="text" class="form-control" name="asunto" id="subject" placeholder="Número de WhatsApp" data-rule="minlen:4" required="" style="background-color: white"oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <input type="hidden" name="idContactoPago" value="pago">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="span6" style="display: none;">
                  <div class="field your-name form-group" >
                    <input style="background-color: white" type="text" name="mensaje" class="form-control" id="mensaje" placeholder="Escribe tu mensaje" value="Hola" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>


                </div>
              </div>

              <form action="#" onsubmit="return checkForm(this);">
                <div style="margin-left: 5px; margin-top: 15px; ">
                <input type="checkbox" required="" oninvalid="this.setCustomValidity('Selecciona esta casilla para continuar')" oninput="setCustomValidity('')" name="terms" /><span style="color: white;"> He leído y aceptado los términos descritos en las <a href="{{ asset('pdf/aviso_de_privacidad.pdf') }}" alt="aviso de privacidad"   target="_blank" style="color: white;"><b>Políticas de Privacidad.</b> Autorizo el envío de comunicaciones informativas relativas a las actividades o servicios por correo electrónico o cualquier otro medio equivalente.</a></span>
                </div>--------sirve------>
               <!-- <div style="margin-left: 15px;">
                  <input style="margin-top: 40px;" type="submit" value="Enviar" class="btn btn-theme pull-left">
                </div>-->
<!------sirve--<div class="col-md-12">
  <div class="col-md-6">
  <input style="margin-top: 4px;margin-left: -5%;background-color: #5a9bd5;width: 100%" type="submit" value="Pagar con MXN en MercadoPago" class="btn btn-theme pull-left">

  </div>
   <div class="col-md-6">
                       <input style="margin-top: 4px;background-color: #ffc000;width: 100%" type="submit" value="Pagar con USD en PayPal" class="btn btn-theme pull-left">

   </div>
</div>
              </form>

            </form>
        </div>
      </div>
     
    </div>
  </div>
</section>--------quitar------------>
                      

<div class="col-md-12">
            <div class="col-md-6" align="right">
                <div align="center">
                  <p style="color: white;font-weight: 600">Pagar con USD en PayPal</p>
               <p style="margin-left: 62%">{!! $content->paypal !!}</p>
               </div>

   </div>
   <div class="col-md-6">
                <div align="center">
              <p style="color: white;font-weight: 600">Pagar con MXN en MercadoPago</p>
@if($content->mercadopago != "") 


<a   href=" {!! $content->mercadopago !!}"><img style="width: 30%" src="{{ asset('images/mercadopago1.png') }}"></a>@endif
</div>
  </div>

      </div>
                       
                 
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="col-md-12">
  <div class="col-md-6">
<!--  <input style="margin-top: 4px;margin-left: -5%;background-color: #5a9bd5;width: 100%" type="submit" value="Pagar con MXN en MercadoPago" class="btn btn-theme pull-left">-->
<!--<a href=" {!! $content->mercadopago !!}">mercadopago</a>-->

  </div>

</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: white">Realiza un pago</div>

                <div class="card-body">
                    <form action="{{ route('pay') }}" method="POST" id="paymentForm">
                        @csrf

                        <div class="row">
                            <div class="col-auto">
                                <label style="color: white">Ingresa la cantidad a pagar</label>
                                <input
                                    type="number"
                                    min="5"
                                    step="0.01"
                                    class="form-control"
                                    name="value"
                                    value="{{ mt_rand(500, 100000) / 100 }}"
                                    required
                                >
                                <small class="form-text text-muted" style="color: white">
                                    Use values with up to two decimal positions, using dot "."
                                </small>
                            </div>
                            <div class="col-auto">
                                <label style="color: white">Elige la moneda</label>
                                <select class="custom-select" name="currency" required>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->iso }}">
                                            {{ strtoupper($currency->iso) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label style="color: white">Selecciona una forma de pago:</label>
                                <div class="form-group" id="toggler">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @foreach ($paymentPlatforms as $paymentPlatform)
                                            <label
                                                class="btn btn-outline-secondary rounded m-2 p-1"
                                                data-target="#{{ $paymentPlatform->name }}Collapse"
                                                data-toggle="collapse"
                                            >
                                                <input
                                                    type="radio"
                                                    name="payment_platform"
                                                    value="{{ $paymentPlatform->id }}"
                                                    required
                                                >
                                                <img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}">
                                            </label>
                                        @endforeach
                                    </div>
                                    @foreach ($paymentPlatforms as $paymentPlatform)
                                        <div
                                        id="{{ $paymentPlatform->name }}Collapse"
                                            class="collapse"
                                            data-parent="#toggler">
                                            @includeIf('components.' . strtolower($paymentPlatform->name) . '-collapse')
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                  
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-primary btn-lg">Pagar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>--------->

<style type="text/css">
      @media only screen and (max-device-width: 320px) and (min-device-width: 319px){
textarea.area {
width: 100%;
}
}
  @media only screen and (max-device-width: 360px) and (min-device-width: 359px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 411px) and (min-device-width: 410px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 375px) and (min-device-width: 374px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 414px) and (min-device-width: 413px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 768px) and (min-device-width: 767px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 1220px) and (min-device-width: 821px){
textarea.area {
    width: 100%;
}
}
 @media only screen and (max-device-width: 1620px) and (min-device-width: 1221px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 1820px) and (min-device-width: 1621px){
textarea.area {
width: 100%;
}

}
 @media only screen and (max-device-width: 2220px) and (min-device-width: 1821px){
textarea.area {
width: 100%;
}

}

</style>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
@endsection
