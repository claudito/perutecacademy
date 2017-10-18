<?php 

class Usuario
{


function lista()
{
  
   try {

	$conexion  =  new Conexion();
	$db        =  $conexion->get_conexion();
	$query     =  "SELECT * FROM usuario";
	$statement =  $db->prepare($query);
	$statement->execute();
	$result    = $statement->fetchAll();
	return $result;
 	
   } catch (Exception $e) {
   	
      echo "Error:".$e->getMessage();

   }



}



}







 ?>