<?php 

class Funciones
{

function __construct()
{

}


function  tipo_archivo($tipo)
{

  switch ($tipo) {
  	case 'application/pdf':
  	return "ok";
  		break;
  	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
  	return "ok";
  		break;
  	default:
  	return "error";
  		break;
  }


}



}





 ?>