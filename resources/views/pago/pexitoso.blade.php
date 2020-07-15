<!DOCTYPE HTML>
<html lang="en">


<head>


    <meta charset="utf-8">
    <title>@yield('title', 'Innovatium® | Capacitación y Coaching')</title>


    <meta property="og:image" content="@yield('image')">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <script src="https://kit.fontawesome.com/67a1652aaa.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{asset('css/customMaxim.css')}}">
    <link rel="stylesheet" href="{{asset('css/eventos.css')}}">
    <link rel="stylesheet" href="{{asset('css/section_team.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{asset('css/menu_styles.css')}}">
    <!-- Custom css for slogan -->
    <!-- estilos del calendario -->
    <link rel="stylesheet" href="{{asset('css/sloganStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/stacktable.css')}}">
    <!-- termina estilos del calendario -->
    <!----para el slider de eventos realizados--->
     <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
     <link rel = "icon" href = "/images/logo.ico" type = "image/x-icon">
     
     <!----termina el slider de eventos realizados css--->


     <!-- Global site tag (gtag.js) - Google Analytics
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96983919-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());


      gtag('config', 'UA-96983919-1');
    </script>
    -->


</head>


<body style="background-color: #033E6B">
    @include('partials.header')
    @yield('content')
        
<div class="container"  >
  

 
      <div align="center" style="color: white; font-weight: 500; font-size:30px">El pago fue realizado. La información fue enviada a tu correo electrónico.
        si deseas facturacion llena el siguiente formulario o contactarnos en el WhatsApp +52 55 6941 7110 con tu comprobante de pago a la mano.
</div> <br> 
<section id="contact" class="section green">
  <div class="container">
    <!-- <h2 style=" font-size: 46px; font-weight: 700; margin-bottom: 40px; letter-spacing: -1px; color:white;text-align: center;">Contacto</h2>
   
    <p>Bienvenid@ a Innovatium®, no dudes en contactarnos para obtener mayor información de nuestros talleres, formas de pago y descuentos especiales. Tenemos la opción de realizar talleres y coaching in company con base a las necesidades de tu organización.</p>------>
    <p aling="center"></p>
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
                </div>
               <!-- <div style="margin-left: 15px;">
                  <input style="margin-top: 40px;" type="submit" value="Enviar" class="btn btn-theme pull-left">
                </div>-->
<div class="col-md-12">
  <div class="col-md-6">
  <input style="margin-top: 4px;margin-left: -5%;background-color: #5a9bd5;width: 100%" type="submit" value="Enviar" class="btn btn-theme pull-left">

  </div>
  <!-- <div class="col-md-6">
                       <input style="margin-top: 4px;background-color: #ffc000;width: 100%" type="submit" value="Pagar con USD en PayPal" class="btn btn-theme pull-left">

   </div>-->
</div>
              </form>

            </form>
        </div>
      </div>
     
    </div>
  </div>
</section>        
<!--<div align="center"><a class="btn btn-info"  href="{{route('home')}}#home">Regresar a Innovatium</a></div>-->

          </div>     

    @include('partials.footer')
    <a href="#" class="scrollup"><i><img src="{{ asset('images/up.png') }}"></i></a>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>--><!--creemos que no es necesario--->
  <!---->  <script src="{{asset('css/bootstrap.min2.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src=" {{ asset('js/customersSlider.js') }}"></script>
    <script src=" {{ asset('js/jquery.nav.js') }}"></script>
    <script src=" {{ asset('js/jquery.localScroll.js') }}"></script>
    <script src=" {{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src=" {{ asset('js/inview.js') }}"></script>
   <!-- <script src=" {{ asset('js/custom.js') }}"></script>-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js'></script>
    <script src="{{asset('js/teamSlider.js')}}"></script>
<!-- calendario scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src=" {{ asset('js/stacktable.js') }}"></script>
    <!--<script src=" {{ asset('js/bootstrap.min.js') }}"></script>-->
    <script>
    $('.calendario').stacktable();
    $('.calendario2').stacktable();
    $('.customerTable').stacktable();
    
    </script>
<!-- termina scripts calendario-->
    <script src="{{'js/eventos.js'}}"></script>
    <script src="{{'js/workshops.js'}}"></script>
    <script src="{{'js/jquery.scrollTo.js'}}"></script>
    <script src="{{'js/isotope.js'}}"></script>
    <script src="{{'js/jquery.flexslider.js'}}"></script>
    <script src="{{'js/animate.js'}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>




<!-------slider js eventos realizados----------->
<!--es de slider pero ya tengo uno mas actual<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->


    <!-- FlexSlider -->
    <script defer src="{{asset('js/jquery.flexslider-min.js')}}"></script>    
    
    <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
      animation: "slide",
      });
    });
    </script>
    <!-------slider js eventos realizados----------->
    </script>


<div id="fb-root">
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };


        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>


      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="167849076577293"
  logged_in_greeting="¡Hola! ¿Cómo podemos ayudarte?"
  logged_out_greeting="¡Hola! ¿Cómo podemos ayudarte?">
      </div>
</body>
</html>






