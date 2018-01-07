<?php 

include'../../autoload.php';

$jugador  = $_POST['jugador'];
$club     = $_POST['club'];


$mensaje  = Jugador_club::agregar($jugador,$club);


if ($mensaje == 'existe') 
{
   echo "<script>
         alert('Registro Duplicado');
         window.location='../../pages/jugador_club.php';
         </script>
        ";
} 
else if ($mensaje=='ok')
{
	echo "<script>
         alert('Registro Insertado');
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