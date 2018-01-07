<?php 

class Club
{


function lista()
{
try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT * FROM club";
$statement = $conexion->prepare($query);
$statement->execute();
$result    = $statement->fetchAll();
return $result;

	
} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}


}

function consulta($id,$campo)
{
try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT * FROM club WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
$result    = $statement->fetch();
return $result[$campo];

	
} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}


}





function agregar($nombre,$pais)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "INSERT INTO club(nombre,pais)VALUES(:nombre,:pais)";
$statement = $conexion->prepare($query);
$statement->bindParam(':nombre',$nombre);
$statement->bindParam(':pais',$pais);
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

function actualizar($id,$nombre,$pais)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE club SET nombre=:nombre,pais=:pais
              WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':nombre',$nombre);
$statement->bindParam(':pais',$pais);
$statement->bindParam(':id',$id);
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






function eliminar($id)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "DELETE FROM club WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
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