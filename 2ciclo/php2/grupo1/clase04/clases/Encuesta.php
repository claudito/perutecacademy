<?php 

class Encuesta
{

function __construct()
{

}



function lista()
{

try {
	
$conexion  =  new Conexion();
$db        =  $conexion->get_conexion();
$query     = "SELECT * FROM encuesta";
$statement =  $db->prepare($query);
$statement->execute();
$result    = $statement->fetchAll();
return $result;

} catch (Exception $e) {

	echo "Error: ".$e->getMessage();
	
}


}







}

 ?>