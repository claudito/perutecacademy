<?php 	

class Producto
{

protected $codigo;
protected $descripcion;
protected $precio;
protected $cantidad;

function __construct($codigo,$descripcion,$precio,$cantidad)
{
  
  $this->codigo        =  $codigo;
  $this->descripcion   =  $descripcion;
  $this->precio        =  $precio;
  $this->cantidad      =  $cantidad;
    

}


function detalle()
{
   return $this->codigo.' '.$this->descripcion.' '.$this->precio.' '.$this->cantidad.' '.$this->precio*$this->cantidad;

}


function total()
{
	return $this->precio*$this->cantidad;
}


}





 ?>