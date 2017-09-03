<?php 

include'../../autoload.php';
include'../../session.php';

$mensaje   =  new Mensaje();

$nombres   =  $_POST['nombres'];
$apellidos =  $_POST['apellidos'];
$dni       =  $_POST['dni'];
$user      =  $_POST['user'];
$pass      =  md5($_POST['pass']);

$alumnos = new Alumnos($nombres,$apellidos,$dni,$user,$pass);

$valor   =  $alumnos->agregar();


if ($valor=='ok') 
{
 
 $mensaje->sweetalert('Buen Trabajo','success','Datos Registrados Correctamente',2);

}
else 
{
  $mensaje->sweetalert('Error','error','Consulte al área de Soporte',2);
}




 ?>

