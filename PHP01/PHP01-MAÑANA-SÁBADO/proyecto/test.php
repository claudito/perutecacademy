<?php 
include'autoload.php';


$articulos  =  new Articulos();


foreach ($articulos->listar() as $key_art => $value_art) {
	
	  
	  if ($value_art['codigo']==12) 
	  {
	  	 echo $value_art['codigo']."identificado"."</br>";
	  } 
	  else 
	  {
	  	echo $value_art['codigo']."</br>";
	  }
	  


}



 ?>

