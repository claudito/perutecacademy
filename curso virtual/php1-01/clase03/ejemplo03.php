<?php 

include'autoload.php';

$usuario =  new Usuario();

$nombres   =  "Omar";
$apellidos =  "zea";
$dni       =  "00001234";

$valor     =  $usuario->agregar($nombres,$apellidos,$dni);

switch ($valor) {
	case 'existe':
	echo "DNI Duplicado, intente de nuevo";
		break;
	case 'ok':
	echo "Usuario Registrado";
		break;
	default:
	echo "error";
		break;
}


 ?>