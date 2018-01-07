<?php 

include'../autoload.php';

$id         = $_POST['id'];
$nombres    = $_POST['nombres'];
$apellidos  = $_POST['apellidos'];
$dni        = $_POST['dni'];

if (Usuario::actualizar($id,$nombres,$apellidos,$dni)=='ok') 
{
   echo "<script>
         alert('Usuario Actualizado');
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