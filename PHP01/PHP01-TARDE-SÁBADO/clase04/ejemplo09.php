<?php 

#Funciones

#Función Date
#date_default_timezone_set('America/Lima');
#echo date('t');


#Funcion extraer elementos:
/*
$cadena  = "003-000000001";

echo substr($cadena,0,3);
echo "</br>";
echo substr($cadena,-9);*/

/*
$alumnos = array('Luis','Juan');

if (count($alumnos)>0) 
{
	foreach ($alumnos as $key => $value) {
	echo $value;
}
} 
else 
{
	echo "no hay registros para mostrar";
}
*/
/*
$numero  = 2344.890868;

echo round($numero,3);*/
/*
$cadena="murcielago";

echo str_replace("u", "zz", $cadena);
*/


$pass_bd  =  "202cb962ac59075b964b07152d234b70";
$pass_frm =  "123";

if ($pass_bd==md5($pass_frm)) 
{
  echo "ok";
} 
else
{
  echo "error";
}



 ?>