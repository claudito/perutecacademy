<?php 

include'../autoload.php';


$id        = $_POST['id'];
$nombres   = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$usuario   = new Usuario();
$valor     = $usuario->actualizar($id,$nombres,$apellidos);

if ($valor=='ok')
{
   echo "<script>
         alert('Datos Actualizados Correctamente');
         window.location='../pages/usuario.php';
         </script>";
}
else
{
   echo "<script>
         alert('Error');
         window.location='../pages/usuario.php';
         </script>";
}





 ?>