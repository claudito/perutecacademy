<?php 

include'../../autoload.php';

$id        = $_POST['id'];
$usuario   = new Usuario();
$valor     = $usuario->eliminar($id);

if ($valor=='ok') 
{
	
	echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Registro Eliminado",
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