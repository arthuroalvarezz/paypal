@extends('layouts.app2')

@section('content')

    <head> <script>
function abrir() {
open('pagina.html','','top=300,left=300,width=300,height=300') ;
}
</script>
</head>
<style type="text/css">
  @media only screen and (max-device-width: 480px) and (min-device-width: 300px){
  strong.texto{
    color: white;
    line-height: 29px;
}
.example {
    font-size: 27px;

  }
p.margen{
  margin-top:  -28px;
  /**background-color: #5f5b5b9c;**/
}
.card{
    margin-top: -42px;
}
strong.texad{
    
    font-size: 24px;
}
}
.caption {
position: absolute;
top: 45%;
left: 0;
width: 100%;
}

@media only screen and (max-device-width: 680px) and (min-device-width: 481px){

strong.texto{
      color: white;
    line-height: 39px;
}
.example {
    font-size: 32px;

  }
p.margen{
  margin-top:  -28px;
  /**background-color: #5f5b5b9c;**/
}
}
.caption {
position: absolute;
top: 45%;
left: 0;
width: 100%;
}

@media only screen and (max-device-width: 980px) and (min-device-width: 681px){

strong.texto{
      color: white;
    line-height: 45px;
}
.example {
    font-size: 35px;

  }
p.margen{
  margin-top:  -28px;
  /**background-color: #5f5b5b9c;**/
}
}
.caption {
position: absolute;
top: 45%;
left: 0;
width: 100%;
}
@media only screen and (max-device-width: 1600px) and (min-device-width: 981px){

strong.texto{
      color: white;
    line-height: 45px;
}
.example {
    font-size: 35px;

  }
p.margen{
  margin-top:  -58px;
  /**background-color: #5f5b5b9c;**/
}
}
.caption {
position: absolute;
top: 35%;
left: 0;
width: 100%;
}

@media only screen and (max-device-width: 2600px) and (min-device-width: 1601px){
/**por si las dudas***/
strong.texto{
      color: white;
    line-height: 45px;
}
.example {
    font-size: 35px;

  }
.caption {
position: absolute;
top: 45%;
left: 0;
width: 100%;
}




</style>
           <div class="container">
                @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <ul>
                            @foreach (session()->get('success') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

     <section class="section" id="home" style="margin-top: 6%">
   

                 
    <div class="container">
            
             <video  src="{{'images/in.mp4'}}" autoplay loop muted id="bgVideo" poster="{{'images/1.jpg'}}" ></video>
            <div style="margin-top: 20px"></div>
         </div>
    </section>


<div class="container caption">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #c9c9c9d9; border-style: inset;border-color: #e7ece75e;">
                                <br>
             <!--   <div class="card-header">{{ __('Login') }}</div>-->
                <div align="center">
                <STRONG  class="texad" >Administración Innovatium®</STRONG>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label align="right" for="email" class="col-md-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label align="right" for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                    <!--    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div align="center" class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Entrar
                               </button>

                            <!--    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif-->
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
