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


function consulta($id)
{

try {
	
$conexion  =  new Conexion();
$db        =  $conexion->get_conexion();
$query     = "SELECT * FROM usuario WHERE id=:id";
$statement =  $db->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
$result    = $statement->fetchAll();
return $result;




} catch (Exception $e) {

	echo "Error: ".$e->getMessage();
	
}


}




}




 ?>