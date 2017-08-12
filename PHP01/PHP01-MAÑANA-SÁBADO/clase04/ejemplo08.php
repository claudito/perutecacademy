<?php 

#include'autoload.php';
#include'clases/Alumnos.php';
include'clases/Funciones.php';

$funciones = new Funciones();
#$alumnos   = new Alumnos();

echo "Operaciones:"."</br>";

echo $funciones->operacion(10,2,'division');
#echo "</br>";
#echo $alumnos->operacion();
 ?>