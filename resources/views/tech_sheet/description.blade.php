
<!--<style type="text/css">
  .bgsize{
  margin-top: 39%;
  width:1200px; 
  height:700px; 
  background-color: white;
}
</style>-->

<script>
  (function() {
    var scrt_var = 10;
    var strLink = "2.html&Key=" + scrt_var;
    document.getElementById("link2").setAttribute("href",strLink);
})();
</script>

<style type="text/css">


.cat {
background-color: white;
}
.cat2 {
background-color: transparent;
}


p {
  background-image: none;
}

.catsandstars {
  background-color: transparent;
}

  @media only screen and (max-device-width: 503px) and (min-device-width: 300px){
section.section.sobre {
margin-top: -23%;
}
.modal {
    margin-left: -30px;
    width: 110%;
}
}
  @media only screen and (max-device-width: 320px) and (min-device-width: 300px){
section.section.sobre {
margin-top: -36%;
}
}
 @media only screen and (max-device-width: 820px) and (min-device-width: 504px){
section.section.sobre {
margin-top: -11%;/*ipad**/
}
}

@media screen and (min-width: 1025px) {
.horizontal-social-bar{
display:none;
}
}

  @media screen and (max-width: 1026px) {
.social{
display:none;
}
}

 @media only screen and (max-device-width: 1220px) and (min-device-width: 821px){
section.section.sobre {
margin-top: -16%;
}

}
 @media only screen and (max-device-width: 1620px) and (min-device-width: 1221px){
section.section.sobre {
margin-top: -9%;/*****/
}
h1.container.h {
    margin-top: -78px;
}
}
 @media only screen and (max-device-width: 1820px) and (min-device-width: 1621px){
section.section.sobre {
margin-top: -7%;
}

}
 @media only screen and (max-device-width: 2220px) and (min-device-width: 1821px){
section.section.sobre {
margin-top: -7%;
}

}
</style>
<!--<div class="container" >
<div class="row">
  <div class="col-xl-12 cat2">
    dd
  </div>
</div>
</div>-->
  @foreach ($workshop as $ho)


<section id="" class="section sobre" style="background-color: white;color: #4c4949;">
   <h1 class="container h">{{$ho->name}}</h1>
     <div class="container d" style="text-align: justify;">
     <div class="horizontal-social-bar">
     <a class="icon2 icon-facebook" href="#" onclick="
    window.open('https://www.facebook.com/share.php?u='+encodeURIComponent(window.location.href)); 
    return false;"></a>
     <a class="icon2 icon-whatsapp" href="#" onclick="
    window.open('https://wa.me/?text='+encodeURIComponent(window.location.href)); 
    return false;"></a>
     <a class="icon2 icon-linkedin2" href="#" onclick="
    window.open('https://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(window.location.href)); 
    return false;"></a>
     </div>
     
<b style="color: #4c4949" class="b3">
{!! $ho->description !!}</b>

   
  </div>


</section>@endforeach
 
              @foreach ($workshop as $ho)

<!--<section id="desc" class="section cat" style="    padding: 0px 0 0px">--><!----tenia 2 le puse 12 mientras------>
 <!-- <h1 class="container h" >{{$ho->name}}</h1>--->
<!--  <div class="container d" style="text-align: justify;">
     <br><b class="b3">
{!! $ho->description !!}</b> <br>
   
  </div>
</section>--->

<!--<div class="cat">
    <p class="catsandstars">
        This paragraph is full of cats<br />and stars.
    </p>
    <p>This paragraph is not.</p>
    <p class="catsandstars">
        Here are more cats for you.<br />Look at them!
    </p>
    <p>And no more.</p>
</div>--->

  <style type="text/css">
  @media only screen and (max-device-width: 480px) and (min-device-width: 320px){
section#desc.section {
 padding: 30px 0 30px;
}
}


</style>

<section id="desc" class="section cat" style=" margin-top: -5%; padding: 0px 0 0px"><!----tenia 2 le puse 12 mientras------>

<div class="container" >

<div class="row imagenes2" style="margin-right: -4px; margin-left: -24px; margin-bottom: 30px">
<div class="containerImages">
@if($ho->img != "") 
<img id="imgpe" src="{{asset($ho->img)}}"  alt="" style="margin-right: 12px">@endif
<img id="imgpe" src="{{asset($ho->logo)}}" class="img-fluid shadow  bg-white rounded" alt="Responsive image">
</div>
<br>
</div>
</div>
</section>



  <style type="text/css">     
    @media (max-width: 788px){
   div.row.imagenes2{
      
    }  
    img#imgpe{
    width:80%;
    max-width:45%;

    }
}

#izquierda3{
        height:50%;
        background-color:white;
        float:left;
        width:50%;
}
#derecha3{
        height:50%;
        background-color:#cfe2f3;
        float:right;
        width:50%;
}



    
    </style>


 <!--   <hr class="" style=" width: 60%; border-top: 3px solid #0b5394; margin-top: 25px;
    margin-bottom: 20px; ">--->
<div  style="background-color: rgba(255,255,255,.79)">
<br>

