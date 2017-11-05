<?php 

include'autoload.php';

$id   = 1;


$usuario =  new Usuario();
$valor   =  $usuario->eliminar($id);

echo $valor;

 ?>