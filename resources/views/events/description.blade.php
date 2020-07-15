<!--<div class="container">    
  <div class="row">
    <!-- Nombre del taller del evento -->
 <!--   <h1 class="container h" style="margin-top: -7%;   "></h1><br>
    <!-- Descripción del Taller del evento -->
   <!--- <b class="b3">{!!$event->workshops->description!!}</b><br>
    <br>
    <a style="background-color: #033e6b;" class="btn btn-primary btn-sm" href="{{url('workshop',$event->workshops->workshop_id)}}";>Ficha técnica</a><br><br>

  </div>
</div>-->


<section id="desc" class="section" style="background-color:  margin-top: 11%"><!----tenia 2 le puse 12 mientras------>
  <h1 class="container h" style="margin-top: -12%;  ">{{$event->workshops->name}}</h1>
  <div class="container d" style="text-align: justify;">
     <br><b class="b3">
{!!$event->workshops->description!!}</b> <br>
   <br>
   <a class="btn btn-info" href="{{url('imprimirevento',$event->id_evt_wrk)}}">Descargar información</a>
    
  </div>
</section>
<!-- Descripción del evento -->
<!--

  <a style="background-color: #033e6b;" class="btn btn-primary btn-sm botondescarga"  href="{{url('workshop',$event->workshops->workshop_id)}}";>Ficha técnica</a><br><br>
  
  
  
  
  <div class="container">
  <div class="row">
    <div class="col-md-6" style="border-top: 2px solid #76C7FF;"><br>
      <img src="{{asset('images/iconos_evt/1detalle.png')}}" width="7%" height="5%">
      Inicia
    </div>
    <div class="col-md-6" style="background:#C7F5FF; border-top: 2px solid #76C7FF;"><br>
      <img src="{{ asset('images/icons/espacio.png') }}" width="7%" height="5%">
      {{$event->start_date}}
    </div>
    <div class="col-md-6" style="border-top: 2px solid #76C7FF;">
      <img src="{{asset('images/iconos_evt/2detalle.png')}}" width="5%" height="3%">
      &nbsp;Horario
    </div>
    <div class="col-md-6" style="background:#C7F5FF; border-top: 2px solid #76C7FF;">
      <img src="{{ asset('images/icons/espacio.png') }}" width="5%" height="3%">
      {{$event->events->time}}
    </div>
      <div class="col-md-6" style="border-top: 2px solid #76C7FF;">
      <img src="{{asset('images/iconos_evt/3detalle.png')}}" width="5%" height="3%">
      &nbsp;Ubicación
    </div>
    <div class="col-md-6" style="background:#C7F5FF; border-top: 2px solid #76C7FF;">
      <img src="{{ asset('images/icons/espacio.png') }}" width="5%" height="3%">
      La ubicación es en {{$event->address->street}} No. {{$event->address->no_ext}} Int. {{$event->address->no_int}} {{$event->address->region}} C.P. {{$event->address->cp}}, {{$event->address->state}}, {{$event->address->city}}, {{$event->address->country}}.
    </div>
    <div class="col-md-6" style="border-top: 2px solid #76C7FF;">
      <img src="{{asset('images/iconos_evt/4detalle.png')}}" width="5%" height="3%">
      &nbsp;Precio
    </div>
    <div class="col-md-6" style="background:#C7F5FF; border-top: 2px solid #76C7FF;">
      <img src="{{ asset('images/icons/espacio.png') }}" width="5%" height="3%">
      {{$event->events->price}}
    </div>
    <div class="col-md-6" style="border-top: 2px solid #76C7FF;">
      <img src="{{asset('images/iconos_evt/5detalle.png')}}" width="5%" height="3%">
      &nbsp;Descuentos
    </div>
    <div class="col-md-6" style="background:#C7F5FF; border-top: 2px solid #76C7FF;">
      <img src="{{ asset('images/icons/espacio.png') }}" width="5%" height="3%">
      {{$event->events->discount}}
    </div>
    <div class="col-md-6" style="border-top: 2px solid #76C7FF;">
      <img src="{{asset('images/iconos_evt/6detalle.png')}}" width="5%" height="3%">
      &nbsp;Formas de pago
    </div>
    <div class="col-md-6" style="background:#C7F5FF; border-top: 2px solid #76C7FF;">
      <img src="{{ asset('images/icons/espacio.png') }}" width="5%" height="3%">
      {{$event->events->pays}}
    </div>
    <div class="col-md-6" style="border-top: 2px solid #76C7FF;border-bottom: 2px solid #76C7FF;">
      <img src="{{asset('images/iconos_evt/7detalle.png')}}" width="5%" height="3%">
      &nbsp;Inscripciones
    </div>
    <div class="col-md-6" style="background:#C7F5FF; border-top: 2px solid #76C7FF;border-bottom: 2px solid #76C7FF;">
      <img src="{{ asset('images/icons/espacio.png') }}" width="5%" height="3%">
      {{$event->events->inscriptions}}
    </div>
  </div>
