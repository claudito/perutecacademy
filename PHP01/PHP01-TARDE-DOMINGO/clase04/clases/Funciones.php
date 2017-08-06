<?php 

class Funciones
{

function __construct()
{

}

function mensaje($mensaje)
{
	return $mensaje;
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
    	return ($num2==0) ? "no existe división por cero" : $num1/$num2 ;
    		break;
    	
    	default:
    	 return "la operación no esta registrada";
    		break;
    }


}


}


 ?>