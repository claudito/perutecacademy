<?php 

include'../autoload.php';

$codigo     =  $_POST['codigo'];
$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];

$usuarios  =  new Usuarios();

$valor     =  $usuarios->agregar($codigo,$nombres,$apellidos);


switch ($valor) {
	case 'ok':
	echo "<script>
    alert('Usuario Registrado');
    window.location='../vistas';
	</script>";
		break;
	case 'existe':
	echo "<script>
    alert('Usuario Duplicado,intentelo de nuevo');
    window.location='../vistas';
	</script>";
		break;
	
	default:
	echo "<script>
    alert('Error de Registro de Usuario');
    window.location='../vistas';
	</script>";
		break;
}


 ?>