</div>
-->

<!-- Nombre del taller del evento -->

<!-- Descripción del evento -->
<!--<div class="container">

<div class="row">
  <div class="col-md-6"><img src="{{asset('images/iconos_evt/1detalle.png')}}" width="100" height="100"><b>   Inicia  </b>
  </div>
  <div class="col-md-6" id="derecha2" style="background:#cfe2f3;">{{$event->start_date}}</div>
</div>
<div class="row">
  <div class="col-md-6"><img src="{{asset('images/iconos_evt/2detalle.png')}}" width="100" height="100"><b>   Horario</b></div>
  <div class="col-md-6">{{$event->events->time}}</div>
</div>
<div class="row">
  <div class="col-md-6"><img src="{{asset('images/iconos_evt/3detalle.png')}}" width="100" height="100"><b>   Ubicación</b></div>
  <div class="col-md-6">
    La ubicación es en {{$event->address->street}} No. {{$event->address->no_ext}} Int. {{$event->address->no_int}} {{$event->address->region}} C.P. {{$event->address->cp}},  {{$event->address->city}}, {{$event->address->state}}, {{$event->address->country}}.
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="{{asset('images/iconos_evt/4detalle.png')}}" width="100" height="100"><b>   Precio</b></div>
  <div class="col-md-6">{{$event->events->price}}</div>
</div>
<div class="row">
  <div class="col-md-6"><img src="{{asset('images/iconos_evt/5detalle.png')}}" width="100" height="100"><b>   Descuentos</b></div>
  <div class="col-md-6">{{$event->events->discount}}</div>
</div>
<div class="row">
  <div class="col-md-6"><img src="{{asset('images/iconos_evt/6detalle.png')}}" width="100" height="100"><b>   Formas de pago</b></div>
  <div class="col-md-6">{{$event->events->pays}}</div>
</div>
<div class="row">
  <div class="col-md-6"><img src="{{asset('images/iconos_evt/7detalle.png')}}" width="100" height="100"><b>   Inscripciones</b></div>
  <div class="col-md-6">{{$event->events->inscriptions}}</div>
</div>
</div>-->



    <style type="text/css">
      @media (max-width: 767px){
.container.d {
    width: auto;
    margin-top: -32px;
}
}
  @media (max-width: 500px){
h1.container.h {
    font-size: 28px;
    margin-bottom: 20px;
    color: #444444;
    font-weight: 700
}
}
@media (max-width: 992px){
    .col-md-3{
      display: none;
    }  
}

    
@media screen (max-width: 992px){
        
hr#line {
    border-top: 3px solid red;
    margin-top: -30px;
    margin-bottom: 0px;
}
   
}
      
