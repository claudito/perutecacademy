<?php 


class Registro
{

function __construct()
{
# code...
}


function agregar($nombre,$archivo)
{

try {
	

$conexion  =  new Conexion();
$bd        = $conexion->get_conexion();
$query     = "INSERT INTO registro(nombre,archivo)
           VALUES(:nombre,:archivo)";
$statement = $bd->prepare($query);
$statement->bindParam(':nombre',$nombre);
$statement->bindParam(':archivo',$archivo);
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