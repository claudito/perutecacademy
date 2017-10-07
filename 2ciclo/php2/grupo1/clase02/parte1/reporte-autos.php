<?php 

include'clases/Auto.php';

$modelo  =  $_POST['modelo'];
$color   =  $_POST['color'];


$toyota  =  new Auto($modelo,$color);
echo $toyota->modelo();
echo $toyota->color();
/*
echo "</br>";


$nissan  =  new Auto('sentra','verde');
echo $nissan->modelo();
echo $nissan->color();
*/
 ?>