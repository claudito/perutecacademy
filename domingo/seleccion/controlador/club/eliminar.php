<?php 
include'../../autoload.php';

$id    = $_GET['id'];

if (Club::eliminar($id)=='ok') 
{
   echo "<script>
         alert('Club Eliminado');
         window.location='../../pages/club.php';
         </script>
        ";
} 
else 
{
    echo " 
    <br> Error<br> 
    <a href='../../pages/club.php'>regresar</a>
        ";
}





 ?>