<?php 

include'../autoload.php';

$codigo       =  $_GET['codigo'];

$articulos = new Articulos();
$valor     = $articulos->eliminar($codigo);


switch ($valor) {
	case 'ok':
    echo "<script>
	alert('Código Eliminado')
    window.location='../ejemplo03.php';
	</script>";
		break;
	
	default:
	echo "<script>
	alert('Error')
    window.location='../ejemplo03.php';
	</script>";
		break;
}



 ?>