<?php 

#mail

$mail  = mail($_POST['destinatario'],$_POST['asunto'],$_POST['texto']);

if ($mail) 
{
 echo "correo enviado";
} 
else 
{
  echo "error";
}

 ?>