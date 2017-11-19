<?php 

/* Call this file 'hello-world.php' */
require '../libreria/autoload.php';
include'../autoload_project.php';
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
#Ruta de Impresora Compartida
$connector = new FilePrintConnector("\\\\192.168.1.9\\BIXOLON");
$printer = new Printer($connector);
$printer -> text("========================================\n");
$printer -> text("Prueba de Impresión\n");
$printer -> text("========================================\n");

$alumno  = new Alumno();


foreach ($alumno->lista() as $key => $value) {
	
	$nombres   =  $value['nombres'];
	$apellidos =  $value['apellidos'];
	$dni       =  $value['dni'];

	$nombres   =  str_pad($nombres,15,' ',STR_PAD_BOTH);
	$apellidos =  str_pad($apellidos,15,' ',STR_PAD_BOTH); 
	$dni       =  str_pad($dni,8,' ',STR_PAD_BOTH); 

	$printer->text("$nombres $apellidos $dni\n");
}

$printer -> cut();
$printer -> close();


 ?>