<?php 

session_start();

$nombres;
$nombres = "Luis Augusto";

#Creación de variable de sesión:
$_SESSION['nombres'] = $nombres;


echo $_SESSION['nombres'];




 ?>