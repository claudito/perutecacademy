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


function eliminar($codigo)
{

  try 
  {
     
    $conexion = new Conexion();
    $bd       = $conexion->get_conexion();
    $query    = "DELETE FROM maeart WHERE codigo=:codigo";
    $statement= $bd->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    if ($statement)
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
    
    echo "Error:".$e->getMessage();

  }


	
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


function consulta($codigo,$campo)
{
	
try 
{

$conexion =  new Conexion();
$bd       =  $conexion->get_conexion();
$query    =  "SELECT * FROM maeart WHERE codigo=:codigo";
$statement=  $bd->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->execute();
$result  =  $statement->fetch();
return $result[$campo];

} 
catch (Exception $e) 
{

echo "Error:".$e->getMessage();
  
}




}



}


 ?>