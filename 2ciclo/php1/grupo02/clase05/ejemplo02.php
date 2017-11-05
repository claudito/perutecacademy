<?php 

include'autoload.php';

$nombres   = "Maria";
$apellidos = "Perez";
$dni       = "12345000";

$usuario =  new Usuario();
$valor   =  $usuario->agregar($nombres,$apellidos,$dni);

echo $valor;

 ?>