<section id="talleres" class=" section orange" align="center" style="background: #efefef; margin-top: -50px" >
   <div class="container">
     <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h4 style="color: #0b5394;font-size: 30px; margin-bottom: 30px;">Próximas fechas</h4>
          <p class="pmobil" style="color: #4c4949; margin-top: -22px; margin-bottom: 15px;">Si no encuentras una fecha o ubicación  que te convenga, contáctanos para recibir más información de próximos eventos programados</p>

        <div class="container">
          <div class="row" >
          <div class="col-xs-12 myTable">
       <!--   <table class="table" id="websendeos" style="border: 1px solid #80808087;  margin-bottom: 5px;">
          @if(count($evabierto)>0)
              @foreach($evabierto as $hol)
           @php

           setlocale(LC_TIME, 'es_MX.UTF-8');
          
           $end_date = strftime("%d %b %Y", strtotime($hol->end_date));
           $hol->end_date = $end_date;

           $start_date = strftime("%d %b %Y", strtotime($hol->start_date));
           $hol->start_date = $start_date;

          @endphp 
          <tr>
            <th class="th2" style="width:20%; font-family: 'Open Sans', Arial, sans-serif;">
            <div style="text-align: center; margin-top: 20px; margin-bottom: 35px;">
            <b style="font-size: 18px;" class="b3">{{$hol->start_date}}</b>
            </div>
            <div style="text-align: center; margin-bottom: 35px;">
            <span style="font-size: 16px; color: #75787c;">{{$hol->city}}</span><br>
            <span style="font-size: 16px; color: #75787c;">{{$hol->state}}</span><br>
            <span style="font-size: 16px; color: #75787c;">{{$hol->country}}</span>
            </div>
            <div style="text-align: center;">
            <span style="font-size: 16px; color: #75787c;">{{$hol->duration}}</span>
            </div>
            </th>
            <th class="th2"  style=" width: 1500px; font-family: 'Open Sans', Arial, sans-serif; background-color:#FFFFFF;">
            <div>
            <b style="font-size: 20px;" class="b3">{{$hol->name}}</b>
            </div>
            <div>
            @if($hol->status=="Disponible")
                  <b style="font-size: 16px; color: #3c7922">{{$hol->status}}</b>
                   @elseif($hol->status=="Realizado")
                   <b class="b3">{{$hol->status}}</b>
                   @elseif($hol->status=="Cancelado")
                   <b style="font-size: 16px; color:red">{{$hol->status}}</b>
                  @else
                   <b style="font-size: 16px; color: red">{{$hol->status}}</b>
                  @endif
            </div>
            <div>
            <span style="font-size: 16px; color: #75787c;"><b>Horario:</b> {!!$hol->time!!}</span>
            </div>
            <div>
            <span style="font-size: 16px; color: #75787c;"><b>Precio:</b> {!!$hol->price!!}</span>
            </div>
            <div>
            <span style="font-size: 16px; color: #75787c;"><b>Descuentos:</b> {!!$hol->discount!!}</span>
            </div>
            <div>
            <span style="font-size: 16px; color: #75787c;"><b>Instructor:</b> {!!$hol->nombre_instructor!!} {!!$hol->last_name!!}</span>
            </div>
            <div style="margin-bottom: 30px;">
            <span style="font-size: 16px; color: #75787c;"><b>Ubicación:</b> {!!$hol->street!!}</span>
            </div>
            <div style="margin-bottom: 10px;">
                <a style="background-color: #b8b9bb; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="{!!$hol->maps!!}" target="_blank" ;>Ver ubicación</a>
                <a style="background-color: #b8b9bb; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="{{url('imprimirevento',$hol->id_evt_wrk)}}">Descargar información</a>
               
                <a style="background-color: #001d4c; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="#contact_tech">¡Registrarme ahora!</a>
            </div>
            </th>
              
          </tr>
            
              @endforeach
              @else

              <div 
   class="alert alert-dismissable alert-warning" style="background-color: white;border-color: #bdbbb7">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4 style="color: #1d1c1c70">Gracias por tu interés...</h4>
                <p style="color: #4c4949">En este momento no tenemos fechas programadas de este taller, escríbenos para más información.<br>
                  <button type="button" class="btn " style="margin-top: 6px; background-color:  #6fa8dc;"><a href="#contact_tech" style="color: white">Más información</a></button></p>
              </div>
            </div>

              @endif 
          <br>

        </table>------------------->





        <!------------------>


 <section  class=" section orange" align="center" style="margin-top: -1%">
  
        

     @if(count($evabierto)>0)
                      @foreach($evabierto as $hol)
      

          <table class="tablita" id="websendeos" style="border: 1px solid #80808087;    margin-bottom: 5px;"><!--teniaa estilos del main de table2------>
          
      
          <tr>
            <th class="th2" style="width:20%; font-family: 'Open Sans', Arial, sans-serif;">
            <div style="text-align: center; margin-top: 20px; margin-bottom: 35px;">
            <b style="font-size: 18px;" class="b3">{{$hol->start_date}} <br> al <br> {{$hol->end_date}}</b>
           
            </div>
              <div style="text-align: center; margin-bottom: 35px;">
            <span style="font-size: 16px; color: #75787c;">{{$hol->city}}</span><br>
            <span style="font-size: 16px; color: #75787c;">{{$hol->state}}</span><br>
            <span style="font-size: 16px; color: #75787c;">{{$hol->country}}</span>
            </div>
            
           <!-- <div style="text-align: center;">
            <span style="font-size: 16px; color: #75787c;">{{$hol->duration}}</span>
            </div>-->
             <span style=" color: #75787c;"><b style="color: #accbe6;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
            </th>
            <th class="th2"  style=" width: 1500px; font-family: 'Open Sans', Arial, sans-serif; background-color:#FFFFFF;">
            <div>
            <b style="font-size: 20px;" class="b3">{{$hol->name}}</b>
            </div>
            <div>
            @if($hol->status=="Disponible")
                  <b style="font-size: 16px; color: #3c7922">{{$hol->status}}</b>
                   @elseif($hol->status=="Realizado")
                   <b class="b3">{{$hol->status}}</b>
                   @elseif($hol->status=="Cancelado")
                   <b style="font-size: 16px; color:red">{{$hol->status}}</b>
                  @else
                   <b style="font-size: 16px; color: red">{{$hol->status}}</b>
                  @endif
            </div>
            <div>
            <span style="font-size: 16px; color: #75787c;"><b>Horario:</b> {!!$hol->time!!}</span>
            </div>
             <div>
            <span style="font-size: 16px; color: #75787c;"><b>Duración:</b>  {{$hol->duration}}</span>
            </div>
            <!--<div>
            <span style="font-size: 16px; color: #75787c;"><b>Precio:</b> {!!$hol->price!!}</span>
            </div>
            <div>
            <span style="font-size: 16px; color: #75787c;"><b>Descuentos:</b> {!!$hol->discount!!}</span>
            </div>-->
            <div>
            <span style="font-size: 16px; color: #75787c;"><b>Instructor:</b> {!!$hol->nombre_instructor!!} {!!$hol->last_name!!}</span>
            </div>
            <div style="margin-bottom: 30px;">
            <span style="font-size: 16px; color: #75787c;"><b>Ubicación:</b> {!!$hol->street!!}</span>
            </div>
          
                                       @php


