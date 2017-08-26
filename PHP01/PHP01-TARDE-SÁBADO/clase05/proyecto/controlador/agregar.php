<?php 

include'../autoload.php';



$codigo     =  htmlspecialchars(trim($_POST['codigo']), ENT_QUOTES,'UTF-8');
$nombres    =   htmlspecialchars(trim($_POST['nombres']), ENT_QUOTES,'UTF-8');
$apellidos  =   htmlspecialchars(trim($_POST['apellidos']), ENT_QUOTES,'UTF-8');


if (strlen($codigo)>0 AND strlen($nombres)>0 AND strlen($apellidos)>0) 
{
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
}
else
{
	echo "<script>
    alert('Algún Dato esta vacio');
    window.location='../vistas/agregar.php';
	</script>";
}






 ?>