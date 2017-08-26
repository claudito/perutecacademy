<?php 

include'../autoload.php';

$codigo    =  $_GET['codigo'];

$articulos = new Articulos();
$valor     = $articulos->eliminar($codigo);

switch ($valor) {
	case 'ok':
	echo "
	<script>
    alert('Articulo Eliminado');
    window.location='../vistas' 
	</script>";
		break;
	
	default:
	echo "
	<script>
    alert('Error de Eliminación');
    window.location='../vistas' 
	</script>";
		break;
}



 ?>