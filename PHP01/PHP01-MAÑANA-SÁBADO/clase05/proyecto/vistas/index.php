<?php 

include'../autoload.php';
$articulos =  new Articulos();
foreach ($articulos->listar() as $key => $value) {
	
	echo $value['descripcion'];
}


 ?>