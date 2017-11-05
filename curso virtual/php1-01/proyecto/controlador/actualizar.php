<?php 

include'../autoload.php';

$usuario =  new Usuario();

$id        =  $_POST['id'];
$nombres   =  $_POST['nombres'];
$apellidos =  $_POST['apellidos'];
$dni       =  $_POST['dni'];

$valor     =  $usuario->actualizar($id,$nombres,$apellidos,$dni);

switch ($valor) {
	case 'ok':
	echo "<script>
	alert('Usuario Actualizado');
    window.location='../pages/usuarios.php'
	</script>";
		break;
	default:
	echo "error";
		break;
}


 ?>