$xd = $hol->id_evt_wrk;

$date_now = date('Y-m-d');
 $to = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));
        
                @endphp    


<?php $content = DB::table('events_workshops') 
->select('workshops.name','events_workshops.id_evt_wrk','precios.*','events_workshops.start_date','events_workshops.end_date','precios.fk_id_precios')  
->join('precios', 'precios.fk_id_precios', '=', 'events_workshops.id_evt_wrk')
->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
//->groupBy('precios.fk_id_precios')
->orderBy('start_date','ASC')
->whereBetween('precios.vigencia_fin', [$date_now, $to])
->where('events_workshops.id_evt_wrk', $xd)
 ->get();   ?>

                    
<!--<style type="text/css">
  ul.acorh,
ul.acorh * {
margin: 0;
padding: 0;
border: 0;
}
ul.acorh {
margin: 10px auto;
padding: 0;
list-style: none;
width: 100%;
font-size: 18px;
}
ul.acorh li {
list-style: none;
}
ul.acorh li a {
display: block;
padding: 10px 10px 10px 20px;
background: #1abac7;
color: white;
border-bottom: 1px solid #000;
border-top: 1px solid green;
text-decoration: none;
box-sizing: border-box;
}
ul.acorh li ul {
max-height: 0;
margin: 0;
padding: 0;
list-style: none;
overflow: hidden;
transition: .3s all ease-in;
}
ul.acorh li li a {
padding: 10px 10px 10px 40px;
background: black;
color: #000;
font-size: 16px;
border: 0;
border-bottom: 1px solid #ccc;
box-sizing: border-box;
}
ul.acorc li li:last-child a {
border-bottom: 0;
}
ul.acorh li:hover ul {
max-height: 600px;
transition: .3s all ease-in;
}
ul.acorh li a:hover {
background: gray;
color: #fff;
}
</style>-->
<style type="text/css">.content { 
 
    display: none; 
 
} 
 
input:checked + span, 
 
input:checked + input { 
 
    display: block; 
 
}


input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  border-radius: 50%;
  width: 16px;
  height: 16px;

  border: 2px solid #999;
  transition: 0.2s all linear;
  margin-right: 5px;

  position: relative;
  top: 4px;
}

input:checked {
  border: 6px solid black;
}



</style>
<style type="text/css">
    @media only screen and (max-device-width: 2625px) and (min-device-width: 504px){
div.firstprecio{

    margin-top: -3%;
}
}

@media (max-width: 503px)  and (min-device-width:300px){
    

    div.firstprecio{
      margin-top: -15%;
    }
    
}
</style>
<div class="firstprecio">
   <span style="font-size: 16px; color: #75787c;"><b>Precios y descuentos:</b></span>

