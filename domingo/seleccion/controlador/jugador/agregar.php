<?php 

include'../../autoload.php';

$nombres    = $_POST['nombres'];
$apellidos  = $_POST['apellidos'];
$posicion   = $_POST['posicion'];

if (Jugador::agregar($nombres,$apellidos,$posicion) =='ok') 
{
   echo "<script>
         alert('Jugador Registrado');
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