<?php 

#Constantes

define("SERVIDOR", "localhost"); #Primera Forma
const USUARIO = "root";          #Segunda Forma

echo SERVIDOR;
echo "</br>";
echo USUARIO;

#Array

//define("CONEXION",array('SERVIDOR' => 'localhost','USER'=>'root'));
const CONEXION = array('SERVIDOR' => 'localhost','USER'=>'root');
echo "</br>";
echo CONEXION['SERVIDOR'];





 ?>