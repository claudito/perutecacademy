<?php 

$alumnos = array('Omar','Jorge','Pedro','Maria');

echo "Lista:"."</br>";
foreach ($alumnos as $key => $value) 
{
	echo $key.'-'.$value."</br>";
}

echo "Ubicando la posición:"."</br>";
echo  $alumnos[3];


 ?>