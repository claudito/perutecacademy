<?php 

class Usuario
{

function __construct()
{

}


function lista()
{

try {
	
$conexion  =  new Conexion();
$db        =  $conexion->get_conexion();
$query     = "SELECT * FROM usuario";
$statement =  $db->prepare($query);
$statement->execute();
$result    = $statement->fetchAll();
return $result;




} catch (Exception $e) {

	echo "Error: ".$e->getMessage();
	
}


}


function agregar($nombres,$usuario,$pass)
{

try {
	
$conexion  =  new Conexion();
$db        =  $conexion->get_conexion();
$query     = "INSERT INTO usuario(nombres,usuario,pass)VALUES(:nombres,:usuario,:pass)";
$statement =  $db->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':usuario',$usuario);
$statement->bindParam(':pass',$pass);
if ($statement) 
{  
   $statement->execute();
   return "ok";
} 
else 
{
   return "error";
}





} catch (Exception $e) {

	echo "Error: ".$e->getMessage();
	
}


}







}




 ?>