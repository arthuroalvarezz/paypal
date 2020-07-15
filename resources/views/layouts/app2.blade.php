<!DOCTYPE HTML>
<html lang="en">
<!-----------log---------------->
<head>

    <meta charset="utf-8">
    <title>Innovatium</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{asset('css/customMaxim.css')}}">
    <link rel="stylesheet" href="{{asset('css/section_team.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
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
     
     <!----termina el slider de eventos realizados css--->

</head>

<body>
    @yield('content')
  
    <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x icon-square icon-bgdark icon-2x"></i></a>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('css/bootstrap.min2.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src=" {{ asset('js/customersSlider.js') }}"></script>
    <script src=" {{ asset('js/jquery.nav.js') }}"></script>
    <script src=" {{ asset('js/jquery.localScroll.js') }}"></script>
    <script src=" {{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src=" {{ asset('js/inview.js') }}"></script>
    <script src=" {{ asset('js/custom.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js'></script>
    <script src="{{asset('js/teamSlider.js')}}"></script>
<!-- calendario scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src=" {{ asset('js/stacktable.js') }}"></script>
    <script>
    $('table').stacktable();
    </script>
<!-- termina scripts calendario-->
    <script src="{{'js/workshops.js'}}"></script>
    <script src="{{'js/jquery.scrollTo.js'}}"></script>
    <script src="{{'js/isotope.js'}}"></script>
    <script src="{{'js/jquery.flexslider.js'}}"></script>
    <script src="{{'js/animate.js'}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-------slider js eventos realizados----------->

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
</body>
</html>
