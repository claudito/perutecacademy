<?php 



#Operador Ternario
/*
=   Asignación
==  Igualdad
=== Igualdad y el mismo tipo de Dato

*/
$num1 =   100;
$num2 =  '100';

if ($num1==$num2) 
{
  $mensaje =  "Son iguales";
} 
else 
{
  $mensaje = "No son iguales";
}


echo $mensaje

/*
$estado  =  1;

$estado  = ($estado==1) ? 'ACTIVO' : 'INACTIVO' ;

echo $estado;

echo "</br>";

$estado  = ($estado=='ACTIVO') ? 1 : 0 ;

echo $estado;
*/

 ?>