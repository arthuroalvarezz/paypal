<!DOCTYPE html >
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <style>
    .contenido
    {
      text-align: justify !important; 
      font-size: 15px !important; 
      margin-top: 3% !important; 
      line-height: 28px !important; 
      font-family: 'Open Sans', Arial, sans-serif !important;
    }  
  </style>
</head>
<body>

  <!-- <div class="form-group row">
                         <h1 style="color: black;
    font-size: 15px;font-family: 'Open Sans', Arial, sans-serif; margin-top: -1%;margin-left: 7%">Precios y Descuentos</h1>
            
            @foreach($content as $contenido)
   @php 
                                  setlocale(LC_TIME, 'es_MX.UTF-8');
                                  $vigencia_ini = strftime("%d %b %Y", strtotime($contenido->vigencia_ini));
                                  $contenido->vigencia_ini = $vigencia_ini; 

                                   $vigencia_fin = strftime("%d %b %Y", strtotime($contenido->vigencia_fin));
                                  $contenido->vigencia_fin = $vigencia_fin; 
                                @endphp  
                                

 
                        <div class="col-sm-10">
                          <p style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;margin-left: 7%;">  {{ $contenido->descripcion }} ${{ number_format($contenido->preciomx, 2) }} MXN / ${{ number_format($contenido->preciousd, 2) }} USD (Vigente al {{ $contenido->vigencia_fin }}) </p>
                            
                        </div>
                        </div>

        

            @endforeach-->



 <!-- <style type="text/css">
h1 { font-family: Raleway; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; } h3 { font-family: Raleway; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } p { font-family: Raleway; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: Raleway; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: Raleway; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px; }
  </style>--->
  <!-- estilos para marca de agua <style type="text/css">
    #watermark {
                position: fixed;
                bottom:   0px;
                left:     0px;
                /** The width and height may change 
                    according to the dimensions of your letterhead
                **/
                width:    8cm;
                height:   3cm;
                bottom:   22cm;
                left:   -1cm;

             /*   margin-top:    -5.5cm;
                margin-bottom: 1cm;
                margin-left:   1cm;
                margin-right:  1cm;
                /** Your watermark should be behind every content**/
               
            }
  </style>---->

<!---marca de agua<img id="watermark"  src="../public/images/negro.png"  {{ asset('images/negro.png') }}  width="50px" height="30px" style="margin-top: -100px" >--->
     <!-- <img src="../public/images/1.jpg" class="img2" width="100%" height="98%" class="img-fluid" alt="Responsive image"><br>-->
    <div id="header" style="background-color: black;">  <img src="../public/images/innovatium-blanco.png" class="img2" width="50%" height="50%" class="img-fluid" alt="Responsive image" style="margin-top: 1%">   <p style="margin-top: 2%"><h1 style="font-size: 38px;font-family: 'Open Sans', Arial, sans-serif;">Capacitación y Coaching
</h1></p> 
</div>
<div id="footer" style="margin-top: -210%">
  <p style="color: white;background-color: black;
    font-size: 25px;font-family: 'Open Sans', Arial, sans-serif;  margin-top: 97%" class="page" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WWW.INNOVATIUM.LAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PÁG. </p>
         
</div>
<!--<b style = "color: #444;
    font-size: 16px;font-family: 'Open Sans', Arial, sans-serif;">
Escribe tu texto aquí
</b>-->
<div class="container" style="margin-right: 7%;
    margin-left: 7%;margin-top: 3%">
<h1 style="color: black;
    font-size: 30px;font-family: 'Open Sans', Arial, sans-serif; margin-top: -1%">  {{ $workshoppdf->name }}</h1>

  <h2 class="linea" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;">{{$addresspdf->city}} {{$addresspdf->state}}  {{$addresspdf->country}}<br><h2 style="font-size: 4px;color: white">innovatium</h2></h2>
    <h2 class="linea" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;">Inicia</h2> <p class="linea2" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;" >{{$events_Workshops->start_date}}</p> <h2 class="linea" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;">Finaliza</h2> <p class="linea2" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;" >{{$events_Workshops->end_date}}</p><br>
    <div class="container">
<h2 class="linea" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;">Horario</h2> <p class="linea2" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;line-height: 28px;">{{$eventopdf->time}}</p></div>
<div class="container">
<h2 class="linea" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;">Ubicación </h2><p style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;line-height: 28px;" class="linea2">
{{$addresspdf->street}} {{$addresspdf->no_ext}}  {{$addresspdf->no_int}} {{$addresspdf->region}} {{$addresspdf->cp}} {{$addresspdf->state}} {{$addresspdf->city}} {{$addresspdf->country}}



</p><a style=" font-family: 'Open Sans', Arial, sans-serif;" href="{{$addresspdf->maps}}"> Ver ubicación</a> </div>

<div class="container">
<h2 class="linea" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;">Precio</h2> <p style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;line-height: 28px;" class="linea2">{{$eventopdf->price}}</p></div>

<div class="container">
<h2 class="linea" style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;">Descuentos</h2> <p style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;line-height: 28px;" class="linea2">{{$eventopdf->discount}}</p></div>

<br></div>

<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%">Descripción</h2></div>
<div class="container contenido" style="margin-right: 7%;
    margin-left: 7%;margin-top: -3%">
{!!$workshoppdf->description!!}
</div>

<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%;margin-top: 2%">Para quién es el curso</h2></div>


<div class="container contenido" style="margin-right: 7%;
    margin-left: 7%;margin-top: -3%">
{!!$workshoppdf->audience!!}</div>

<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%;margin-top: 2%">Qué recibirás</h2></div>


<div class="container contenido" style="margin-right: 7%;
    margin-left: 7%;margin-top: -3%">
{!!$workshoppdf->what_include!!}</div>


