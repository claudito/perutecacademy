<?php 

class Jugador_club
{


function lista()
{
try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT jc.id,jc.id_jugador,concat(j.nombres,' ',j.apellidos)as jugador
,jc.id_club,c.nombre as club FROM jugador_club as jc
INNER JOIN jugador as j ON jc.id_jugador=j.id
INNER JOIN club as c ON jc.id_club=c.id";
$statement = $conexion->prepare($query);
$statement->execute();
$result    = $statement->fetchAll();
return $result;

	
} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}


}


function lista_club($id_jugador)
{
try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT jc.id,jc.id_jugador,concat(j.nombres,' ',j.apellidos)as jugador
,jc.id_club,c.nombre as club FROM jugador_club as jc
INNER JOIN jugador as j ON jc.id_jugador=j.id
INNER JOIN club as c ON jc.id_club=c.id WHERE jc.id_jugador=:id_jugador";
$statement = $conexion->prepare($query);
$statement->bindParam(':id_jugador',$id_jugador);
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
$query     = "SELECT jc.id,jc.id_jugador,concat(j.nombres,' ',j.apellidos)as jugador
,jc.id_club,c.nombre as club FROM jugador_club as jc
INNER JOIN jugador as j ON jc.id_jugador=j.id
INNER JOIN club as c ON jc.id_club=c.id WHERE jc.id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
$result    = $statement->fetch();
return $result[$campo];

	
} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}


}





function agregar($jugador,$club)
{

try {


$conexion  =  Conexion::get_conexion();
$query     =  "SELECT * FROM jugador_club WHERE id_jugador=:jugador AND id_club=:club";
$statement = $conexion->prepare($query);
$statement->bindParam(':jugador',$jugador);
$statement->bindParam(':club',$club);
$statement->execute();
$result    = $statement->fetchAll();
if (count($result)>0)
{
   return "existe";
}
else
{

$query     = "INSERT INTO jugador_club(id_jugador,id_club)VALUES(:jugador,:club)";
$statement = $conexion->prepare($query);
$statement->bindParam(':club',$club);
$statement->bindParam(':jugador',$jugador);
if ($statement)
{
   $statement->execute();
   return "ok";
}
else
{
   return "error";
}



}






	
} catch (Exception $e) {

echo "Error: ".$e->getMessage();
	
}


}

function actualizar($id,$club)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE jugador_club SET id_club=:club
              WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':club',$club);
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
$query     = "DELETE FROM jugador_club WHERE id=:id";
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