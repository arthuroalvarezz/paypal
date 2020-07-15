  <script type="text/javascript">
      function visualiza_primero() {
         document.getElementById('primero').style.visibility='visible';
         document.getElementById('primero').style.display='block';
         document.getElementById('segundo').style.visibility='hidden';
         document.getElementById('segundo').style.display='none';
      };
      function visualiza_segundo() {
         document.getElementById('segundo').style.visibility='visible';
         document.getElementById('segundo').style.display='block';
         document.getElementById('primero').style.visibility='hidden';
         document.getElementById('primero').style.display='none';};
     
   </script>


   
   
<style type="text/css">
  .btnins{
    display: inline-block;
    padding: 1px 2px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    vertical-align: middle;

    touch-action: manipulation;
    cursor: pointer;

    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;


}
       @media screen and (max-width: 560px)  {
      .margin3 {
  margin-left: 9%;
       @media screen and (min-width: 1504px)  {
      .row3{
    margin-left:8%;
            }
    }
  }
}

    .btn3:hover {
     background: white !important;
}
.collapsing {
    background-color: white;
  }


</style>

<!--.b4 {
    color: black;
    font-size: 15px;
    font-weight: 100px;
}
-->
<section id="nosotros" class="section team " style="background-color: #f2f2f2;">

<div class="container" align="center">
        <h2 style="margin-bottom: 40px; font-size: 46px; font-weight: 700; letter-spacing: -1px;" class="team">Nosotros</h2>
<p style="font-size: 22px; text-shadow: 2px 2px 4px white;  margin: 20px 10px 60px 10px;"><b>Acerca de Innovatium®</b></p>

@foreach($abouts as $item_no)
<hr style=" border-top: 3px solid #b8b8b8;margin-top: -0px; align-items: center;width: 100%;
    margin-bottom: 0px;"> 
 <button style="background-color: white; color: black; width:100%;" type="button" class="btnins btn-lg btn-info collapsed">

<a onclick="return verocultar(this);"
     href="javascript:void(0);"><h2 style="font-size: 14px;font-weight: 700;margin-top: 0px;" >{{$item_no->titulo1 }}</h2><div class="mo" style="float: right;"><span id="primero" style="visibility:visible;" onclick="visualiza_segundo()"  class="glyphicon glyphicon-plus"></span>
</div></a><div class="textoazul" style="display: none;"></br>
<b class="b3">{!!$item_no->texto1!!}</b></br>
</div>
</button>
@endforeach()
    <hr style=" border-top: 3px solid #b8b8b8;margin-top: -0px;
    margin-bottom: 0px;">
</div>
<br>
<br>

<div class="container" align="center">
        <p style="font-size: 22px; text-shadow: 2px 2px 4px white;  margin: 20px 10px 60px 10px;"><b>Nuestro equipo de trabajo</b></p>
</div>
<style type="text/css">
      @media only screen and (max-device-width: 769px) and (min-device-width: 300px){

     .mo {
  margin-top: -2%
}
}
      @media only screen and (max-device-width: 2669px) and (min-device-width: 770px){

     .mo {
  margin-top: -1.7%
}
}
      @media only screen and (max-device-width: 769px) and (min-device-width: 300px){

     .textoazul {
      margin-top: 5.5%
}
}

</style>

<div class="container" align="center">
@foreach($instructors as $item_in)
<hr style=" border-top: 3px solid #b8b8b8;margin-top: -0px; align-items: center;width: 100%;
    margin-bottom: 0px;"> 
 <button style="background-color: white; color: black; width:100%;" type="button" class="btnins btn-lg btn-info collapsed">

<a onclick="return verocultar(this);"
     href="javascript:void(0);"><h2 class="b4" style="font-size: 14px;font-weight: 700;margin-top: 0px;">{{$item_in->name }} {{$item_in->last_name }} - {{$item_in->rol }}</h2><div class="mo" style="float: right;"><span id="primero" style="visibility:visible;" onclick="visualiza_segundo()"  class="glyphicon glyphicon-plus"></span>
</div></a><div class="textoazul" style="display: none;"></br>
<div class="col-md-12" style="background-color: rgb(213, 236, 255);">
     <div align="center" class="col-md-4" style="background-color: rgb(213, 236, 255)" > 
           <img src="" class="img-responsive" width="60%" height="40%">
      <img src="{{ asset($item_in->photo) }}" style="    border-radius: 50%!important;" class="img-responsive" width="80%" height="%"></br>
    </div>
    <div class="col-md-8" style="background-color: rgb(213, 236, 255); text-align: justify;">
      <b class="b5"> {{$item_in->description}}</b>
    </div>
    </div>
</div>
</button>
@endforeach()
    <hr style=" border-top: 3px solid #b8b8b8;margin-top: -0px;
    margin-bottom: 0px;">
</div>



<br><br>


  </section>

<!-- partial -->
 <script type='text/JavaScript'>

     function verocultar(cual) {
          var c=cual.nextSibling;
          if(c.style.display=='none') {
               c.style.display='block';
                c.style.background = "#d5ecff";
          } else {
               c.style.display='none';
          }
          return false;
     }
</script>



