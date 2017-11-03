<?php 

#Tipo1
//$conexion = array('localhost','root','123','test');
//var_dump($conexion);

#1
//echo $conexion[0];

#2
/*
foreach ($conexion as $key => $value) {
	
    echo $key.'-'.$value."<br>";

}
*/

#Tipo2
/*
$conexion =  array('SERVER'=>'localhost','USER'=>'root');

//echo $conexion['SERVER'];

foreach ($conexion as $key => $value) {
	
    echo $key.'-'.$value."<br>";

}
*/

$codigos   =  array('1','2','3','4');
$apellidos =  array('PEREZ','TORRES','CAMPOS','ZEA');
$dni       =  array('12345678','0000000','1111111','44444444');

foreach ($codigos as $key => $value) {
	
   $value_apellidos = $apellidos[$key];
   $value_dni       = $dni[$key];

	echo $value.'-'.$value_apellidos.'-'.$value_dni."<br>";

    //$alumno = new Alumno();
    //$alumno->actualizar($value,$value_apellidos,$value_dni);

}



 ?>