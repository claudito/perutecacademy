<?php 

class Articulos{


function __construct()
{

}


function lista()
{

 try {
        
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
    $query     = "SELECT * FROM maeart";
    $statement = $conexion->prepare($query); 
    $statement->execute();
    $result   = $statement->fetchAll();
    return $result;
    } 
    catch (Exception $e) 
    {
     echo "ERROR: " . $e->getMessage();
    }


}



function agregar($codigo,$descripcion,$unidad,$cantidad,$precio)
{

 try {
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
    
    $query     = "SELECT * FROM maeart WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->execute();
    $result   = $statement->fetchAll();
    
    if (count($result) >0)
    {
     return "existe";
    } 
    else 
    {
     $query     = "INSERT INTO maeart(codigo,descripcion,unidad,cantidad,precio)VALUES(:codigo,:descripcion,:unidad,:cantidad,:precio)";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->bindParam(':descripcion',$descripcion);
    $statement->bindParam(':unidad',$unidad);
    $statement->bindParam(':cantidad',$cantidad);
    $statement->bindParam(':precio',$precio);
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


function eliminar($codigo)
{

 try {
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
     $query     = "DELETE FROM  maeart  WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
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


function consulta($codigo,$campo)
{

 try {
        
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
    $query     = "SELECT * FROM maeart WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->execute();
    $result   = $statement->fetch();
    return $result[$campo];
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }



}



function actualizar($codigo,$descripcion,$unidad,$cantidad,$precio)
{

try {
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
     $query     = "UPDATE  maeart  SET descripcion=:descripcion,unidad=:unidad,cantidad=:cantidad,precio=:precio WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->bindParam(':descripcion',$descripcion);
    $statement->bindParam(':unidad',$unidad);
    $statement->bindParam(':cantidad',$cantidad);
    $statement->bindParam(':precio',$precio);
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


}


 ?>