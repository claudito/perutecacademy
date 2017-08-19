<?php 
class Articulos
{


function __construct()
{

}


function agregar($codigo,$descripcion,$unidad,$cantidad,$precio)
{


  try {
    
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();

     $query     = "INSERT INTO maeart(codigo,descripcion,unidad,cantidad,precio)VALUES(:codigo,:descripcion,:unidad,:cantidad,:precio)";
    $statement = $bd->prepare($query);
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

function actualizar()
{
	
}


function eliminar()
{
	
}


function listar()
{

  try {
        
    $conexion    = new Conexion();
    $bd          = $conexion->get_conexion();
    $query     = "SELECT * FROM maeart";
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


function consulta()
{
	
}



}


 ?>