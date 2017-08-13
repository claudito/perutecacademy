<?php 

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


 ?>