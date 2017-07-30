<?php 

session_start();

if (isset($_SESSION['codigo'])) 
{
   echo "Bienvenido:".$_SESSION['nombres'];
   echo "</br>";
   echo "<a href='../cerrar.php'>Cerrar Sesión</a>";
} 
else
{
   echo "La variable de sesión no existe";
}




 ?>

