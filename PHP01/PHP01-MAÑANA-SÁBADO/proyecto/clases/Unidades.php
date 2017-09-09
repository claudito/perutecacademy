<?php 

class Unidades
{

function __construct()
{

}




function listar()
{

  try {
        
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
    $query     = "SELECT * FROM unidad";
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


function listar_actualizar($codigo)
{

  try {
        
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
    $query     = "SELECT * FROM unidad WHERE codigo<>:codigo";
    $statement = $bd->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->execute();
    $result   = $statement->fetchAll();
    return $result;
    } 
    catch (Exception $e) 
    {
     echo "ERROR: " . $e->getMessage();
    }
    
}





}



 ?>