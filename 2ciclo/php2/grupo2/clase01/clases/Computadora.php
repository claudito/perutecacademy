<?php 

class Computadora
{

protected  $marca;
protected  $modelo;
protected  $costo;

function __construct($marca='',$modelo='',$costo='')
{
	$this->marca  = $marca;
    $this->modelo = $modelo;
    $this->costo  = $costo;
}



function lista()
{
  return  $this->marca.'-'.$this->modelo.'-'.$this->costo;
}

function hora()
{ 
  date_default_timezone_set('America/Lima');
  return  date('H:i');
}


}


 ?>