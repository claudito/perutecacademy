<?php 

class Conexion
{


function get_conexion()
{

try {
	
$conexion = new PDO("mysql:host=localhost;dbname=seguridad","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conexion;
#$conexion  = ($conexion) ? "ok" : "error" ;
#echo $conexion;


} 
catch (Exception $e) 
{
	echo "ERROR: " . $e->getMessage();
}



}


}


 ?>