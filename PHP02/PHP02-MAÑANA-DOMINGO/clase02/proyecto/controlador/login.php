<?php 

include'../autoload.php';

$user;
$pass;

$user  = $_POST['usuario'];
$pass  = $_POST['password'];

$acceso  = new Acceso($user,$pass);

if ($acceso->login()=='existe')
{
   echo "
    <script>
    alert('Bienvenido');
    window.location='".URL."';
    </script>";
} 
else 
{
  echo "
    <script>
    alert('El usuario o contraseña no existe');
    window.location='".URL."';
    </script>";

}







 ?>