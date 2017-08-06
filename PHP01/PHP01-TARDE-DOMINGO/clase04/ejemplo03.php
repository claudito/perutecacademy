<?php 

#Creación de una variable
$url;

#Las constantes de TIPO ARRAY solo funcionan para PHP 7

#Creación de una Constante
#1 Forma
define("URL", "www.google.com");
#2 Forma
#const IGV = "18%";

#echo IGV;

define("DATOS", array('SERVER'=>'localhost','USER'=>'root','PASS'=>'123','BD'=>'bd'));

echo DATOS['USER'];


 ?>