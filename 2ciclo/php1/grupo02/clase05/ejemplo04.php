<?php 

include'autoload.php';

$id        =  2;
$nombres   = "Maria";
$apellidos = "Perez";
$dni       = "12345000";

$usuario =  new Usuario();
$valor   =  $usuario->actualizar($id,$nombres,$apellidos,$dni);

echo $valor;

 ?>