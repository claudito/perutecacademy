<?php 

include'../autoload.php';

$codigo       =  $_POST['codigo'];
$descripcion  =  $_POST['descripcion'];
$unidad       =  $_POST['unidad'];
$cantidad     =  $_POST['cantidad'];
$precio       =  $_POST['precio'];

$articulos = new Articulos();
$valor     = $articulos->actualizar($codigo,$descripcion,$unidad,$cantidad,$precio);


switch ($valor) {
	case 'ok':
    echo "<script>
	alert('Código Actualizado')
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