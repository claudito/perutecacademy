<?php 

class Alumnos
{

function __construct()
{

}

function lista()
{
	
$dato     = array();
$conexion =  new Conexion();
$query    =  "SELECT  * FROM alumnos";
$result   =  $conexion->query($query);
while ($fila  =  mysqli_fetch_assoc($result)) 
{
	$dato[] =  $fila;
}
   
   return $dato;

}

function estadisticas()
{
	
$dato     = array();
$conexion =  new Conexion();
$query    =  "SELECT  * FROM estadisticas";
$result   =  $conexion->query($query);
while ($fila  =  mysqli_fetch_assoc($result)) 
{
	$dato[] =  $fila;
}
   
   return $dato;

}



function consulta($id)
{
	
$dato     = array();
$conexion =  new Conexion();
$query    =  "SELECT  * FROM alumnos 
              WHERE id='".$id."'";
$result   =  $conexion->query($query);
while ($fila  =  mysqli_fetch_assoc($result)) 
{
	$dato[] =  $fila;
}
   
   return $dato;

}




}


 ?>