<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%;margin-top: 2%">Qué aprenderás</h2></div>


<div class="container contenido" style="margin-right: 7%;
    margin-left: 7%;margin-top: -3%">
{!!$workshoppdf->goals!!}</div>


<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%;margin-top: 2%">Cuál es la agenda</h2></div>


<div class="container contenido" style="margin-right: 7%;
    margin-left: 7%;margin-top: -3%">
{!!$workshoppdf->agenda!!}</div>


<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%;margin-top: 2%">Tus beneficios</h2></div>


<div class="container contenido" style="margin-right: 7%;
    margin-left: 7%;margin-top: -3%">
{!!$workshoppdf->benefits!!}</div>


<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%;margin-top: 2%">Instructor</h2></div>


<div class="container" style="margin-right: 7%;
    margin-left: 7%;margin-top: -3%">
<p style="text-align: justify; font-size: 15px; margin-top: 3%; line-height: 28px; font-family: 'Open Sans', Arial, sans-serif;">{!!$instructorpdf->description!!}</p></div>



<div style="background-color:#38b6ff; height: 8% "><br><h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%; margin-left: 7%;margin-top: 2%">Datos de contacto</h2></div>

<!--<div style="background-color:#38b6ff; height: 8% "><br>
            <h2 style="color:white; font-family: 'Open Sans', Arial, sans-serif;margin-top: 1%;margin-left: 7%">Datos de contacto</h2></div>--->
            <div class="container" style="margin-right: 7%;
    margin-left: 7%;margin-top:2%;">
            <div style="line-height: 28px;">
            
            <label style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;line-height: 28px;">Teléfono: + 52 (55) 85261012 / + 52 (777) 1763415</label>
               
            </div>
            <div style="line-height: 28px;">
            <label style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;line-height: 28px;">Correo electrónico: contacto@innovatium.mx</label></div>
            
         
            
    

<div style="line-height: 28px;">
<a style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;" target="_blank" href="https://api.whatsapp.com/send?phone=52(55)69417110&amp;text=Hola, necesito más información ¿Podría ayudarme? vengo del sitio https://innovatium.mx/ " class="img-icon-a nofocus">WhatsApp:</a>
     
              <label style="font-size: 15px; text-decoration: none; margin-right: 44% color:black; display: inline; font-family: 'Open Sans', Arial, sans-serif;"> +52 (55) 6941 7110</label>
            

</div>

<div style="line-height: 28px;">
            <a style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;" href="https://www.facebook.com/innovatiumcertificaciones/">Siguenos en Facebook:</a>
            <label style="font-size: 15px; text-decoration: none; margin-right: 44% color:black; display: inline; font-family: 'Open Sans', Arial, sans-serif;"> Innovatiumcertificaciones</label>

</div>
   </div>
      <!--      <h2 style="text-decoration: none; margin-right: 44% color:black; font-family: 'Open Sans', Arial, sans-serif;">Redes Sociales</h2>-->      
        <!--      <label style="display: inline; text-decoration: none; margin-right: 44% color:black; font-family: 'Open Sans', Arial, sans-serif;"><a href="https://www.facebook.com/innovatiumcertificaciones/" target="_blank">Siguenos en Facebook:</a></label>
               <label style="text-decoration: none; margin-right: 44% color:black; display: inline-block; font-family: 'Open Sans', Arial, sans-serif; margin-top: 1%"> Innovatiumcertificaciones</label>-->
            
        <!----    <div style="line-height: 28px;">
<a style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;" href="https://www.youtube.com/channel/UCDVe-gjR8CfCB5TVlxdHnuA?view_as=subscriber">Siguenos en Youtube:</a>
<label style="font-size: 15px; text-decoration: none; margin-right: 44% color:black; display: inline; font-family: 'Open Sans', Arial, sans-serif;"> InnovatiumMexico</label>
            </div>

            <div style="line-height: 28px;" >
<a style="font-size: 15px; font-family: 'Open Sans', Arial, sans-serif;" href="https://innovatium.mx/">Visítanos en el sitio oficial: </a>
<label style="font-size: 15px; text-decoration: none; margin-right: 44% color:black; display: inline; font-family: 'Open Sans', Arial, sans-serif;"> www.innovatium.mx</label>
            </div>-->
             
          <img src="../public/images/infopdf.jpg" class="img2" width="100%" height="90%" class="img-fluid" alt="Responsive image" style="margin-top: 1%">




<style type="text/css">
       @media screen and (max-width: 450px)  {
      .margin2 {
  margin-left: 12%;
}
}
</style>


<style type="text/css">
      #headers { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color: orange; text-align: center; }

  .linea  {
  padding: 1px;
  
  display: inline;
  }
  .linea2  {
  padding: 1px;
  
  display: inline;
  }
</style>
<!--$eventopdf = $events_Workshops->events;
$workshoppdf =$events_Workshops->workshops;
$addresspdf =$events_Workshops->address;
$instructorpdf =$events_Workshops->instructor;--->

 <style>
    @page { margin: 160px 0px; }/***dimensiones de la pagina***/
    #header { position: fixed; left: 0px; top: -160px; right: 0px; height: 150px;  text-align: center; color: white  }
    #footer { position: fixed; left: 0px; bottom: 60px; right: 0px; height: 110px; color: white  }
    #footer .page:after { content: counter(page, decimal); }
  </style>
 <!-- <div id="header">
    <h1>Widgets Express</h1>
  </div>
  <div id="footer">
    <p class="page">Page </p>
  </div>
  <div id="content">
    <p>the first page</p>    background: url("/images/background.jpg");
    <p style="page-break-before: always;">the second page</p>
  </div>---->




</body>
</html>
