<?php 

include'../autoload.php';

$archivo =  $_FILES['archivo'];

$objeto  =  new Archivo();
$ruta    = $objeto->subir($archivo,'../files'); 

$ruta    = ($ruta=='error') ? '' : $ruta ;

echo $ruta;

 ?>