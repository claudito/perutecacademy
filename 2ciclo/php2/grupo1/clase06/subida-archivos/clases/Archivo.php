<?php 

class Archivo
{	

function __construct()
{
# code...
}


function subir($archivo,$ruta)
{

$archivo  =  $archivo;
$fecha    =  date('d-m-Y-H-i-s');

$filename =  $archivo['tmp_name'];

$destino  =   $ruta.$fecha.$archivo['name'];

if (move_uploaded_file($filename,$destino)) 
{
   return $fecha.$archivo['name'];
}
else
{
   return "error";
}



}


}


 ?>