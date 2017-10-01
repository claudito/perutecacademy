<?php 
class  Auto
{

protected $marca;
protected $color;
protected $modelo;

function __construct($marca='',$color='',$modelo='')
{
 
 $this->marca   =  $marca;
 $this->color   =  $color;
 $this->modelo  =  $modelo;

	
}



function agregar()
{

  return "Auto Registrado: ".$this->marca.'-'.$this->modelo.'-'.$this->color.'-'.$this->kilometraje(4000);

}





function mensaje()
{
  
  echo "Soy una función de la clase Auto";

}


function kilometraje($valor)
{
   return  $valor;
}



}

 ?>