<!DOCTYPE html>
<html>
<head>
  <title></title>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>
<body>

</body>
</html>

<?php

$idIndex = $_POST['idContactoIndex'];
$idEvento = $_POST['idInfoEvento']; 
$idFicha = $_POST['idContactoFicha']; 
$idPago = $_POST['idContactoPago'];

$servername = "localhost";
$username = "innov833_laravel";
$password = "1nn0v4t1um";
$dbname = "innov833_laravel5";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if($idIndex == "index"){


$destino= "contacto@innovatium.lat";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$tel = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$contenido = "Este mensaje viene de la página de inicio " . "\n" . "\n Nombre: " . $nombre . "\n Número de WhatsApp : " . $tel. "\n Correo: " . $correo  . "\n Mensaje: " . $mensaje;
$resultado=mail($destino, $tel, $contenido);

$sql = "INSERT INTO emails (name, email, phone, message, name_location, created_at)
VALUES ('$nombre', '$correo', '$tel', '$mensaje','Página de inicio', DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 HOUR))";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


if($resultado){
echo "<script>Swal.fire(
  '-Mensaje enviado',
  'Gracias por contactarnos.-',
  'success'
);window.location.assign('https://innovatium.mx')</script>";
    }
  

} else if($idEvento == "evento"){

//$resultado=mail($destino, $menvio, $cuerpo, $cabecera);
//$destino= "arturo.alvarez@innovatium.lat";
$from= "webinars@innovatium.lat"; 
$cc = "webinars@innovatium.lat";
$nombre = $_POST["nombre"];
$time = $_POST["time"];
$menvio= "Confirmación de Registro";
$asunto = $_POST["asunto"];
$tel = $_POST["tel"];
$asunto = $_POST["asunto2"];
$descripcion = $_POST["descripcion"];
$temas = $_POST["temas"];
$enlace = $_POST["enlace"];
$botongoogle = $_POST["botongoogle"];
$correo = $_POST["correo"];
$destino .= "$correo";
$cabecera  = 'MIME-Version: 1.0' . "\r\n";
$cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n" . "Bcc:" . $cc . "\r\n" . "From: " . $from ;
$id_webinar = $_POST["id_webinar"];
//$correo = $_POST["correo"];
$img = $_POST["img"];
$mensaje = $_POST["mensaje"];

$id_country = $_POST["pais"];

$estatus = "Activo";

$cuerpo = ' 
<html> 
<head> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <title></title> 
</head> 
<body> <!--'.$nombre.'  '.htmlspecialchars($nombre).'-->
<div style=""> 
<img src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/innovatium-negro.png" width="" height=""></div><br><br>
<h1>¡Hola '.$nombre.'! </h1> 
<p> 
<b style="font-size:15px;">Gracias por inscribirte al Webinar: '.$asunto.'</b><br>
<p style="font-size:15px;">'.$time.' <br><br>
'.$descripcion.' </p><a target="_blank" href="'.$botongoogle.'"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_es-419.gif"></a><br><br>
<b style="font-size:15px;">Temas a tratar</b><br><br>
<p style="font-size:15px;line-height: 28px">'.$temas.'</p><br>

<b style="font-size:15px;">Haz clic aquí para unirte</b><br>
<img src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/manita.png" style="height: 20px; width: 20px;"><a style="" href="'.$enlace.'">'.$enlace.'</a><br><br>

<!--Puedes <a style="" href="https://innovatium.mx/cancelar_suscripcion/'.$correo.'">cancelar</a> tu inscripción en cualquier momento.-->
Puedes <a style="" href="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/cancelar_suscripcion/'.$correo.'">cancelar</a> tu inscripción en cualquier momento.

</p>
   <div style="background-color: #2b2b2b">
<div align="left">
<p style="font-size:17px;color:white;font-weight: 700;">&nbsp;Contáctanos</p>
</div
      <div>
        <h2 class="linea" style="font-size:14px;font-weight: 700;color:white;">&nbsp;<img style="height: 20px; width: 20px; margin-top: -5px; margin-right: 3px;" src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/call.png"> +52 (55) 8526 1012 / +52 (777) 176 3415</h2>
       
     
        <h2 class="linea movil" style="font-size:14px;font-weight: 700;text-decoration: none;color:white;">&nbsp;<img style="height: 20px; width: 20px; margin-top: -5px; margin-right: 3px;" src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/whats.png"><a style="color:white;" target="_blank" href="https://web.whatsapp.com/send?phone=+52(55)69417110&amp;text=Hola, necesito más información ¿Podría ayudarme? vengo del sitio https://innovatium.mx/ " alt="logo whatsapp png" class="img-icon-a nofocus"> <u>Whatsapp</u></a></h2>

<h2 class="linea" style="font-size:14px;font-weight: 700;">&nbsp;<img style="height: 20px; width: 20px; margin-top: -5px; margin-right: 3px;" src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/fb.png"><a style="color:white;" href="https://www.facebook.com/innovatiumcertificaciones/" target="_blank"> <u>Facebook</u></a></h2>
        

   <h2 class="linea" style="font-size:14px;font-weight: 700;">&nbsp;<img style="height: 20px; width: 20px; margin-top: -5px; margin-right: 3px;" src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/fb.png"><a style="color:white;" href="https://www.facebook.com/groups/El.Club.Agile" target="_blank"> <u>Grupo Privado El Club Agile</u></a></h2>


   <h2 class="linea" style="font-size:14px;font-weight: 700;">&nbsp;<img style="height: 20px; width: 20px; margin-top: -5px; margin-right: 3px;" src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/in.png"><a style="color:white;" href="https://www.linkedin.com/company/innovatium" target="_blank"><u> Linkedin</u></a></h2>

   <h2 class="linea" style="font-size:14px;font-weight: 700;">&nbsp;<img style="height: 22px; width: 22px; margin-top: -5px; margin-right: 3px;" src="https://innovatium.mx/pruebasinnovatium/innovatium_page/public/images/web.png"><a style="color:white;" href="https://www.innovatium.mx" target="_blank"> <u> www.innovatium.lat</u></a></h2>
        <p class="linea pipe"> | </p>
      </div>

  <div>
  
    </div>
    </div> 
</body> 
</html> 
';


//$contenido = " Hola gracias por inscribirte al Webinar : " . $asunto . "\n Fecha de inicio: " . $fecha . "\n descripcion: " . $descripcion . "\n temas: " . $temas . "\n\n Tus datos ya han sido registrados: " . $nombre . "\n Nombre: " . $nombre . "\n Correo: " . $correo  . "\n Número de WhatsApp : " . $tel .  "\n Ciudad: " . $mensaje . "\n País: " . $pais . "\n\n  si deseas cancelar contactanos : " . $destino . "\n\n  si deseas cancelar contactanos : " . $cuerpo;
$cuerpo=utf8_decode($cuerpo);
$resultado=mail($destino, $asunto, $cuerpo, $cabecera);

$sql = "INSERT INTO registro_webinar (name, email, phone, city, estado, id_country, id_webinar, created_at)
VALUES ('$nombre', '$correo', '$tel', '$mensaje','$estatus','$id_country','$id_webinar', CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {

 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 

$conn->close();

if($resultado){
  echo "<script>window.location.assign('https://innovatium.mx/pruebasinnovatium/innovatium_page/public/mensaje')</script>";
}
  

} else if($idFicha == "ficha"){
$destino= "contacto@innovatium.lat";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$tel = $_POST["asunto"];
$asunto = $_POST["asunto2"];
$mensaje = $_POST["mensaje"];
$contenido = "Este mensaje viene desde una Ficha Técnica: " . $asunto . "\n" . "\n Nombre: " . $nombre . "\n Número de WhatsApp : " . $tel. "\n Correo: " . $correo  . "\n Mensaje: " . $mensaje;
$resultado=mail($destino, $tel, $contenido);

$sql = "INSERT INTO emails (name, email, phone, message, name_location, created_at)
VALUES ('$nombre', '$correo', '$tel', '$mensaje','$asunto', DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 HOUR))";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


if($resultado){
echo "<script>Swal.fire(
  '-Mensaje enviado',
  'Gracias por contactarnos.-',
  'success'
);window.location.assign('https://innovatium.mx')</script>";
    }
}
else if($idPago == "pago"){


$destino= "arturo.alvarez@innovatium.lat";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$tel = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$contenido = "Este mensaje viene de la página de pago " . "\n" . "\n Nombre: " . $nombre . "\n Número de WhatsApp : " . $tel. "\n Correo: " . $correo  . "\n Mensaje: " . $mensaje;
$resultado=mail($destino, $tel, $contenido);



if($resultado){
echo "<script>Swal.fire(
  '-Mensaje enviado',
  'Gracias por contactarnos.-',
  'success'
);window.location.assign('https://innovatium.mx')</script>";
    }
  

}


?>


