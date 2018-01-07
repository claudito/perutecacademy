<?php 

include'../../autoload.php';

$id         = $_POST['id'];
$nombres    = $_POST['nombres'];
$apellidos  = $_POST['apellidos'];
$posicion   = $_POST['posicion'];

if (Jugador::actualizar($id,$nombres,$apellidos,$posicion)=='ok') 
{
   echo "<script>
         alert('Jugador Actualizado');
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