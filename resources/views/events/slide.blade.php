<!--borrar<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 <!--borrar <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
 <!--borrar <div class="carousel-inner" role="listbox" style="height:90%">
    <div class="item active">
      <div class="hero_slide_content text-center" style="position: absolute; margin-top:12%; margin-left: 35%;">
        <h1 style="font-size: 50px" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" >TALLER<br/> </h1>
        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Lego<b style="font-size: 40px">®</b> Serious <span style="background-color: #f96c6c"> Play<b style="font-size: 40px">®</b></span></h1>
      </div>
      <img src="{{ asset('images/slider/legoportada1.jpg') }}" width="100%">
    </div>
    <div class="item">
      <div class="hero_slide_content text-center" style="position: absolute; margin-top:12%; margin-left: 35%;">
        <h1 style="font-size: 50px" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" >TALLER<br/> </h1>
        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Lego<b style="font-size: 40px">®</b> Serious <span style="background-color: #f96c6c"> Play<b style="font-size: 40px">®</b></span></h1>
      </div>
      <img src="{{ asset('images/slider/legoportada2.jpg') }}" width="100%">
    </div>
    <div class="item">
      <div class="hero_slide_content text-center" style="position: absolute; margin-top:12%; margin-left: 35%;">
        <h1 style="font-size: 50px" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" >TALLER<br/> </h1>
        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Lego<b style="font-size: 40px">®</b> Serious <span style="background-color: #f96c6c"> Play<b style="font-size: 40px">®</b></span></h1>
      </div>
      <img src="{{ asset('images/slider/legoportada3.jpg') }}" width="100%">
    </div>
  </div>

  <!-- Controls -->
  <!--borrar<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->

<!--<section id="e" class="section " style="margin-top: -10%">

 <div class="row" id="box-search">
 <div class="thumbnail text-center">
 <img src="{{ asset('images/slider.jpg') }}" class="img2" height="87%" alt="" class="img-responsive">
 <div class="caption">
 <p align="center" style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quisquam?</p>
 </div>
 </div>
 </div> 
</section>---->


<section id="e" class="section " style="margin-top: -10%">
  <div class="col-md-12">
    <div class="row">
      <div class="span12" class="imgr">
    <img src="{{ asset($event->workshops->img_main) }}" class="img2" width="100%" height="98%" class="img-fluid" alt="Responsive image">
    <div class="caption" class="margen">
      <p align="center" class="margen d" style="color: white;  background-color: #3830309e"><b class="texto" style=" line-height: 48px;" >{{$event->workshops->name}}</b></p><BR>
      <div align="center"><b class="texto2" style=" line-height: 48px; text-align: center; color: white;background-color: #033e6b" >Información del evento</b></div>
 </div>
        </div>
         </div>
       </div></div> </section>

 
<style type="text/css">
   @media (max-width: 767px){
b.texto2 {
    font-size: 22px;
        font-weight: 400;

  
}
}
 @media (min-width: 767px){
b.texto2 {
    font-size: 32px;
  
}
}

  @media only screen and (max-device-width: 480px) and (min-device-width: 320px){
section#e.section{
 padding: 0px 0 0px;
}
.img2{  /****estilo principal de imagen slider ****/
  margin-top: -12%;
  height: 50%;
}
.caption h1.#texto{
  font-size: 10%;
}
b.texto{
 
      color: white;
    line-height: 48px;
    font-weight: 200;

}
p.margen{
  margin-top:  -108px;
  /**background-color: #5f5b5b9c;**/
}
}




</style>


<style type="text/css">
  .thumbnail {
 position: relative;
}
.caption {
 position: absolute;
 top: 45%;
 left: 0;
 width: 100%;
}

 @media (max-width: 767px){
b.texto {
    font-size: 32px;
  
}
}
 @media (min-width: 767px){
b.texto {
    font-size: 52px;
  
}
}

 @media only screen and (max-device-width: 485px) and (min-device-width: 481px){
.img2{
  margin-top: -23%;
  height: 50%;
}
}
 @media only screen and (max-device-width: 519px) and (min-device-width: 486px){
.img2{
  margin-top: -23%;
  height: 50%;
}
}
@media only screen and (max-device-width: 540px) and (min-device-width: 520px){
.img2{
  margin-top: -23%;
  height: 40%;
}
}
@media only screen and (max-device-width: 560px) and (min-device-width: 541px){
.img2{
  margin-top: -23%;
  height: 40%;
}
}
@media only screen and (max-device-width: 581px) and (min-device-width: 561px){
.img2{
  margin-top: -23%;
  height: 40%;
}
}
@media only screen and (max-device-width: 600px) and (min-device-width: 582px){
.img2{
  margin-top: -23%;
  height: 40%;
}
}
@media only screen and (max-device-width: 623px) and (min-device-width: 601px){
.img2{
  margin-top: -23%;
  height: 40%;
}
}

</style>