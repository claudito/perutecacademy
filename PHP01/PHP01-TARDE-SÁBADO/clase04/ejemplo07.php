<?php /*
$nombres   = array('Luis','Juan','Pedro');
for ($i=0; $i < count($nombres) ; $i++) 
{ 
	echo $nombres[$i];
}


$i=0;
$nombres   = array('Luis','Juan','Pedro');
while ($i < count($nombres)) 
{
	 echo $nombres[$i];
	 $i++;
}
*/






$nombres   = array('Luis','Juan','Pedro');
$apellidos = array('Cáceres','Zea','Rodriguez');

foreach ($nombres as $posicion => $valor_nombres) 
{   
	$valor_apellidos = $apellidos[$posicion];
	# $apellidos[0];
	# $apellidos[1];
	# $apellidos[2];

    echo $valor_nombres.$posicion.'-'.$valor_apellidos."</br>";	
}





 ?>

