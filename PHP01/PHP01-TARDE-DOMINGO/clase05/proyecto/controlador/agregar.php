<?php 

include'../autoload.php';

 $codigo       =  strlen(trim($_POST['codigo']));
 $descripcion  =  strlen(trim($_POST['descripcion']));
 $unidad       =  $_POST['unidad'];
 $cantidad     =  $_POST['cantidad'];
 $precio       =  $_POST['precio'];


if ($codigo>0 AND $descripcion>0) 

{
 
$articulos = new Articulos();
$valor     = $articulos->agregar($codigo,$descripcion,$unidad,$cantidad,$precio);

switch ($valor) {
	case 'ok':
	echo '<script>
swal({
  title: "Buen Trabajo",
  type:  "success",
  text: "Artículo Registrado",
  timer: 2000,
  showConfirmButton: false
});
</script>';
break;
	case 'existe':
	echo '<script>
swal({
  title: "Código Duplicado",
  type:  "warning",
  text: "Intente de Nuevo",
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


}

else 

{
echo '<script>
swal({
  title: "Algún dato esta vacio",
  type:  "error",
  text: "Intente de nuevo",
  timer: 2000,
  showConfirmButton: false
});
</script>';
}




 ?>