<?php 

include'autoload.php';

$user  =  $_POST['user'];
$pass  =  $_POST['pass'];

$acceso  =  new Acceso($user,md5($pass));
$acceso->login();

 ?>