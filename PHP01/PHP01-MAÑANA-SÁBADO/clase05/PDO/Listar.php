<?php 


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





 ?>