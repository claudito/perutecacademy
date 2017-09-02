<?php 

 include'../autoload.php';

 $codigo       =  $_POST['codigo'];
 $descripcion  =  $_POST['descripcion'];
 $unidad       =  $_POST['unidad'];
 $cantidad     =  $_POST['cantidad'];
 $precio       =  $_POST['precio'];

 $articulos  =  new Articulos();
 $valor  = $articulos->actualizar($codigo,$descripcion,$unidad,$cantidad,$precio);

switch ($valor) {
	case 'ok':
	echo "
	<script>
    alert('Articulo Actualizado');
    window.location='../vistas' 
	</script>";
		break;
	
	default:
	echo "
	<script>
    alert('Error de Actualización');
    window.location='../vistas' 
	</script>";
		break;
}




 ?>