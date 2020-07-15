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
  

 
      <div align="center" style="color: white; font-size: 300%; text-align: center;">La suscripción fue cancelada.
</div> <br>  
    
<div align="center"><a class="btn btn-info"  href="{{route('home')}}#home">Regresar a Innovatium</a></div>

          </div>     
<br><br><br><br><br><br><br><br><br><br><br>
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






