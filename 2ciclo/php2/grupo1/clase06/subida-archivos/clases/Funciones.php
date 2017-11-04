<?php 

class Funciones 
{

function __construct()
{
# code...
}

function tipo_archivo($tipo)
{
	
switch ($tipo) {
case 'image/png':
return "ok";
	break;
case 'image/jpeg':
return "ok";
	break;

default:
return "error";
	break;
}

}



}






 ?>