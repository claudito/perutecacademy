<?php 

include'../autoload.php';

$codigo     =  $_POST['codigo'];
$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];

echo $codigo.$nombres.$apellidos;

 ?>