<?php 

#1
/*
define("SERVER", "localhost");
define("USER", "root");
define("PASS", "123");
define("BD", "test");*/


#2
//define("SERVER", "localhost");
//const SERVER = "localhost";
//const USER   =  "root";

//echo SERVER;

//var_dump(SERVER);

define("CONEXION", array('SERVER'=>'localhost','USER'=>'root','PASS'=>'123','BD'=>'test'));

echo CONEXION['SERVER'];


 ?>