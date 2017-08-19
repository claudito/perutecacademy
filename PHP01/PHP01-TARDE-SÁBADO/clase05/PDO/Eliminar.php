<?php 

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



 ?>