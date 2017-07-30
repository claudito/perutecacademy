<?php 

include'../clases/Conexion.php';
include'../clases/Alumno.php';


$nombres;
$apellidos;
$edad;

/*
$area;
$peso;
$fecha;
$tipo;
$l_java;*/


$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];
$edad       =  $_POST['edad'];
/*
$area       =  $_POST['area'];
$peso       =  $_POST['peso'];
$fecha      =  $_POST['fecha'];
$tipo       =  $_POST['tipo'];
$l_java     =  (!isset($_POST['java'])) ? "" : $_POST['java'] ;
*/

$alumno  = new Alumno($nombres,$apellidos,$edad);

if ($alumno->registrar()=='ok') 
{
 echo "<script>
 alert('Alumno Registrado');
 window.location='index.php';
 </script>";
} 
else
{
 echo "<script>
 alert('Error al Registrar');
 window.location='index.php';
 </script>";
}


 ?>