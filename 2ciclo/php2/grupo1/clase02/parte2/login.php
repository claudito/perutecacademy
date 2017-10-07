<?php 

include'config.php';
include'clases/Conexion.php';
include'clases/Acceso.php';

$usuario  =  $_POST['usuario'];
$pass     =  $_POST['pass'];

$acceso  =  new Acceso($usuario,md5($pass));
$acceso->login();



 ?>