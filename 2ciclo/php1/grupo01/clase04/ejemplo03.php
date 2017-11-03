<?php 

#Constantes

#Datos de Conexión a  un Servidor de Base de Datos

define("SERVER", "localhost");
define("USER", "root");
define("PASS", "123");
define("BD", "bd_matricula");

//const SERVER = "localhost";

//echo SERVER;
//echo "</br>";
//echo USER;

define("CONEXION", 
array(
'SERVER'=>'localhost',
'USER'=>'root',
'PASS'=>'123',
'BD'=>'bd_matricula'
)
);

//echo CONEXION['SERVER'];

foreach (CONEXION as $key => $value) {
	
	echo $value."</br>";
}


 ?>