<form id='group'> 

        @foreach($content as $contenido)
        @php
           setlocale(LC_TIME, 'es_MX.UTF-8');
           $vigencia_fin = strftime("%d %b %Y", strtotime($contenido->vigencia_fin));
           $contenido->vigencia_fin = $vigencia_fin;
         @endphp
          @if($contenido->tipo != "Cupón")   
 
    <div>  
    <label style="font-weight: 500;color: #75787c;font-size: 16px; "> 
     <input type="radio" name="group1" class="trigger" data-rel="abc"  /> {{ $contenido->descripcion }} ${{ number_format($contenido->preciomx, 2) }} MXN / ${{ number_format($contenido->preciousd, 2) }} USD (Vigente al {{ $contenido->vigencia_fin }})
     <span class="abc content" style="margin-top: 2%">
     <a style="background-color: #1abac7; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="{{ url('/mostrarevento/'.$contenido->id_evt_wrk) }}/2/{{$contenido->precios_id}}">Pagar MXN</a>
     <a style="background-color: #1abac7; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="{{ url('/mostrarevento/'.$contenido->id_evt_wrk) }}/1/{{$contenido->precios_id}}">Pagar USD</a>
     </span> 
    </label> 
    </div> 
  @endif
      @endforeach 
    <br> 
 
</form>
</div>
<!--<div class="firstprecio">

<ul class="acorh">
  <li><a href="#">Precios y descuentos</a>
    <ul>
      
      @foreach($content as $contenido)
        @php
           setlocale(LC_TIME, 'es_MX.UTF-8');
           $vigencia_fin = strftime("%d %b %Y", strtotime($contenido->vigencia_fin));
           $contenido->vigencia_fin = $vigencia_fin;
         @endphp
          @if($contenido->tipo != "Cupón") 
             <li style="font-size: 16px; color: #75787c;margin-bottom: 1%;"> {{ $contenido->descripcion }} ${{ number_format($contenido->preciomx, 2) }} MXN / ${{ number_format($contenido->preciousd, 2) }} USD (Vigente al {{ $contenido->vigencia_fin }}) <a class="btn btn-info" style="color: white;background-color: #ffc000;" href="{{ url('/pagar/'.$contenido->precios_id) }}" placeholder="pagar" name="primera_seccion">Pagar</a></li>
          @endif
        @endforeach  
        
    </ul>


</ul>
</li>
</div>--->

           
            <div style="margin-bottom: 10px;">
                <a style="background-color: #b8b9bb; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="{!!$hol->maps!!}" target="_blank" ;>Ver ubicación</a>
               <!-- <a style="background-color: #b8b9bb; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="{{url('imprimirevento',$hol->id_evt_wrk)}}">Descargar información</a>
                <a style="background-color: #b8b9bb; display: inline-block; width: 200px;" class="btn btn-info2">Nosotros</a>-->
                <a style="background-color: #001d4c; display: inline-block; width: 200px;" class="btn btn-info bot espacio" href="#contact_tech">¡Necesito + info!</a>
            </div>   
            </th>
              
          </tr>
            
        
            </div>

       
          <br>

        </table>         @endforeach
         @else

              <div 
   class="alert alert-dismissable alert-warning" style="background-color: white;border-color: #bdbbb7">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4 style="color: #1d1c1c70">Gracias por tu interés...</h4>
                <p style="color: #4c4949">En este momento no tenemos fechas programadas de este taller, escríbenos para más información.<br>
                  <button type="button" class="btn " style="margin-top: 6px; background-color:  #6fa8dc;"><a href="#contact_tech" style="color: white">Más información</a></button></p>
              </div>
            </div>

              @endif 
          <br>

        <!------------------->
</div>
</div>
        </div>
        

      </div>
    </div>

   </div>
 </section>


      

<style type="text/css">




}
  @media only screen and (max-device-width: 1025px) and (min-device-width: 504px){
div.col-xs-12.myTable{

    margin-left: 42%;
}
}
@media (max-width: 600px)  and (min-device-width:300px){
    

    .tablita{
      margin-left: -5%
    }
    
}

.myTable{

    /* Safari, Opera, and Chrome */
  /**  display: -webkit-box;**/
    -webkit-box-pack: center;
    -webkit-box-align: center;

    /* Firefox */
    display: -moz-box;
    -moz-box-pack: center;
    -moz-box-align: center;

    /* Internet Explorer 10 */
    display: -ms-flexbox;
    -ms-flex-pack: center;
    -ms-flex-align: center;
}

table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid gray;
}

  @media only screen and (max-device-width: 480px) and (min-device-width: 320px){
section#talleres.section.orange {
 padding: 10px 0 20px;
}



}

@media (max-width: 1300px)  and (min-device-width: 602px){
    

    a.btn.btn-info.bot{
      margin-top: 3px;
    }
    
}

@media (max-width: 1290px){
    
    .btn-info{
      margin-top: 10px;
    }  
      
  }

@media (max-width: 700px){
    
  .btn-primary{
      margin-bottom: 10px;
    }
    
}
@media (max-width: 768px){
.espacio {
    margin-bottom: 8px;
}
}

@media (max-width: 320px){
  
  .myTable{
      margin-left: -5px;
    }
    
    
}



  }


</style>

