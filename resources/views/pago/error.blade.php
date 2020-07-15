@extends('layouts.app')
@section('title', 'Confirmación de pago')
@section('content')
<body style="background-color: #033E6B"> 
<div class="container">
   <div class="row">
    <div align="center"  >
<p style="color: white; font-weight: 700; font-size:40px">¡Ups algo salió mal!</p>

</div>
      <div class=" container" style="background-color: #d6d6d6;border-color: #33cbcc;  width: 76%;border-width: 1px;margin-top: 1%;border-radius: 10px" align="center">
        <p style="color: black; font-weight: 200; font-size:20px;margin-top: 1%">¿Quieres volver a intentarlo?</p>
<br>
       <p style="color: white; font-weight:500; font-size:26px"><!--<a href="javascript:history.back()" class="btn btn-success" style="color: white"> VOLVER UN PASO ATRÁS</a>---><a href="http://127.0.0.1:8000/home#calendario" type="button" class="btn btn-primary btn-sm" style="color: white;"> VOLVER AL CALENDARIO DE CURSOS</a> </p>

 
      <br>
       <div align="center" style="margin-top: 1%" >
<p style="color: black; font-weight: 200; font-size:20px">Si tienes dudas ponte en contacto con nosotros.</p>
<p style="color: black; font-weight: 200; font-size:20px">WhatsApp <a style="color: black" href="https://web.whatsapp.com/send?phone=+52(55)69417110&amp;text=Hola, necesito más información ¿Podría ayudarme? vengo del sitio https://innovatium.mx/">+52 55 6941 7110</a>.</p>
</div>
         
      </div>  
        
   </div>

</div>
<br><br><br>

<style type="text/css">

  <style type="text/css">
    @media only screen and (max-device-width: 2625px) and (min-device-width: 504px){
 .btn {
    display: inline-block;
    padding: 8px 20px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: #1abac7;
}
}

@media (max-width: 503px)  and (min-device-width:300px){
    

    .btn {
    display: inline-block;
    padding: 8px 20px;
    margin-bottom: 0;
    font-size: 10px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: #1abac7;
}
    
}
</style>
 


@endsection