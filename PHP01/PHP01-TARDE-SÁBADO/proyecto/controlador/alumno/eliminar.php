<?php 

include'../../autoload.php';

$codigo  =  $_POST['codigo'];

$alumno  =  new Alumno();
$valor     =  $alumno->eliminar($codigo);

switch ($valor) {
	case 'ok':
	echo '<script>
swal({
  title: "Buen Trabajo",
  text:  "Alumno Eliminado",
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