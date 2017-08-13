<?php 

include'autoload.php';
#include'clases/Conexion.php'; #importamos la conexión
#include'clases/Articulos.php';

#$conexion =  new Conexion();
#$conexion->get_conexion();

$articulos  =  new Articulos();
if (count($articulos->lista())>0) 
{
	
	foreach ($articulos->lista() as $key => $value) 
	{
		echo $value['codigo'].'-'.$value['descripcion']."</br>";
	}


} 
else 
{
	echo "no hay registros";
}






 ?>