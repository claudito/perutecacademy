<?php 

include'../autoload.php';

 $codigo       =  htmlentities(trim($_POST['codigo']), ENT_QUOTES, "UTF-8");

$articulos    = new Articulos();
$valor        = $articulos->eliminar($codigo);

switch ($valor) {
	case 'ok':
	echo '<script>
swal({
  title: "Buen Trabajo",
  type:  "success",
  text: "Artículo Eliminado",
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