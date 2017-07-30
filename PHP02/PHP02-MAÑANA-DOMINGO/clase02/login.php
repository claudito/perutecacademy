<?php 

session_start();

$codigo;
$nombres;

$codigo  = "1";
$nombres = "Luis Augusto";


$_SESSION['codigo']  = $codigo;
$_SESSION['nombres'] = $nombres;

 ?>