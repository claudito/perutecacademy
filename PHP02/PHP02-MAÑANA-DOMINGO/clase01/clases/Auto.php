<?php 

class  Auto
{

   protected $marca;
   protected $color;

   function __construct($marca,$color)
   {

   	  $this->marca  = $marca;
   	  $this->color  = $color;
      
   }
   
    function informacion()
    {
    	return $this->marca.'-'.$this->color;
    }



}



/*$auto   =  new Auto('Toyota','Rojo'); 
echo $auto->informacion();*/



 ?>