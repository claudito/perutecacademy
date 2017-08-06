<?php 

#incluir el archivo
include'autoload.php';

#Crear el Objeto
$funciones = new Funciones();
$alumnos   = new Alumnos();

#Llamar a la función

echo $funciones->mensaje('Funciones');
echo "</br>";
echo $alumnos->mensaje('Alumnos');

//echo $funciones->operacion(0,0,'division');


 ?>