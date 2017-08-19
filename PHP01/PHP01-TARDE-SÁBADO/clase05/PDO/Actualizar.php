<?php 

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


 ?>