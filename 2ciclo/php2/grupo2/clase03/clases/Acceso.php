<?php 

class Acceso
{

protected $user;
protected $pass;

function __construct($user='',$pass='')
{

$this->user  =  $user;
$this->pass  =  $pass;

}


function login()
{

try 
{
	
$conexion  =  new Conexion();
$bd        =  $conexion->get_conexion();
$query     =  "SELECT * FROM usuario  WHERE user=:user AND pass=:pass";
$statement =  $bd->prepare($query);
$statement->bindParam(':user',$this->user);
$statement->bindParam(':pass',$this->pass);
$statement->execute();
$result   =  $statement->fetchall();
if (count($result)>0)
{
  
  session_start();

  $statement->execute();
  $dato  = $statement->fetch();
  $_SESSION['id']      = $dato['id'];
  $_SESSION['nombres'] = $dato['nombres'];

  echo "
  <script>
  alert('Bienvenido');
  window.location='home.php';
  </script>";


}
else
{
  echo "no existe el usuario";
}

} catch (Exception $e) {
	
    echo "Error:".$e->getMessage();

}



}


}



 ?>