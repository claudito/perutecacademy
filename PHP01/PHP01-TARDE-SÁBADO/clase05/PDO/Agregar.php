<?php 


  try {
    
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();

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
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }






 ?>