<?php 

include'../autoload.php';

$codigo     =  $_POST['codigo'];
$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];

$usuarios  =  new Usuarios();

$valor     =  $usuarios->actualizar($codigo,$nombres,$apellidos);


switch ($valor) {
	case 'ok':
	echo "<script>
    alert('Usuario Actualizado');
    window.location='../vistas';
	</script>";
		break;	
	default:
	echo "<script>
    alert('Error de Actualización');
    window.location='../vistas';
	</script>";
		break;
}


 ?>