<div class="social">
		<ul>
			<li><a class="icon2 icon-facebook" href="#" onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><span></span></a></li>
			<li><a class="icon2 icon-whatsapp" href="#" onclick="
    window.open('https://web.whatsapp.com/send?text='+encodeURIComponent(window.location.href)); 
    return false;"><span></span></a></li>
			<li><a class="icon2 icon-linkedin2 href="#" onclick="
    window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(window.location.href)); 
    return false;"><span></span></a></li>
<!--
style="display: none;"
Whatsapp movil
https://api.whatsapp.com/
https://wa.me/?text=

      <li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
-->
		</ul>
	</div>

<!--
<div class="social-bar">
  
  <a class="icon2 icon-facebook" href="#" onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"></a>
  <a href="https://www.linkedin.com/shareArticle?url=example.org&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE_URL>" class="icon2 icon-whatsapp"></a>
  <a href="" class="icon2 icon-linkedin2"></a>
</div>
    -->
<!-- Button trigger modal -->
<div style="margin-left: 22px;">
  <div class="fichas" role="document" style="float: center">
    <div class="modal-content color" >
      <div class="modal-header" style="background-color: #6180b7;">
        <h2 class="modal-title text-center" id="exampleModalLongTitle" style="color: white; font-size: 20px;font-weight: 700 ">¿Para quién es el curso?</h2>
      </div>
      <div class="modal-body">
        <p style="text-align: justify; font-size: 15px; margin-top: 3%; line-height: 28px;font-family: 'Open Sans', Arial, sans-serif;">{!!$ho->audience!!}</p>
        
      </div>
    
    </div><br>
      <div class="modal-content color" >
      <div class="modal-header" style="background-color: #6180b7;">
        <h2 class="modal-title text-center" id="exampleModalLongTitle" style="color: white; font-size: 20px;font-weight: 700 ">¿Qué recibiré?</h2>
      </div>
      <div class="modal-body">
         <p style="text-align: justify; font-size: 15px; margin-top: 3%; line-height: 28px;font-family: 'Open Sans', Arial, sans-serif;">{!!$ho->what_include!!}</p>
      </div>
    
    </div>
  </div>

  <style type="text/css">
    @media screen and (max-width: 600px) {
div.modal-content.color{
  margin-left: 1%;
    width: 90%;

 }
 .modal-header {
    min-height: 16.43px;
    padding: 14px;
    border-bottom: 1px solid #e5e5e5;
    width: 100%;
}

 }
     @media screen and (min-width: 601px) and (max-width: 1600px) {
div.modal-content.color{
  margin-right: 30px;
    width: 50%;

 }
 .modal-header {
    min-height: 16.43px;
    padding: 14px;
    border-bottom: 1px solid #e5e5e5;
    width: 100%;
}

 }

  </style>
  <br>
  <div class="fichas" role="document" style="float: center">
    <div class="modal-content color" >
      <div class="modal-header" style="background-color: #6180b7;">
        <h2 class="modal-title text-center" id="exampleModalLongTitle" style="color: white; font-size: 20px;font-weight: 700 ">¿Cuáles serán mis beneficios?</h2>
      </div>
      <div class="modal-body">
         <p style="text-align: justify; font-size: 15px; margin-top: 3%; line-height: 28px;font-family: 'Open Sans', Arial, sans-serif;">{!!$ho->benefits!!}</p>
      </div>
    
    </div><br>
      <div class="modal-content color" >
      <div class="modal-header" style="background-color: #6180b7;">
        <h2 class="modal-title text-center" id="exampleModalLongTitle" style="color: white; font-size: 20px;font-weight: 700 ">¿Cuál es la agenda del curso?</h2>
      </div>
      <div class="modal-body">
          <p style="text-align: justify; font-size: 15px; margin-top: 3%; line-height: 28px;font-family: 'Open Sans', Arial, sans-serif;">{!!$ho->agenda!!}</p>
      </div>
    
    </div>
  </div>
<br>
<div class="fichas" role="document" style="float: center">
    <div class="modal-content color" >
      <div class="modal-header" style="background-color: #6180b7;">
        <h2 class="modal-title text-center" id="exampleModalLongTitle" style="color: white; font-size: 20px;font-weight: 700 ">¿Qué aprenderé?</h2>
      </div>
      <div class="modal-body">
         <p style="text-align: justify; font-size: 15px; margin-top: 3%; line-height: 28px;font-family: 'Open Sans', Arial, sans-serif;">{!!$ho->goals!!}</p>
      </div>
    
    </div><br>
      <div class="modal-content color" >
      <div class="modal-header" style="background-color: #6180b7;">
        <h2 class="modal-title text-center" id="exampleModalLongTitle" style="color: white; font-size: 20px;font-weight: 700 ">Modalidad</h2>
      </div>
      <div class="modal-body">
         <!-- <p style="text-align: center; font-size: 15px; margin-top: 3%; line-height: 28px; font-family: 'Open Sans', Arial, sans-serif;">&bull;TRANSFORMANDO PERSONAS &bull; <br>&bull; INNOVANDO ORGANIZACIONES &bull;<br></p>-->
          <p style="text-align: justify; font-size: 15px; margin-top: 3%; line-height: 28px;font-family: 'Open Sans', Arial, sans-serif;">{!!$ho->modalidad!!}</p>
      </div>
    
    </div>

    
  </div>

 <!-- <div class="fichas" class="container" style="float: center"> 
    <div style="margin-top:15px;    padding-left: 12;">
    <b style="color: #4c4949; font-size: 12px;">
    La programación, precios y contenidos de los cursos, talleres y servicios que ofrece Innovatium® están sujetos a cambios sin previo aviso. 
    Innovatium® se reserva el derecho de posponer o cancelar los eventos que no cumplan con la cantidad mínima requerida de personas inscritas.
        </b>
    
    </div>
    <br>
      

