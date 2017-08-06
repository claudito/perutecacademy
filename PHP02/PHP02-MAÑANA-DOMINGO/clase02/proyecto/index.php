<?php 

include'autoload.php';

session_start();

#isset($nombre) : si existe.
#!isset($nombre) : no existe.

if (!isset($_SESSION['id'])) 
{
  include'vistas/acceso.php';
} 
else 
{
  include'vistas/home.php';
}



 ?>