<?php 


include'../autoload.php';

$archivo   =  $_FILES['archivo'];

$funciones =  new Funciones();

if ($funciones->tipo_archivo($archivo['type'])=='ok') 
{
  

if ($archivo['size']<=MAX_FILE_SIZE)
{

$nombre  =  $_POST['nombre'];
$objeto  =  new Archivo();
$ruta    = $objeto->subir($archivo,'../files/'); 
$ruta    = ($ruta=='error') ? '' : $ruta ;
$registro = new Registro();
echo $registro->agregar($nombre,$ruta);


}
else 

{
   echo "archivo no permitido";
}
 


 

}
else 
{
  echo "archivo no permitido";
}







 ?>