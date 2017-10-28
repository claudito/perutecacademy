<?php 

$word       =  (isset($_GET['word'])) ? $_GET['word'] : 0 ;
$excel      =  (isset($_GET['excel'])) ? $_GET['excel'] : 0 ;
$powerpoint =  (isset($_GET['powerpoint'])) ? $_GET['powerpoint'] : 0 ;

echo $word;
echo "</br>";
echo $excel;
echo "</br>";
echo $powerpoint;



 ?>