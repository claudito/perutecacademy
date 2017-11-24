<?php 

include'../../autoload.php';


$id        = $_POST['id'];
$nombres   = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$area      = $_POST['area'];

$usuario   = new Usuario();
$valor     = $usuario->actualizar($id,$nombres,$apellidos,$area);


if ($valor=='ok') 
{
	
	echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Registro Actualizado",
    type:"success",
    timer: 2000,
    showConfirmButton: false
    });
     </script>';


} 
else 
{
	
 echo '<script>
    swal({
    title: "Error",
    text: "Consulte al área de Soporte",
    type:"error",
    timer: 2000,
    showConfirmButton: false
    });
     </script>';

}





 ?>