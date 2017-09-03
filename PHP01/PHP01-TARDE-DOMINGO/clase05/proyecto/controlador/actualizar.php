<?php 

include'../autoload.php';

 $codigo       =  htmlentities(trim($_POST['codigo']), ENT_QUOTES, "UTF-8");
 $descripcion  =  htmlentities(trim($_POST['descripcion']), ENT_QUOTES, "UTF-8");
 $unidad       =  htmlentities(trim($_POST['unidad']), ENT_QUOTES, "UTF-8");
 $cantidad     =  $_POST['cantidad'];
 $precio       =  $_POST['precio'];
 
$articulos = new Articulos();
$valor     = $articulos->actualizar($codigo,$descripcion,$unidad,$cantidad,$precio);



switch ($valor) {
	case 'ok':
	echo '<script>
swal({
  title: "Buen Trabajo",
  type:  "success",
  text: "Artículo Actualizado",
  timer: 2000,
  showConfirmButton: false
});
</script>';
break;

	default:
 echo '<script>
swal({
  title: "Error",
  type:  "error",
  text: "Consulte al área de Soporte",
  timer: 2000,
  showConfirmButton: false
});
</script>';
		break;
}



 ?>