<?php 


 $alumnos = array('Juan','Pedro','Pablo');

 # 1 Forma de Imprimir Valores
 echo $alumnos[0];
 echo "</br>";
 echo $alumnos[1];
 echo "</br>";
 echo $alumnos[2];

 #2 Forma de Imprimir Valores
 echo "</br>";

 foreach ($alumnos as $posicion => $valor) {
 	
 	 echo $posicion."-".$valor."</br>";
 }





 ?>