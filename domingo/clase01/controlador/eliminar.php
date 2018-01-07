<?php 
include'../autoload.php';

$id    = $_GET['id'];

if (Usuario::eliminar($id)=='ok') 
{
   echo "<script>
         alert('Usuario Eliminado');
         window.location='../agregar.php';
         </script>
        ";
} 
else 
{
    echo "<script>
         alert('Error');
         window.location='../agregar.php';
         </script>
        ";
}





 ?>