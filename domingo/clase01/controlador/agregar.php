<?php 

include'../autoload.php';

$nombres    = $_POST['nombres'];
$apellidos  = $_POST['apellidos'];
$dni        = $_POST['dni'];

if (Usuario::agregar($nombres,$apellidos,$dni)=='ok') 
{
   echo "<script>
         alert('Usuario Registrado');
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