<?php 

include'../autoload.php';


$nombres   = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$usuario   = new Usuario();
$valor     = $usuario->agregar($nombres,$apellidos);

if ($valor=='ok')
{
   echo "<script>
         alert('Usuario Registrado');
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