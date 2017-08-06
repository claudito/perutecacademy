<?php 

$alumnos = array('Luis',26);

if (count($alumnos)>0) 
{
	foreach ($alumnos as $key => $value) {
		
		echo $value."</br>";
	}

} 
else 
{
	echo "No hay valores disponibles.";
}





 ?>