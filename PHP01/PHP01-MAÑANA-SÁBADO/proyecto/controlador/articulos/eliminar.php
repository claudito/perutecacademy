<?php 

include'../../autoload.php';

$codigo    =  htmlentities(trim($_POST['codigo']),ENT_QUOTES,"UTF-8");

if (strlen($codigo)>0) 
{

$articulos = new Articulos();
$valor     = $articulos->eliminar($codigo);
echo $valor;
} 
else 
{
	 echo "algún dato esta vacio";
}







 ?>