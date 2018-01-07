<?php 

include'../../autoload.php';

$id         = $_POST['id'];
$nombre     = $_POST['nombre'];
$pais       = $_POST['pais'];


$mensaje  = Club::actualizar($id,$nombre,$pais);


if ($mensaje=='ok') 
{
   echo "<script>
         alert('Usuario Actualizado');
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