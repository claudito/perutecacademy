<?php 

class Jugador
{


function lista()
{
try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT * FROM jugador";
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
$query     = "SELECT * FROM jugador WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
$result    = $statement->fetch();
return $result[$campo];

	
} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}


}





function agregar($nombres,$apellidos,$posicion)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "INSERT INTO jugadores(nombres,apellidos,posicion)VALUES(:nombres,:apellidos,:posicion)";
$statement = $conexion->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':posicion',$posicion);
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

function actualizar($id,$nombres,$apellidos,$posicion)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE jugador SET nombres=:nombres,apellidos=:apellidos,posicion=:posicion
              WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':posicion',$posicion);
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
$query     = "DELETE FROM jugador WHERE id=:id";
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