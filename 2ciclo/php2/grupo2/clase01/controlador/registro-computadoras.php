<?php 

include'../autoload.php';

$marca   =  $_POST['marca'];
$modelo  =  $_POST['modelo'];
$costo   =  $_POST['costo'];

$lenovo  = new Computadora($marca,$modelo,$costo);
echo $lenovo->lista();

 ?>