<?php 

#Tipos de Datos

#Declarar las variables
$nombres; #String
$edad;    #Númerico
$peso;    #Decimal
$estado;  #Booleano

#Asignar Valores

$nombres = "Luis Augusto";
$edad    =  27;
$peso    =  65.89;
$estado  =  true;

#Imprimir

echo $nombres;
echo "</br>";
echo $edad;
echo "</br>";
echo $peso;
echo "</br>";
#($estado==true) igual ($estado)
$estado = ($estado) ? "True" : "False" ; 
echo $estado;

 ?>