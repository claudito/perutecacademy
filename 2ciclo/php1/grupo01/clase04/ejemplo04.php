<?php 

//$alumnos  =  array('Luis','Pedro','Juan');
$alumnos    = array('201701' =>'Luis' ,'201702'=>'Pedro','201703'=>'Juan');

echo $alumnos['201701']; #Posición especifica

echo "</br>";

foreach ($alumnos as $key => $value) {
	
	echo $key.'-'.$value."</br>";
}


 ?>