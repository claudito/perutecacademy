<?php 

session_start();
include'autoload.php';

if (isset($_SESSION[KEY.ID]))
{
 include'home.php';
} 
else 
{
 include'ingreso.php';
}







 ?>