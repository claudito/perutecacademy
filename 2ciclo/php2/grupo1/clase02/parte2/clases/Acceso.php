<?php 
class Acceso
{

protected $user;
protected $pass;

function __construct($frm_user,$frm_pass)
{

	$this->user = $frm_user;
	$this->pass = $frm_pass;

}


function login()
{

try {
	
#202cb962ac59075b964b07152d234b70
#luis

$conexion =  new Conexion();
$bd       =  $conexion->get_conexion();
$query    =  "SELECT  * FROM usuario WHERE 
             usuario=:usuario  AND pass=:pass";
$statement = $bd->prepare($query);
$statement->bindParam(':usuario',$this->user);
$statement->bindParam(':pass',$this->pass);
$statement->execute();
$result  =  $statement->fetchall();
if (count($result)>0)
{
   session_start();
   $statement->execute();
   $dato  = $statement->fetch();
   $_SESSION[KEY.'session_id']     = $dato['id'];
   $_SESSION[KEY.'session_usuario']= $dato['nombres'];

   echo "
   <script>
   alert('Bienvenido');
   window.location='bienvenido.php';
   </script>";



} 
else 
{
  echo "no existe";
}




} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}



}

function logout()
{

}



}








 ?>