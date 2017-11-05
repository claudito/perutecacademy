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


function agregar($nombres,$apellidos,$dni)
{

  try {
  	
	$conexion   =  new Conexion();
	$bd         =  $conexion->get_conexion();
	$query      =  "SELECT  * FROM usuario WHERE dni=:dni";
	$statement  =  $bd->prepare($query);
	$statement->bindParam(':dni',$dni);
	$statement->execute();
	$result    =  $statement->fetchAll();
	if (count($result)>0)
	{
	  return "existe";
	} 
	else 
	{
	  
	  $query      =  "INSERT INTO usuario(nombres,apellidos,dni)
	              VALUES(:nombres,:apellidos,:dni)";
	$statement  = $bd->prepare($query);
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


function actualizar($id,$nombres,$apellidos,$dni)
{  

try {
	
$conexion   =  new Conexion();
$bd         =  $conexion->get_conexion();
$query      =  "UPDATE usuario SET nombres=:nombres,apellidos=:apellidos,dni=:dni   WHERE id=:id";
$statement  =  $bd->prepare($query);
$statement->bindParam(':id',$id);
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




}

 ?>