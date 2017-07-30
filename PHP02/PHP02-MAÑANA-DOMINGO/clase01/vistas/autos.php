<?php 

include '../autoload.php';

$auto  =  new Auto('Toyota','Rojo');
$avion =  new Avion('Jumbo Jet','Marfil');
echo $auto->informacion();
echo "</br>";
echo $avion->informacion();



 ?>