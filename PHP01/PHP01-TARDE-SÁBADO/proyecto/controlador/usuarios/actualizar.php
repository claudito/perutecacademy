<?php 

include'../../autoload.php';

$codigo     =  $_POST['codigo'];
$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];

$usuarios  =  new Usuarios();

$valor     =  $usuarios->actualizar($codigo,$nombres,$apellidos);


switch ($valor) {
	case 'ok':
	echo '<script>
swal({
  title: "Buen Trabajo",
  text:  "Usuario Actualizado",
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