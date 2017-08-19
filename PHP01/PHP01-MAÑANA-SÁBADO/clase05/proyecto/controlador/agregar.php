<?php 

 include'../autoload.php';

 $codigo       =  $_POST['codigo'];
 $descripcion  =  $_POST['descripcion'];
 $unidad       =  $_POST['unidad'];
 $cantidad     =  $_POST['cantidad'];
 $precio       =  $_POST['precio'];

 $articulos  =  new Articulos();
 $valor  = $articulos->agregar($codigo,$descripcion,$unidad,$cantidad,$precio);

 echo $valor;





 ?>