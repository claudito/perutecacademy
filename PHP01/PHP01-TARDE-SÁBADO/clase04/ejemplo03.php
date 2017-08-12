<?php 

#Constantes
/*
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("PASS", "123");
#define("BD", "bd_clases");
const BD = "bd_clases";


echo SERVIDOR;
echo "</br>";
echo USUARIO;
echo "</br>";
echo PASS;
echo "</br>";
echo BD;*/

define("CONEXION", array("SERVIDOR"=>'192.168.1.15',"USER"=>'root'));

echo CONEXION['USER'];



 ?>