#izquierda{
        height:50%;
        background-color:#BDD2EF;
        float:left;
        width:50%;
}
#derecha{
  /** height:35%;**/
        height:30%;
        background-color:#DAF7E2;
        float:right;
        width:50%;
}
#derechablue{
  /** height:35%;**/
        height:5%;
        background-color:red;
        float:right;
        width:50%;
}
#izquierda2{
  /** height:35%;**/
        height:30%;
        background-color:red;
        float:left;
        width:50%;
}

    
    </style>







  <style type="text/css">
     @media only screen and (max-width: 480px){
.botondescarga {
  margin-top: 2%;
}
}
  @media only screen and (max-device-width: 480px) and (min-device-width: 320px){
section#desc.section {
 padding: 30px 0 30px;
}
@media (max-width: 992px){
    .col-md-9.r{
      margin-left: -12%;
    }
    .col-md-6.r{
      margin-left: -30%;
    }   
}
</style>
<section>
<div class="col-xl-12">
<div class="row">
  <hr style=" border-top: 3px solid #0b5394;margin-top: -0px;
    margin-bottom: 0px;">
    <div align="left"  class="col-md-6 r" style="margin-top: 1%;">
      <img style="margin-left: 22%" src="{{asset('images/iconos_evt/1detalle.png')}}" width="100" height="100"><b>   Inicia  </b>
    </div>
    <div class="col-md-6" style="background-color:#cfe2f3">
    <div align="center" id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px; "><b class="b3"><br/><br/>  {{$event->start_date}}</b> 
    </div>
     <div id="derechablue" class="col-md-3" style="background-color:#cfe2f3"></div>
    </div>
  </div>
<hr id="line" style="border-top: 3px solid #0b5394;margin-top: -30px; margin-bottom: 0px;"><!---este--->
<div class="row">
  <div align="left"  class="col-md-6 r" style="margin-top: 1%;">
      <img style="margin-left: 22%" src="{{asset('images/iconos_evt/2detalle.png')}}" width="100" height="100"><b>    Horario  </b>
    </div>
    <div class="col-md-6" style="background-color:#cfe2f3">
    <div id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px;"><b class="b3"><br/><br/>{{$event->events->time}}</b></div>
    <div id="derechablue" class="col-md-3" style="background-color:#cfe2f3"></div>
    </div>
</div>
<hr style=" border-top: 3px solid #0b5394;margin-top: -30px;
    margin-bottom: 0px;">
<div class="row">
  <div align="left"  class="col-md-6 r" style="margin-top: 1%;">
      <img style="margin-left: 22%" src="{{asset('images/iconos_evt/3detalle.png')}}" width="100" height="100"><b>    Ubicación  </b>
    </div>
    <div class="col-md-6" style="background-color:#cfe2f3">
    <div id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px;"><b class="b3"><br/><br/>La ubicación es en {{$event->address->street}} {{$event->address->no_ext}}  {{$event->address->no_int}} {{$event->address->region}} {{$event->address->cp}} {{$event->address->state}} {{$event->address->city}} {{$event->address->country}}</b><br><br>

          <a style="background-color: #033e6b;" class="btn btn-primary btn-sm" href=" {{$event->address->maps}}" target="_blank" ;>Clic para ver ubicación</a><br><br>

    </div>
   <!-- <div id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px;"><b class="b3"><br/><br/>La ubicación es en {{$event->address->street}} No. {{$event->address->no_ext}} Int. {{$event->address->no_int}} {{$event->address->region}} C.P. {{$event->address->cp}}, {{$event->address->state}}, {{$event->address->city}}, {{$event->address->country}}.</b></div>-->
    <div id="derechablue" class="col-md-3" style="background-color:#cfe2f3"></div>
    </div>
</div>
    <hr id="line" style="border-top: 3px solid #0b5394;margin-top: -30px; margin-bottom: 0px;"><!---este--->
