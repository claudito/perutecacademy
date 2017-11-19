<?php 

include'../../autoload.php';

$nombres   =  $_POST['nombres'];
$apellidos =  $_POST['apellidos'];
$dni       =  $_POST['dni'];

$usuario   =  new Usuario();
$valor     =  $usuario->agregar($nombres,$apellidos,$dni);

echo $valor;




 ?>