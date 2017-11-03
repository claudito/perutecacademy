<?php 

#Declaración de Variables y asignación de valores
//$num1    =  100;
//$num2    =  0;
//$mensaje =  "No hay división entre cero";
$num1     = 0;
$num2     = 0;
$mensaje  =  "";
$num1     =  100;
$num2     =  0;
$mensaje  = "No hay división entre cero";


$suma             = $num1+$num2;
$resta            = $num1-$num2;
$multiplicacion   = $num1*$num2;
//$division       = $num1/$num2;
$division         = ($num2==0) ? $mensaje : $num1/$num2 ;

echo $suma;
echo "</br>";
echo $resta;
echo "</br>";
echo $multiplicacion;
echo "</br>";
echo $division;








 ?>