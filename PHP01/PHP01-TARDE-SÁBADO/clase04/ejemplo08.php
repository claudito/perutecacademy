<?php 
error_reporting(0);#oculta las notificaciones o advertencias del servidor de aplicaciones
/*
include
include_once
require
require_once

*/

echo "Operaciones aritméticas:Suma";
echo "</br>";
require'clases/Funciones.php';

$funciones  = new Funciones();

echo $funciones->operaciones(20,1,'suma');








 ?>