<?php 
class Articulos
{


function __construct()
{

}


function agregar()
{

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