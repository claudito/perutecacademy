<?php 

class  Auto
{

protected $marca;
protected $modelo;

function __construct($marca='',$modelo='')
{

$this->marca  = $marca;
$this->modelo = $modelo;

}

function detalle()
{
	return $this->marca.' '.$this->modelo;
}




}








 ?>