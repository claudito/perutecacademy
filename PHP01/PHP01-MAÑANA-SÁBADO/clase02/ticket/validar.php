<?php 

#1. declaramos las variables
$nombres;
$categoria;

/*
$_POST['']
$_GET['']
$_REQUEST['']
*/

#2. asignamos valores
$nombres   = $_POST['nombres'];
$categoria = $_POST['categoria'];

#3. impresión de la información
echo $nombres;
echo "</br>";
echo $categoria;

 ?>