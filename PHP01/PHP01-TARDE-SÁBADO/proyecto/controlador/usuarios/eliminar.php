<?php 

include'../../autoload.php';

$codigo  =  $_POST['codigo'];

$usuarios  =  new Usuarios();
$valor     =  $usuarios->eliminar($codigo);

switch ($valor) {
	case 'ok':
	echo '<script>
swal({
  title: "Buen Trabajo",
  text:  "Usuario Eliminado",
  type:  "success",
  timer: 2000,
  showConfirmButton: false
});
</script>';
		break;
	default:
	echo '<script>
swal({
  title: "Error",
  text:  "Consulte al área de Soporte",
  type:  "error",
  timer: 2000,
  showConfirmButton: false
});
</script>';
		break;
}


 ?>