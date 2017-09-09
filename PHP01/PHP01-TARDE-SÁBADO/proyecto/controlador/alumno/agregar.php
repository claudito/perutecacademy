<?php 

include'../../autoload.php';



$codigo     =  htmlspecialchars(trim($_POST['codigo']), ENT_QUOTES,'UTF-8');
$nombres    =  htmlspecialchars(trim($_POST['nombres']), ENT_QUOTES,'UTF-8');
$apellidos  =  htmlspecialchars(trim($_POST['apellidos']), ENT_QUOTES,'UTF-8');
$edad  =  htmlspecialchars(trim($_POST['edad']), ENT_QUOTES,'UTF-8');


if (strlen($codigo)>0 AND strlen($nombres)>0 AND strlen($apellidos)>0) 
{
	$alumno  =  new Alumno();
    $valor     =  $alumno->agregar($codigo,$nombres,$apellidos,$edad);


switch ($valor) {
	case 'ok':
	echo '<script>
swal({
  title: "Buen Trabajo",
  text:  "Alumno Registrado",
  type:  "success",
  timer: 2000,
  showConfirmButton: false
});
</script>';
		break;
	case 'existe':
	echo '<script>
swal({
  title: "Código Duplicado",
  text:  "Intente con otro Código",
  type:  "warning",
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

}
else
{
	echo '<script>
swal({
  title: "Algún Dato esta vacío",
  text:  "Verifique de nuevo",
  type:  "error",
  timer: 2000,
  showConfirmButton: false
});
</script>';
}





 ?>