<?php 


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





 ?>