<div class="row">
  <div align="left"  class="col-md-6 r" style="margin-top: 1%;">
      <img style="margin-left: 22%" src="{{asset('images/iconos_evt/4detalle.png')}}" width="100" height="100"><b>    Precio  </b>
    </div>
    <div class="col-md-6" style="background-color:#cfe2f3">
    <div id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px;"><b class="b3"><br/><br/>{{$event->events->price}}</b></div>
    <div id="derechablue" class="col-md-3" style="background-color:#cfe2f3"></div>
    </div>
</div>
<hr style=" border-top: 3px solid #0b5394;margin-top: -30px;
    margin-bottom: 0px;">
<div class="row">
  <div align="left"  class="col-md-6 r" style="margin-top: 1%;">
      <img style="margin-left: 22%" src="{{asset('images/iconos_evt/5detalle.png')}}" width="100" height="100"><b>    Descuentos  </b>
    </div>
    <div class="col-md-6" style="background-color:#cfe2f3">
    <div id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px;"><b class="b3"><br/><br/>{{$event->events->discount}}
</b></div>
    <div id="derechablue" class="col-md-3" style="background-color:#cfe2f3"></div>
    </div>
</div>
<hr style=" border-top: 3px solid #0b5394;margin-top: -30px;
    margin-bottom: 0px;">
<div class="row">
  <div align="left"  class="col-md-6 r" style="margin-top: 1%;">
      <img style="margin-left: 22%" src="{{asset('images/iconos_evt/6detalle.png')}}" width="100" height="100"><b>    Formas de pago  </b>
    </div>
    <div class="col-md-6" style="background-color:#cfe2f3">
    <div id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px;"><b class="b3"><br/><br/>{{$event->events->pays}}</b></div>
    <div id="derechablue" class="col-md-3" style="background-color:#cfe2f3"></div>
    </div>
</div>
<hr style=" border-top: 3px solid #0b5394;margin-top: -30px;
    margin-bottom: 0px;">
    <div class="row">
  <div align="left"  class="col-md-6 r" style="margin-top: 1%;">
      <img style="margin-left: 22%" src="{{asset('images/iconos_evt/7detalle.png')}}" width="100" height="100"><b>    Inscripciones  </b>
    </div>
    <div class="col-md-6" style="background-color:#cfe2f3">
    <div id="" class="col-md-9" style="background-color:#cfe2f3; text-align: justify; line-height: 28px;"><b class="b3"><br/><br/>{{$event->events->inscriptions}}</b></div>
    <div id="derechablue" class="col-md-3" style="background-color:#cfe2f3"></div>
    </div>
</div>
<hr style=" border-top: 1px solid #0b5394;margin-top: -30px;
    margin-bottom: 0px;">

</div>
</section>



    <style type="text/css">
      @media (max-width: 767px){
.container.d {
    width: auto;
    margin-top: -32px;
}
}
  @media (max-width: 500px){
h1.container.h {
    font-size: 28px;
    margin-bottom: 20px;
    color: #444444;
    font-weight: 700
}
}
@media (max-width: 992px){
    .col-md-3{
      display: none;
    }  
}

    
@media screen (max-width: 992px){
        
hr#line {
    border-top: 3px solid red;
    margin-top: -30px;
    margin-bottom: 0px;
}
   
}
      
#contenedor{
        background-color:#F4ABF2;
        border:2px solid #FF0000;
}
#cabecera{
        background-color:#E5BC7A;
        height:20%;
}
#menu{
        height:10%;
        background-color:#C8CACC;
}
#izquierda{
        height:50%;
        background-color:#BDD2EF;
        float:left;
        width:50%;
}
#derecha{
  /** height:35%;**/
        height:50%;
        background-color:#DAF7E2;
        float:right;
        width:50%;
}

#izquierda3{
  /** height:35%;**/
        height:30%;
        background-color:red;
        float:left;
        width:50%;
}
#pie{
        height:20%;
        background-color:#D3D1C1;
        clear:both;
}
#todo{
        height:50%;
        background-color:blue;
        clear:both;
}
    
    </style>

