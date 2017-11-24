<?php 

class Usuario
{


function lista()
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "SELECT u.id,u.nombres,u.apellidos,u.codigo_area,a.descripcion as area,u.fecha_creacion FROM  usuario as u INNER JOIN area as a ON u.codigo_area=a.codigo";
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
$query      =  "SELECT u.id,u.nombres,u.apellidos,u.codigo_area,a.descripcion as area,u.fecha_creacion FROM  usuario as u INNER JOIN area as a ON u.codigo_area=a.codigo WHERE u.id=:id";
$statement  =  $bd->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
$result     = $statement->fetch();
return $result[$campo];


} catch (Exception $e) {
	
 echo "Error:".$e->getMessage();

}



}

function agregar($nombres,$apellidos,$area)
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "INSERT INTO usuario(nombres,apellidos,codigo_area)VALUES(:nombres,:apellidos,:codigo_area)";
$statement  =  $bd->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':codigo_area',$area);

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





function actualizar($id,$nombres,$apellidos,$area)
{

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "UPDATE usuario SET nombres=:nombres, apellidos=:apellidos,codigo_area=:codigo_area WHERE id=:id";
$statement  =  $bd->prepare($query);
$statement->bindParam(':id',$id);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':codigo_area',$area);

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