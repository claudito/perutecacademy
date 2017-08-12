<?php 

class Funciones
{

function __construct()
{

}

function operacion($num1,$num2,$tipo)
{ 
  
   switch ($tipo) {
   	case 'suma':
   	return $num1+$num2;
   		break;
   	case 'resta':
   	return $num1-$num2;
   		break;
   	case 'multiplicacion':
   	return $num1*$num2;
   		break;
   	case 'division':
   	$division = ($num2==0) ? "No se permite la división entre cero." : $num1/$num2 ;
   	return $division;
   		break;
   	
   	default:
   	return "No existe la operación";
   		break;
   }


}




}




 ?>
