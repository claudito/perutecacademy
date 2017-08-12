<?php 


 $conexion =  array('SERVIDOR' =>'localhost','USER' =>'root','PASS' => '123','BD'=>'BD_ALUMNOS');

 # 1 Forma de Imprimir Valores
 echo $conexion['SERVIDOR'];
 echo "</br>";
 echo $conexion['USER'];
 echo "</br>";
 echo $conexion['PASS'];

 #2 Forma de Imprimir Valores
 echo "</br>";

 foreach ($conexion as $posicion => $valor) {
 	
 	 echo $posicion."-".$valor."</br>";
 }





 ?>