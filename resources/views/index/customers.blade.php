
  <section id="services" class="section orange" style="background-color: rgba(255,255,255,.79)">
    <div class="container">
      <h2 style="margin-bottom: 40px; font-size: 46px; font-weight: 700; letter-spacing: -1px;color: #444">Clientes </h2>
      <p style="font-size: 22px; text-shadow: 2px 2px 4px white;  margin: 20px 10px 60px 10px; color: #444; text-align: center;"><b>Nuestros clientes</b></p>
      <div class="container" style="margin-left: -1%">
        <div id="#" class="">
          <div id="contenedor-slider" class="contenedor-slider">
            <div id="slider" class="slider" style="margin-left: -100%;">
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-1.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-2.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-3.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-4.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-5.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-6.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-7.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-8.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-9.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-10.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-11.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-12.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-13.jpg')}}" class="slider__img"></section>
              <section class="slider__section"><img src="{{asset('/images/customers/clientes_potenciales-14.jpg')}}" class="slider__img"></section>
            </div>
            <div id="btn-prev" class="btn-prev">&#60;</div>
            <div id="btn-next" class="btn-next">&#62;</div>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top: 10%">
    <div class="row">
            <div class="mapa">
<p style="font-size: 22px; text-shadow: 2px 2px 4px white; color: #444; text-align: center;"><b>Nuestra experiencia</b></p>
      <div style=" width: 97%; margin-bottom: 20px;" align="justify">
        <h2 style="color: #4c4949; line-height:20px; font-size: 12px; font-weight: 700; text-align: left;">
        República Mexicana México Ciudad de México CDMX Nuevo León Monterrey Jalisco Guadalajara Morelos Cuernavaca Sonora Guerrero Chiapas Coahuila Saltillo Zacatecas Guanajuato Estados Unidos de América EE. UU. EUA USA Alabama California San Diego República de Perú Perú Departamento de Lima República de Guatemala Guatemala
        </h2>
      </div>
              
        <img src="{{asset('/images/mapa_ubicacion.png')}}" alt="mapa ubicacion" style="margin: auto" aling="center" width="97%" height="70%"/>
      </div>
    </div>
  </div>
    </div>

  

 <p style="font-size: 22px; text-shadow: 2px 2px 4px white;  margin: 20px 10px 60px 10px; color: #444; text-align: center; margin-top: 7%"><b>Últimos eventos realizados</b></p>
    <div class="container">
    <div class="row" >
      <div class="col-xs-12">
        <table class="customerTable" id="websendeos">
          <tr>
            <th class="th2 titulo"><b class="b4">Nombre</th>
              <th><b class="b4">Ubicación</th>
            <!--  <th style="height: 39px; width: 110px"><b class="b4">Disponibilidad</th>--->
               <th style="height: 39px; width: 156px"><b class="b4">Tipo</th>
                  <th style="height: 39px; width: 144px"><b class="b4">Finalizó</th>
             
                           <!--  <th style="height: 39px; width: 144px"><b class="b4">termina</th>-->
         <!--     <th><b class="b4">Reseña</th>--->
              
          </tr>
         <!-- el primero es la variable luego se nombra y es el que se jala $variable->nombre------>
          
           @foreach($evabierto as $hol)
           @php

           setlocale(LC_TIME, 'es_MX.UTF-8');
          
           $end_date = strftime("%d %b %Y", strtotime($hol->end_date));
           $hol->end_date = $end_date;

          @endphp 

              <tr style="text-align: left;">
              <td style="padding: 0px 7px" class="">
                @if($hol->modalidad=="")
                <h3 style="font-weight: 700;" class="b3">{{$hol->name}} </h3>
               @else
               <h3 style="font-weight: 700;" class="b3">{{$hol->name}} </h3>
              @endif

              </td>
              <td style="padding: 0px 7px" class=""><h3 style="font-weight: 700;" class="b3">{{$hol->city}} {{$hol->state}} {{$hol->country}}</h3></td>
              <td class=""><b style="font-weight: 700;" class="b3">{{$hol->tipo}}</b></td>
              <td class=""><b style="font-weight: 700;" class="b3">{{$hol->end_date}}</b></td>
              <!-- <td style="padding: 0px 7px" class=""><a class="btn btn-info" style="background-color: #6fa8dc; width: 123px;margin-top: 5%" href="{{url('abierto',[$hol->id_evt_wrk])}}">Ir</a></td>--->
              </tr>
       
            @endforeach
          <br>
            @foreach($evcerrado as $e)
            @php
            setlocale(LC_TIME, 'es_MX.UTF-8');
           $end_date = strftime("%d %b %Y", strtotime($e->end_date));
           $e->end_date = $end_date;
            @endphp

                <tr class="lr" style="text-align: left;">
              <td style="padding: 0px 7px" class="">
                @if($e->modalidad=="")
                <h3 style="font-weight: 700;" class="b3">{{$e->name}} </h3>
                 @else
                 <h3 style="font-weight: 700;" class="b3">{{$e->name}} </h3>
                 @endif
              </td>
                <td style="padding: 0px 7px" class=""><h3 style="font-weight: 700;" class="b3">{{$e->city}} {{$e->state}} {{$e->country}}</h3></td>
              <td class=""><b style="font-weight: 700;" class="b3">{{$e->tipo}}</b></td>
                <td class=""><b style="font-weight: 700;" class="b3"> {{$e->end_date}}</b></td>
 <!--  <td style="padding: 0px 7px" class=""><a class="btn btn-info" style="background-color: #6fa8dc;width: 123px;margin-top: 5%" href="{{url('privado',[$e->eventsprivate_id])}}">Ir</a></td>--->
            
            </tr>
            @endforeach

        </table>

  <div align="center">
    <a class="btn btn-info " style="background-color: #6fa8dc;width: 290px;padding: 1px 20px" href="{{url('listaabiertos')}}"><h2 style="font-size: 14px">Ver reseña de eventos abiertos </h2></a>
    <a class="btn btn-info x" style="background-color: #6fa8dc;padding: 1px 20px" href="{{url('listaprivados')}}"><h2 style="font-size: 14px">Ver reseña de eventos in company </h2></a>  

</div>
</div>



<style type="text/css">
  @media only screen and (max-device-width: 500px) and (min-device-width: 220px){
.x {
      margin-bottom: -22px;
 }
}
</style>

      </div>
    </div>

      </div>
    </div>
      

  </div>
  
        </section>
      </section>
    </section>
 
    
