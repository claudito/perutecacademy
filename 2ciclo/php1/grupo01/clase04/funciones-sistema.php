<?php 

#Fecha 
date_default_timezone_set('America/Lima');
//echo date_default_timezone_get();
//$fecha  =  date('Y-m-d');
//echo $fecha;

#Contar Caracteres
//$cadena  =  "Luis Claudio";
//echo strlen($cadena);

#Eliminar los espacios en blanco derecha e Izquierda
#$cadena =  "      1234        ";
#echo strlen($cadena);
#echo "</br>";
#echo  strlen(trim($cadena));

#Extraer Elementos;
$fecha  =  "2017-10-29";

//echo substr($fecha,0,7);
echo substr($fecha, -5,2);


 ?>