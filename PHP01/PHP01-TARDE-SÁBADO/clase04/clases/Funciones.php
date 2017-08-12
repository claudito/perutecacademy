<?php 

class Funciones
{

function __construct()
{

}

function operaciones($num1,$num2,$tipo)
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
	 	$division = ($num2==0) ? "No existe la división por cero" : $num1/$num2 ;
	 	return $division;
	 		break;
	 	
	 	default:
	 	return "no exise la operación";
	 		break;
	 }



}


}





 ?>