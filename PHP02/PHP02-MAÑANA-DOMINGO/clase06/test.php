

<?php


$texto        = $_POST['texto'];
$destinatario = $_POST['destinatario'];
$remitente    = $_POST['remitente'];
$asunto       = $_POST['asunto']; 

$cuerpo =' 
<html>
<head>
<title>Mensaje de Prueba</title>
<style>
body{font-family: arial;   font-weight: bold;}
</style>
</head>
<body>
<p>'.$texto.'</p>
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
$headers .= "From: Luis Claudio <luis.claudio@perutec.com.pe>\r\n"; 


$mail = mail($destinatario,$asunto,$cuerpo,$headers);

if ($mail)
{
echo "ok"
} 
else 
{
echo "error";
}


?>