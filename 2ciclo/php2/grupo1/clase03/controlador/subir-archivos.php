<?php 

$archivo  =   $_FILES['archivo'];

echo $name     =   $archivo['name'];
echo "</br>";
echo $ruta     =   $archivo['tmp_name'];
echo "</br>";
echo $destino  =   "../img/".$name;
echo "</br>";
echo "move_uploaded_file(filename, destination)";


if (move_uploaded_file($ruta,$destino))
{
 echo "archivo Subido";
} 
else
{
 echo "Error al Cargar el Archivo";
}





 ?>