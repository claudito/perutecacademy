<?php 

include'clases/Producto.php';

echo "-----------------------------";
echo "</br>";
echo "Panaderia San Carlos";
echo "</br>";
echo "------------------------------";
echo "</br>";
echo "Codigo  Descripcion Precio Cant Total";
echo "</br>";
$p1  =  new Producto('001','Leche',3.7,1);
echo $p1->detalle();
echo "</br>";
$p2 =  new Producto('002','Carne',40,2);
echo $p2->detalle();

echo "</br>";
echo "total:";
echo $p1->total()+$p2->total();


 ?>