</div>---->
<style type="text/css">
        @media only screen and (max-device-width: 760px) and (min-device-width: 300px){
div.fichas.t {

padding-left: 22;
margin-right: 24;
}


}
      @media only screen and (max-device-width: 769px) and (min-device-width: 761px){
div.fichas.t {

padding-right: 33;
padding-left: 14;
}


}


    @media only screen and (max-device-width: 1925px) and (min-device-width: 770px){
div.fichas.t {

 /** padding-right: 32;
  margin-right: 9%;**/
    padding-right: 45;
    padding-left: 14;
   /** margin-right: 72%;**/
}


}
</style>
<div class="fichas t"  style="margin-top:35px; ">
        <b style="color: #4c4949; font-size: 12px;text-align: justify;">
          La programación, precios y contenidos de los cursos, talleres y servicios que ofrece Innovatium® están sujetos a cambios sin previo aviso. 
    Innovatium® se reserva el derecho de posponer o cancelar los eventos que no cumplan con la cantidad mínima requerida de personas inscritas.
        </b>
      </div>
<br>



<br>
</div> 

 <div class=""  style="background-color: rgba(255,255,255,.79)">
       
             <video src="{{asset('images/in.mp4')}}" autoplay loop muted id="bgVideo" poster="{{asset('images/1.jpg')}}" ></video>
            <div style="margin-top: 50px"></div>
          </div>


</div>


</section>
  @endforeach



    <style type="text/css">


body {
  font-family: Arial, Helvetica, sans-serif;
}


/***.fichas {
  display: flex;
  width: 75%;

  -ms-transform: translateX(15%);
  transform: translateX(17%);
  
}

.fichas2 {
  display: flex;
  width: 72%;

  -ms-transform: translateX(15%);
  transform: translateX(19%);
  
}

.vertical{
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);

  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); 
  padding: 26px;
  flex: 1;
  text-align: center;
  background-color: #f1f1f1;
}**/
/************************************************/

@media only screen and (max-width: 768px) and (min-width: 768px)  {

  .fichas {
  display: flex;
  width: 100%;


  -ms-transform: translateX(15%);
  transform: translateX(0%);
  
}


.vertical{
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);


  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}


/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 26px;
  flex: 1;
  text-align: center;
  background-color: #f1f1f1;
}
}
@media only screen and (max-width: 1024px) and (min-width: 1024px)  {

  .fichas {
  display: flex;
  width: 100%;

  -ms-transform: translateX(15%);
  transform: translateX(0%);
  
}

.vertical{
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);

  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); 
  padding: 26px;
  flex: 1;
  text-align: center;
  background-color: #f1f1f1;
}
}
@media only screen and (max-width: 2024px) and (min-width: 1025px)  {

  .fichas {
  display: flex;
  width: 75%;

  -ms-transform: translateX(15%);
  transform: translateX(17%);
  
}

.vertical{
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);

  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); 
  padding: 26px;
  flex: 1;
  text-align: center;
  background-color: #f1f1f1;
}
}
/**********************************************/


/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .fichas {
    display: -webkit-flex;
  display: block;
  flex-wrap: wrap;

    
    
  }

  .fichas2{
    width: 85%;
  transform: translateX(7%);
  }

  .card{
    width: 115%;
    margin: -15px;
    margin-top: 1px;
    flex: 1;
  
    display: block;           /* new */
    flex-direction: column;  /* new */
    margin-bottom: 36px;
  }

  .vertical{
  
    transform:translate(-50%,-45%);
  }
}

/* Add rounded corners to the top left and the top right corner of the image 
img {
  border-radius: 5px 5px 0 0;
}
*/

      @media (max-width: 767px){
.container.d {
    width: auto;
    margin-top: -23px;
}
}
      @media (max-width: 1267px){
.container.d {
    width: auto;
    margin-top: -1px;
}
}
  @media (max-width: 500px){
h1.container.h {
    font-size: 28px;
    margin-bottom: 20px;
    color: #444444;
    font-weight: 600;
    margin-top: -22px;
}
}
  @media (max-width: 1260px)and (min-width: 766px) {
h1.container.h {
   
    margin-left: -4px;
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
#derecha2{
  /** height:35%;**/
        height:30%;
        background-color:#DAF7E2;
        float:right;
        width:50%;
}
#izquierda2{
  /** height:35%;**/
        height:50%;
        background-color:red;
        float:left;
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



