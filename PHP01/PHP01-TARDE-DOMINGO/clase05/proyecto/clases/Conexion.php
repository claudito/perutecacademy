<?php 

class Conexion
{

function __construct()
{

}


function  get_conexion()
{

try {
	
$conexion = new PDO("mysql:host=localhost;dbname=test","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//$conexion = new PDO("mysql:host=localhost;dbname=test","root","");
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#$conexion = ($conexion) ? "conectado" : "error con la conexión" ;
#echo $conexion;
return $conexion;


} 
catch (Exception $e) 
{
	echo "ERROR: " . $e->getMessage();
}



}




}






 ?>