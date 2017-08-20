<?php 
class Usuarios
{


function __construct()
{

}

function  agregar($codigo,$nombres,$apellidos)
{

try {
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
    
    $query     = "SELECT * FROM usuarios WHERE codigo=:codigo";
    $statement = $bd->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->execute();
    $result   = $statement->fetchAll();
    
    if (count($result) >0)
    {
     return "existe";
    } 
    else 
    {
     $query     = "INSERT INTO usuarios(codigo,nombres,apellidos)VALUES(:codigo,:nombres,:apellidos)";
    $statement = $bd->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->bindParam(':nombres',$nombres);
    $statement->bindParam(':apellidos',$apellidos);
    if($statement)
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
      echo "ERROR: " . $e->getMessage();
   
   }



	
}

function  actualizar($codigo,$nombres,$apellidos)
{
	
 try {
   $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
     $query     = "UPDATE  usuarios  SET nombres=:nombres,apellidos=:apellidos WHERE codigo=:codigo";
    $statement = $bd->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->bindParam(':nombres',$nombres);
    $statement->bindParam(':apellidos',$apellidos);
    if($statement)
    {
    $statement->execute();
    return "ok";
    }
    else
    {
    return "error";
    }
       
   }
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }



}


function  eliminar($codigo)
{

   try {
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
    $query     = "DELETE FROM  usuarios  WHERE codigo=:codigo";
    $statement = $bd->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    if($statement)
    {
    $statement->execute();
    return "ok";
    }
    else
    {
    return "error";
    }
       
   }
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }

	
}

function  listar()
{
	 try {
        
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
    
    $query     = "SELECT * FROM usuarios";
    $statement = $bd->prepare($query); 
    $statement->execute();
    $result   = $statement->fetchAll();
    return $result;
    } 
    catch (Exception $e) 
    {
     echo "ERROR: " . $e->getMessage();
    }

	
}

function  consultar($codigo,$campo)
{
	
 try {
        
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
    $query     = "SELECT * FROM usuarios WHERE codigo=:codigo";
    $statement = $bd->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->execute();
    $result   = $statement->fetch();
    return $result[$campo];
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }

}




}

 ?>