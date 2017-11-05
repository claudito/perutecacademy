<?php 

include'autoload.php';

$usuario =  new Usuario();

$id        =   3;
$nombres   =  "Omar";
$apellidos =  "Fernandez";
$dni       =  "00001234";

$valor     =  $usuario->actualizar($id,$nombres,$apellidos,$dni);

switch ($valor) {
	case 'ok':
	echo "Usuario Actualizado";
		break;
	default:
	echo "error";
		break;
}


 ?>