<?php 

include'../../autoload.php';

$nombre    = $_POST['nombre'];
$pais      = $_POST['pais'];

if (Club::agregar($nombre,$pais)=='ok') 
{
   echo "<script>
         alert('Club Registrado');
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