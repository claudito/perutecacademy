<?php 

#2016-09-10
#2016
#10
#30

$codigo  =  $_POST['codigo'];

$mes     =  $_POST['mes'];

echo $codigo;

echo "<br>";

foreach ($mes as $key => $value) {
	
       
     $valor  = $key+1;

     $mes    = str_pad($valor,2,'0',STR_PAD_LEFT);

     echo $mes.'-'.$value."</br>";

	//echo $value."</br>";
}



 ?>