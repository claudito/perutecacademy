<?php 

#Sentencias control simple y MUltiple
/*
*if
*ifelse
while
do while
for
*foreach
*switch
*/

$mes = '03';
/*
if ($mes=='01') 
{
	echo "Enero";
}
else if ($mes=='02')
{
    echo "Febrero";
}
else
{
	echo "no existe";
}*/

switch ($mes) {
	case '01':
	echo "Enero";
		break;
	case '02':
	echo "Febrero";
		break;
	case '03':
	echo "Marzo";
		break;
	case '04':
	echo "Abril";
		break;
	case '05':
	echo "Mayo";
		break;
	default:
	echo "Error";
		break;
}








 ?>