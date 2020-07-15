
<!-- Menú -->
  <nav class="navbar navbar-default navbar-fixed-top">
  <!--  <nav class="navbar navbar-default " style="margin-top: -7%">--->
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="ima" href="#"><img src="{{asset('images/logo_innovatium.png')}}" style="height: 35px; width: 180px; margin-top: 10px; margin-left: 17px;" alt="innovatium"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right" style="margin-right: 112px; margin-top: 9px">
          <li><a class="page-scroll" href="{{route('home')}}#home" >Inicio</a></li>
          <li><a class="page-scroll" href="{{route('home')}}#talleres" >Talleres</a></li>
          <li><a class="page-scroll" href="{{route('home')}}#calendario" >Calendario</a></li>
          <li><a class="page-scroll" href="{{route('home')}}#nosotros">Nosotros</a></li>
          <li><a class="page-scroll" href="{{route('home')}}#services" >clientes</a></li>
          <li><a class="page-scroll" href="{{route('home')}}#contact">Contacto</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Fin del Menú -->
  @include('cookieConsent::index')