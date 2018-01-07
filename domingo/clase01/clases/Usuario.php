<?php 

class Usuario
{


function lista()
{
try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT * FROM usuario";
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
$query     = "SELECT * FROM usuario WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
$result    = $statement->fetch();
return $result[$campo];

	
} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}


}





function agregar($nombres,$apellidos,$dni)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "INSERT INTO usuario(nombres,apellidos,dni)VALUES(:nombres,:apellidos,:dni)";
$statement = $conexion->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':dni',$dni);
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

function actualizar($id,$nombres,$apellidos,$dni)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE usuario SET nombres=:nombres,apellidos=:apellidos,dni=:dni
              WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':dni',$dni);
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
$query     = "DELETE FROM usuario WHERE id=:id";
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