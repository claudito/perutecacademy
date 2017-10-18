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
  $_SESSION[KEY.ID]      = $dato['id'];
  $_SESSION[KEY.NOMBRES] = $dato['nombres'];

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
  alert('EL Usuario o Contraseña son incorrectos');
  window.location='".URL."';
  </script>";

}

} catch (Exception $e) {
	
    echo "Error:".$e->getMessage();

}



}


function logout()
{
 
 session_start();
  if (isset($_SESSION[KEY.ID])) 
  {
      unset($_SESSION[KEY.ID]);
      unset($_SESSION[KEY.NOMBRES]);
      echo "
    <script>
    alert('Adios');
    window.location='".URL."';
    </script>";

  } 
  else 
  {
     echo "
  <script>
  alert('No ha iniciado Sesión');
  window.location='".URL."';
  </script>";
  
  }





}


}



 ?>