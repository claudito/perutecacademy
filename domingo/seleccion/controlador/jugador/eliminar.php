<?php 
include'../../autoload.php';

$id    = $_GET['id'];

if (Jugador::eliminar($id)=='ok') 
{
   echo "<script>
         alert('Jugador Eliminado');
         window.location='../../pages/jugador.php';
         </script>
        ";
} 
else 
{
    echo " 
    <br> Error<br> 
    <a href='../../pages/jugador.php'>regresar</a>
        ";
}





 ?>