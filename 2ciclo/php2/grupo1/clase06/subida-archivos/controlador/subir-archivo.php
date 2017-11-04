<?php 

include'../autoload.php';

$archivo =  $_FILES['archivo'];
$nombre  =  $_POST['nombre'];

$objeto  =  new Archivo();
$ruta    = $objeto->subir($archivo,'../files/'); 
$ruta    = ($ruta=='error') ? '' : $ruta ;

$registro = new Registro();
echo $registro->agregar($nombre,$ruta);






 ?>