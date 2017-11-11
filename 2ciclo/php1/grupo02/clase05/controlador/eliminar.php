<?php 

include'../autoload.php';


$id        = $_GET['id'];

$usuario   = new Usuario();
$valor     = $usuario->eliminar($id);

if ($valor=='ok')
{
   echo "<script>
         alert('Registro Eliminado');
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