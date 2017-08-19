<?php 


  try {
    
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();

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
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }






 ?>