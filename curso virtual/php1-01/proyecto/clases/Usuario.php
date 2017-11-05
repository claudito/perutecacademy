<?php 

class Usuario
{


function __construct()
{

}


function lista()
{

try {

 $conexion  =  new Conexion();
 $bd        =  $conexion->get_conexion();
 $query     =  "SELECT * FROM usuarios";
 $statement =  $bd->prepare($query);
if ($statement) 
{
$statement->execute();
$result = $statement->fetchAll();
return $result;
}
else 
{
return "error";
}

	
} catch (Exception $e) {

	echo "Error: ".$e->getMessage();
	
}

 

}

function lista_parametro($dni)
{

try {

 $conexion  =  new Conexion();
 $bd        =  $conexion->get_conexion();
 $query     =  "SELECT * FROM usuarios WHERE dni=:dni";
 $statement =  $bd->prepare($query);
 $statement->bindParam(':dni',$dni);
if ($statement) 
{
$statement->execute();
$result = $statement->fetchAll();
return $result;
}
else 
{
return "error";
}

	
} catch (Exception $e) {

	echo "Error: ".$e->getMessage();
	
}

 

}



function agregar($nombres,$apellidos,$dni)
{

try 
{
$conexion  =  new Conexion();
$bd        =  $conexion->get_conexion();
$query     =  "SELECT  *  FROM usuarios WHERE dni=:dni";
$statement =  $bd->prepare($query);
$statement->bindParam(':dni',$dni);
$statement->execute();
$result = $statement->fetchAll();
if (count($result)>0) 
{
    return "existe";
} 
else 
{

$query     = "INSERT INTO usuarios(nombres,apellidos,dni)
           VALUES(:nombres,:apellidos,:dni)";
$statement = $bd->prepare($query);
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




} 
catch (Exception $e) 
{
echo "Error: ".$e->getMessage();
}



}



function eliminar($id)
{

try {

$conexion  =  new Conexion();
$bd        =  $conexion->get_conexion();
$query     = "DELETE FROM usuarios WHERE id=:id";
$statement =  $bd->prepare($query);
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

$conexion  =  new Conexion();
$bd        =  $conexion->get_conexion();
$query     = "UPDATE  usuarios SET nombres=:nombres,apellidos=:apellidos,dni=:dni  WHERE id=:id";
$statement =  $bd->prepare($query);
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



function consulta($id,$campo)
{

try {
 
 $conexion  =  new Conexion();
 $bd        =  $conexion->get_conexion();
 $query     =  "SELECT * FROM usuarios WHERE id=:id";
 $statement = $bd->prepare($query);
 $statement->bindParam(':id',$id);
 $statement->execute();
 $result  =  $statement->fetch();
 return $result[$campo];
  
} catch (Exception $e) {
  
  echo "Error: ".$e->getMessage();

}


}





}




 ?>