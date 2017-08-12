<?php 

#Array o Arreglos

/*
-> Referencia de objetos
=> asignación en un array o contenedor de objetos


*/


$alumnos = array('Juan','Pedro','Maria','Estela');
$cursos  = array(123=>'PHP',true=>'MYSQL','003'=>'Linux');

echo $alumnos[3];
echo "</br>";
echo  $cursos[1];
echo "</br>";

foreach ($alumnos as $posicion => $valor) 
{
	echo $posicion.'-'.$valor."</br>";
}

echo "</br>";

foreach ($cursos as $posicion => $valor) 
{
	echo $posicion.'-'.$valor."</br>";
}


 ?>