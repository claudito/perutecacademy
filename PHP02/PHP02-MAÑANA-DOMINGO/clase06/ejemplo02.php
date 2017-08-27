<?php

$texto        ="Luis Claudio";
$destinatario ="megabyte1507@gmail.com";
$remitente    = "info@perutec.com.pe";
$asunto       = "Correo de Prueba"; 
$cuerpo =' 
<html>
<head>
<title>Mensaje de Prueba</title>
<style>
body{font-family: arial;   font-weight: bold;}
</style>
</head>
<body>
<h2>Correo De prueba.</h2>
<p>Correo de Prueba</p>

<hr>
Saludos info@perutec.com.pe
</body>
</html>
'; 
$headers .= 'From: '.$remitente."\r\n".
'Reply-To: '.$remitente."\r\n" .
'X-Mailer: PHP/' . phpversion();
//para el envío en formato HTML 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8\r\n"; 
#dirección del remitente 
$headers .= "From: Luis Claudio <luis.claudio@overprimegroup.com>\r\n"; 


$mail = mail($destinatario,$asunto,$cuerpo,$headers);

if ($mail)
{
echo "correo enviado"
} 
else 
{
echo "error de envio";
}


?>