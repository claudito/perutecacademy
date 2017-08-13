<?php 

include'../autoload.php';

$codigo       =  $_POST['codigo'];
$descripcion  =  $_POST['descripcion'];
$unidad       =  $_POST['unidad'];
$cantidad     =  $_POST['cantidad'];
$precio       =  $_POST['precio'];

$articulos = new Articulos();
$valor     = $articulos->agregar($codigo,$descripcion,$unidad,$cantidad,$precio);


switch ($valor) {
	case 'existe':
    echo "<script>
	alert('Código Duplicado')
    window.location='../ejemplo04.php';
	</script>";
		break;
	case 'ok':
    echo "<script>
	alert('Código Registrado')
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