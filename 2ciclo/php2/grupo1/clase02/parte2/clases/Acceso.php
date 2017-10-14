<?php 
class Acceso
{

protected $user;
protected $pass;

function __construct($frm_user='',$frm_pass='')
{

	$this->user = $frm_user;
	$this->pass = $frm_pass;

}


function login()
{

try {
	
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
   $_SESSION[KEY.ID]     = $dato['id'];
   $_SESSION[KEY.NOMBRES]= $dato['nombres'];

   echo "
   <script>
   alert('Bienvenido');
   window.location='".URL."';
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


try {
  
  session_start();
if (isset($_SESSION[KEY.ID])) 
{
    unset($_SESSION[KEY.ID]);
    unset($_SESSION[KEY.NOMBRES]);
    
    echo "<script>
    alert('Adios');
    window.location='".URL."';
    </script>";   
} 
else
{
    echo "<script>
    alert('No hay Sesión');
    window.location='".URL."';
    </script>";
}


} catch (Exception $e) {

  echo "Error: ".$e->getMessage();
  
}




}



}








 ?>