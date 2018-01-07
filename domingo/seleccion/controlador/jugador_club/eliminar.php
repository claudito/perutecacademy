<?php 
include'../../autoload.php';

$id    = $_GET['id'];

if (Jugador_club::eliminar($id)=='ok') 
{
   echo "<script>
         alert('Registro Eliminado');
         window.location='../../pages/jugador_club.php';
         </script>
        ";
} 
else 
{
    
   echo " 
    <br>Error<br> 
    <a href='../../pages/jugador_club.php'>regresar</a>
        ";

}





 ?>