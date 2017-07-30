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
$query    =  "SELECT * FROM alumnos";
$result   =  $conexion->query($query);
while ($fila = mysqli_fetch_assoc($result))
 {
	 $dato[]  = $fila;
 }

    return $dato;
}


}





 ?>