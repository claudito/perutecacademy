<?php 

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



 ?>