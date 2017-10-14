<?php 
session_start();
include'autoload.php';

if (isset($_SESSION[KEY.ID]))
{
  include'bienvenido.php';
} 
else 
{
  include'acceso.php';
}





 ?>