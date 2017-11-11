<?php 

class Paciente
{


function __construct()
{

}


function lista()
{


try {
	
$conexion  =  new Conexion();
$bd        =  $conexion->get_conexion();
$query     =  "SELECT * FROM paciente";
$statement =  $bd->prepare($query);
$statement->execute();
$result    =  $statement->fetchAll();
return $result;


} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}



}




}







 ?>