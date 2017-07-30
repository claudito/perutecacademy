<?php 

include '../autoload.php';

$alumnos = new Alumnos();

if (count($alumnos->lista())>0)
{
  
foreach ($alumnos->lista() as $key => $value) 
{
	echo $value['id'].'-'.$value['nombres']."</br>";
}


} 
else 
{
  echo "La tabla alumnos esta vacía";
}


 ?>