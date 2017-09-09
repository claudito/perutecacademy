<?php 

include'../../autoload.php';

$codigo     =  $_POST['codigo'];
$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];
$edad       =  $_POST['edad'];

$alumno  =  new Alumno();

$valor     =  $alumno->actualizar($codigo,$nombres,$apellidos,$edad);


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