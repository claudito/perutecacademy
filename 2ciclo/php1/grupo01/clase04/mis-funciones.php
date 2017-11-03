<?php 

function operacion($num1,$num2,$operacion)
{
   $suma  = $num1+$num2;
   return  $suma;
}

$resultado = operacion(200,45,'suma');

echo $resultado*100;

 ?>