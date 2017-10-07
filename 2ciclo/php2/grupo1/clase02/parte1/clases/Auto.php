<?php 

class Auto
{

protected $modelo;
protected $color;

function __construct($modelo_c,$color_c)
{

	$this->modelo = $modelo_c;
	$this->color  = $color_c;

}

function modelo()
{
	return $this->modelo;
}


function color()
{
	return $this->color;
}




}


 ?>