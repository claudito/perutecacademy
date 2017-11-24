<?php 

class Area
{


function lista()
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "SELECT * FROM area";
$statement  =  $bd->prepare($query);
$statement->execute();
$result     =  $statement->fetchAll();
return $result;


} catch (Exception $e) {
	
  echo "Error: ".$e->getMessage();

}



}








}







 ?>