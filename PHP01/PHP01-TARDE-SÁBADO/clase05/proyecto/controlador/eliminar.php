<?php 

include'../autoload.php';

$codigo  =  $_GET['codigo'];

$usuarios  =  new Usuarios();
$valor     =  $usuarios->eliminar($codigo);

switch ($valor) {
	case 'ok':
	echo "<script>
    alert('Usuario Eliminado');
    window.location='../vistas';
	</script>";
		break;
	default:
	echo "<script>
    alert('Error de Eliminación');
    window.location='../vistas';
	</script>";
		break;
}


 ?>