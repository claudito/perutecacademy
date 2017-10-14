<?php 

/*
$my_date = new DateTime('2017-10-15');
#$my_date->modify('first day');
$my_date->modify('first day of this month');
echo  $my_date->format('Y-m-d');
echo "</br>";
$my_date->modify('last day of this month');
echo  $my_date->format('Y-m-d');
*/

date_default_timezone_set('America/Lima');
$fecha1 = new DateTime('1985-12-09');
$fecha2 = new DateTime(date('Y-m-d'));
$fecha = $fecha1->diff($fecha2);
//printf('%d años, %d meses, %d días, %d horas, %d minutos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i);
printf('%d', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i);



?>