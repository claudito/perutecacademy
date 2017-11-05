<?php 

include('autoload.php');


$usuario =  new Usuario();

$id      =  5;

$valor  = $usuario->eliminar($id);

echo $valor;


 ?>