<?php 

include'../../autoload.php';


$id        =  $_POST['id'];
$nombres   =  $_POST['nombres'];
$apellidos =  $_POST['apellidos'];
$dni       =  $_POST['dni'];
$usuario   =  $_POST['usuario'];

$mensaje  =  new Mensaje();
$alumnos  =  new Alumnos($nombres,$apellidos,$dni,$usuario);
$valor    =  $alumnos->actualizar($id);

if ($valor=='ok') 
{
 
 $mensaje->sweetalert('Buen Trabajo','success','Datos Actualizados Correctamente',2);

}
else 
{
  $mensaje->sweetalert('Error','error','Consulte al área de Soporte',2);
}



 ?>