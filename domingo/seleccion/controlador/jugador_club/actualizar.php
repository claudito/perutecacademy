<?php 

include'../../autoload.php';

$id         = $_POST['id'];
$club       = $_POST['club'];


if (Jugador_club::actualizar($id,$club)=='ok') 
{
   echo "<script>
         alert('Registro Actualizado');
         window.location='../../pages/jugador_club.php';
         </script>
        ";
} 
else 
{
    echo " 
    <br> Error<br> 
    <a href='../../pages/jugador_club.php'>regresar</a>
        ";


}





 ?>