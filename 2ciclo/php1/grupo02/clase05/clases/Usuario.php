<?php 

class Usuario
{


function lista()
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "SELECT * FROM  usuario";
$statement  =  $bd->prepare($query);
$statement->execute();
$result     =  $statement->fetchAll();
return $result;


} catch (Exception $e) {
	
  echo "Error: ".$e->getMessage();

}



}


function consulta($id,$campo)
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "SELECT * FROM usuario WHERE id=:id";
$statement  =  $bd->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
$result     = $statement->fetch();
return $result[$campo];


} catch (Exception $e) {
	
 echo "Error:".$e->getMessage();

}



}

function agregar($nombres,$apellidos)
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "INSERT INTO usuario(nombres,apellidos)VALUES(:nombres,:apellidos)";
$statement  =  $bd->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);

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





function actualizar($id,$nombres,$apellidos)
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "UPDATE usuario SET nombres=:nombres, apellidos=:apellidos WHERE id=:id";
$statement  =  $bd->prepare($query);
$statement->bindParam(':id',$id);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);

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
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "DELETE FROM usuario WHERE id=:id";
$statement  =  $bd->prepare($query);
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