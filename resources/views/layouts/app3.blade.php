<!DOCTYPE html>
<html lang="en">
<!-----------adm---------------->
<head>
<meta charset="utf-8">
<title>@yield('title', 'Innovatium®')</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "icon" href = "{{asset('/images/logo.ico')}}" type = "image/x-icon"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <meta name="description" content="">
    <meta name="author" content="">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 80vh;
    overflow-y: auto;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

@include('sweetalert::alert')

<div id="mySidebar" class="sidebar">
   <a href="{{route('home')}}" target="_blank">    <img src="{{asset('/images/innovatium-blanco.png')}}" style="width: 100%;margin-left: -12px" ></a>
        <b style="color: white;margin-left: 30px">Bienvenid@  {{ Auth::user()->name }}</b>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="{{url('dashboard')}}">Dashboard</a>
  <a href="{{url('eventos_privados')}}">Eventos Privados</a>
  <a href="{{url('eventos_abiertos')}}">Eventos Abiertos</a>
  <a href="{{url('talleres')}}">Talleres</a>
  <a href="{{url('web_emails')}}">Mensajes Web</a>
  <a href="{{url('register_webinars')}}">Registro Webinars</a>
  <a href="{{url('webinarios')}}">Webinarios</a>




                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Cerrar sesión                  <i class="now-ui-icons users_single-02"></i>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #111111">  
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="background-color: #504747cc" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                          
</div>
<body>
    @yield('content')
 

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script src="https://kit.fontawesome.com/67a1652aaa.js" crossorigin="anonymous"></script>
<script src=" {{ asset('/js/app3.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/locales/es.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>


<script>

var editor = CKEDITOR.replace( 'descripcion', {
    extraPlugins: 'notification'
});

editor.on( 'required', function( evt ) {
    editor.showNotification( 'Por favor, escribe una descripción.', 'warning' );
    evt.cancel();
} );
//-----------------------------------------------------------------------------------------------------
var editor2 = CKEDITOR.replace( 'forwho', {
    extraPlugins: 'notification'
});

editor2.on( 'required', function( evt ) {
    editor2.showNotification( 'Por favor, escribe para quién es.', 'warning' );
    evt.cancel();
} );

//-----------------------------------------------------------------------------------------------------

var editor3 = CKEDITOR.replace( 'recibir', {
    extraPlugins: 'notification'
});

editor3.on( 'required', function( evt ) {
    editor3.showNotification( 'Por favor, escribe lo que se va a recibir.', 'warning' );
    evt.cancel();
} );

//-----------------------------------------------------------------------------------------------------

var editor4 = CKEDITOR.replace( 'benefits', {
    extraPlugins: 'notification'
});

editor4.on( 'required', function( evt ) {
    editor4.showNotification( 'Por favor, escribe los beneficios.', 'warning' );
    evt.cancel();
} );

//-----------------------------------------------------------------------------------------------------
    
var editor5 = CKEDITOR.replace( 'schedule', {
    extraPlugins: 'notification'
});

editor5.on( 'required', function( evt ) {
    editor5.showNotification( 'Por favor, escribe la agenda.', 'warning' );
    evt.cancel();
} );

//-----------------------------------------------------------------------------------------------------

var editor6 = CKEDITOR.replace( 'learning', {
    extraPlugins: 'notification'
});

editor6.on( 'required', function( evt ) {
    editor6.showNotification( 'Por favor, escribe lo que se va a aprender.', 'warning' );
    evt.cancel();
} );

//-----------------------------------------------------------------------------------------------------

var editor7 = CKEDITOR.replace( 'modalidad', {
    extraPlugins: 'notification'
});

editor7.on( 'required', function( evt ) {
    editor7.showNotification( 'Por favor, escribe la modalidad.', 'warning' );
    evt.cancel();
} );

//-----------------------------------------------------------------------------------------------------



</script>



</body>
</html>