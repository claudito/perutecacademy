<?php 

include'../../autoload.php';


$nombres   = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$usuario   = new Usuario();
$valor     = $usuario->agregar($nombres,$apellidos);


if ($valor=='ok') 
{
	
	echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Registro Agregado",
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