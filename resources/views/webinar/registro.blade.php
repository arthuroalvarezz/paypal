@extends('layouts.app2')

@section('content')



   @if(count($webinarinfo)>0)

                 @foreach($webinarinfo as $webinar) 
          @php
         $now = new \DateTime();
 $now->format('d-m-Y H:i:s');

          
           $time = strftime("%d %b %Y  ", strtotime($webinar->time));
           $webinar->time = $time; 

          @endphp 


<div align="center" style="margin-top: -3%" >
<p style="color: white; font-weight: 700; font-size:40px">{{$webinar->nombre}}</p>

<p style="color: white; font-weight: 700; font-size:30px">{{$webinar->time}}</p>
<p style="color: white; font-weight: 700; font-size:20px">{!!$webinar->descripcion!!}</p>
</div>
   <br>
<div class="container" >
  <div class="row">
    <div class="col-md-6">
      @if($webinar->img != "") 

        <img src="{{asset($webinar->img)}}" alt="innovatium" class="img-responsive log" />@endif
       
    </div>   


    <div class="col-md-6">

<div class="row" >
      <div class="span12">
        <div class="cform" id="contact-form">
        <div id="sendmessage">Su mensaje ha sido enviado. Muchas gracias!</div>
            <div id="errormessage"></div>
         <form action="{{asset('contacto/enviar.php')}}" method="post" >
         <input type="hidden" name="id_webinar" value="{{$webinar->webinar_id}}">
              <div class="row">
                <div class="span6">
                  <div class="field your-name form-group">
                    <input style="background-color: white;padding: 1.2em;" type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
 <div class="field your-email form-group">
                    <input style="width: 100%;
                    height: 60px;border-radius: 0px;padding: 1.2em;" type="email" class="form-control" name="correo" id="email" placeholder="Correo Electrónico" data-rule="email" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>

<!---------------------->
<div class="field your-name form-group" style="display: none">
                    <input style="background-color: white" type="text" name="asunto" class="form-control" id="name" value="Confirmación de Registro" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>

<!--------------------->

                  
                  <div class="field subject form-group">
                   <input style="background-color: white;width: 100%;height: 60px;border-radius: 0px;padding: 1.2em;" type="number" class="form-control" name="tel" data-rule="required" id="subject" placeholder="Número de WhatsApp" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')" />
                   <input type="hidden" name="asunto2" value="{!!$webinar->nombre!!}">
                  
                    <input type="hidden" name="idInfoEvento" value="evento">
                    <div class="validation"></div>
                  </div>
                  
                  <div class="field your-name form-group">
                    <input style="background-color: white;padding: 1.2em;" type="text" name="mensaje" class="form-control" id="name" placeholder="Ciudad" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
<div class="field your-name form-group" style="display: none">
                    <input style="background-color: white" type="text" name="descripcion" class="form-control" id="name" placeholder="descripcion" value="{{$webinar->descripcion}}" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
                 
<div class="field your-name form-group" style="display: none">
                    <input style="background-color: white" type="text" name="botongoogle" class="form-control" id="name"  value="{{$webinar->botongoogle}}" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
<div class="field your-name form-group" style="display: none">
                    <input style="background-color: white" type="text" name="temas" class="form-control" id="name"  value="{{$webinar->temas}}" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
                   
<div class="field your-name form-group" style="display: none">
                    <input style="background-color: white" type="text" name="time" class="form-control" id="name" value="{{$webinar->time}}" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
<div class="field your-name form-group" style="display: none">
                    <input style="background-color: white" type="text" name="enlace" class="form-control" id="name" value="{{$webinar->enlace}}" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>


<!---<div class="field your-name form-group">
                    <input style="background-color: white" type="text" name="cabeceras" class="form-control" id="name" placeholder="correo"  data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>--->

  <select name="pais" style="width: 100%;
    height: 60px;padding: 1em;color: #868585">
    <!-- Opciones de la lista -->
    <option value="" selected>Seleccione un País</option>
     @foreach($paises as $mipais)
    <option value="{{$mipais->pais_id}}" >{{$mipais->nombre}}</option> <!-- Opción por defecto -->
   @endforeach
  </select>
                </div>
              </div>

              <form action="#" onsubmit="return checkForm(this);">
                <div style="margin-left: 15px; margin-top: 15px; ">
                <input type="checkbox" required="" oninvalid="this.setCustomValidity('Selecciona esta casilla para continuar')" oninput="setCustomValidity('')" name="terms" /><span style="color: white;"> He leído y aceptado los términos descritos en las <a href="{{ asset('pdf/aviso_de_privacidad.pdf') }}" alt="aviso de privacidad" target="_blank" style="color: white;"><b>Políticas de Privacidad.</b></a> Autorizo el envío de comunicaciones informativas relativas a las actividades o servicios por correo electrónico o cualquier otro medio equivalente.</span>
                </div>
                <div style="margin-left: 15px;">
                  <input style="margin-top: 40px;background-color:  #6fa8dc;color: white" type="submit" value="¡Registrarme ahora!" class="btn btn-theme pull-left">
                </div>
              </form>

            </form>
        </div>
      </div>
     
    </div>
</div>
</div>
</div>



          @endforeach
               @else

              <div align="center" >
    @include('partials.header')
  <p style="color: white; font-weight: 700; font-size:40px">Ups, el evento que buscas ya expiró.
Consulta nuestras redes sociales para conocer los próximos eventos.
</p>

<div align="center"><a class="btn btn-info"  href="{{route('home')}}#calendario">Calendario de otros eventos</a></div>
<br><br><br><br><br><br><br><br><br><br>
  








  </div>
  @endif
@endsection
