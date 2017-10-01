<?php 

include'../autoload.php';

$marca  = $_POST['marca'];
$modelo = $_POST['modelo'];
$color  = $_POST['color'];

$auto  =  new Auto($marca,$color,$modelo);

echo $auto->agregar();



 ?>