
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
    font-size: 12px;
  
}
}
 @media (min-width: 767px){
b.texto {
    font-size: 52px;
  
}
}




  @media only screen and (max-device-width: 480px) and (min-device-width: 300px){
section#e.section{
 padding: 0px 0 0px;
}

.img2{  /****estilo principal de imagen slider ****/
  margin-top: -10%;
  height: 40%;
}
.caption h1.#texto{
  font-size: 12%;
}
b.texto{
 
      color: white;
    line-height: 28px;
    font-weight: 400;
    font-size: 17px;

}
p.margen{
  margin-top: -33px;
}
}

 @media only screen and (max-device-width: 485px) and (min-device-width: 481px){
.img2{
  margin-top: -23%;
  height: 60%;
}
section#e.section{
 padding: 50px 0 0px;
}


b.texto{
 
      color: white;
    line-height: 28px;
    font-weight: 400;
    font-size: 28px;

}
p.margen{
  margin-top: -33px;
}
}
 @media only screen and (max-device-width: 519px) and (min-device-width: 486px){
.img2{
  margin-top: -23%;
  height: 50%;
}
section#e.section{
 padding: 50px 0 0px;
}

b.texto{
 
      color: white;
    line-height: 28px;
    font-weight: 400;
    font-size: 28px;

}
p.margen{
  margin-top: -33px;
}
}
@media only screen and (max-device-width: 540px) and (min-device-width: 520px){
.img2{
  margin-top: -15%;
  height: 40%;
}
section#e.section{
 padding: 50px 0 0px;
}

b.texto{
 
      color: white;
    line-height: 28px;
    font-weight: 400;
    font-size: 28px;

}
p.margen{
  margin-top: -33px;
}
}
@media only screen and (max-device-width: 680px) and (min-device-width: 541px){
.img2{
  margin-top: -13%;
  height: 40%;
}
section#e.section{
 padding: 50px 0 0px;
}

b.texto{
 
      color: white;
    line-height: 28px;
    font-weight: 400;
    font-size: 28px;

}
p.margen{
  margin-top: -33px;
}
}

@media only screen and (max-device-width: 766px) and (min-device-width: 681px){
.img2{
  margin-top: -13%;
  height: 60%;
}
section#e.section{
 padding: 50px 0 0px;
}

b.texto{
 
      color: white;
    line-height: 28px;
    font-size:33px;

}
p.margen{
  margin-top: -33px;
}
}
@media only screen and (max-device-width: 980px) and (min-device-width: 767px){
.img2{
  margin-top: -1%;
  height: 60%;
}
section#e.section{
 padding: 50px 0 0px;
}

b.texto{
 
      color: white;
    line-height: 28px;
    font-size:35px;

}
p.margen{
  margin-top: 33px;
}
}
@media only screen and (max-device-width: 1280px) and (min-device-width: 981px){
.img2{
  margin-top: -1%;
  height: 86%;
}
section#e.section{
 padding: 50px 0 0px;
}

b.texto{
 
      color: white;/**color tamaño y espaciado del texto***/
    line-height: 48px;
    font-size:35px;

}
p.margen{
  margin-top: 33px;/**posicion de la barra gris***/
}
}
@media only screen and (max-device-width: 2280px) and (min-device-width: 1281px){
.img2{
  margin-top: 3%;
  height: auto;
}
section#e.section{
 padding: 50px 0 0px;
}

b.texto{
 
      color: white;/**color tamaño y espaciado del texto***/
    line-height: 48px;
    font-size:45px;

}
p.margen{
  margin-top: 33px;/**posicion de la barra gris***/
}
}



@media only screen and (max-device-width: 319px) and (min-device-width: 297px){
section.section {
    padding: 10px 0 30px;
}

}

</style>
              @foreach ($workshop as $ho)

<section id="e" class="section " style="margin-top: -10%">
  <div class="col-md-12">
    <div class="row">
      <div class="span12" class="imgr">
        
    <img src="{{ asset($ho->img_main) }}" class="img2" width="100%" class="img-fluid" alt="Responsive image">
    <div class="caption" class="margen">
      <p align="center" class="fondo margen d" style="color: white;  background-color: #3830309e"><b class="texto" style="" >{{$ho->name}}</b></p><BR>

 </div>
        </div>
         </div>
       </div> </section>@endforeach

              <p align="center" class="fondo margen " style="color: white;  background-color: white"><b class="texto" style="color: white;margin-right: 42%" >{{$ho->name}}</b></p>

     

      

<style type="text/css">
   @media (max-width: 767px){
p.margencito {
  margin: 0 0 20px 0; 
  margin-top: -29px; 


}
}


</style>