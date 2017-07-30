<?php 

include'../clases/Conexion.php';
include'../clases/Alumno.php';

$id;

$id  =  $_GET['id'];

$alumno  = new Alumno();

if ($alumno->eliminar($id)=='ok') 
{
	echo "<script>
 alert('Registro Eliminado');
 window.location='index.php';
 </script>";
} 
else 
{
	echo "<script>
 alert('Error al eliminar');
 window.location='index.php';
 </script>";
}




 ?>