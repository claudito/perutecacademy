<?php 

$var01;
$var02;

$var01=13;
$var02=18;

/*
if ($var01==$var02) 
{
  echo "las variables son iguales";
} 
else
{
  echo "Los variables no son iguales";
}

if ($var01!==$var02) 
{
  echo "las variables no son iguales";
} 
else
{
  echo "Los variables son iguales";
}


if ($var01===$var02) 
{
  echo "Son el mismo tipo de dato";
} 
else
{
  echo "No son el mismo tipo de dato";
}
*/

if ($var01>$var02) 
{
	echo "Var01 es mayor a Var02";
} 
else if($var01==$var02)
{
     echo "las variables son iguales";
}
else  if ($var01<$var02)
{
	echo "Var02 es mayor a Var01";
}
else
{
	echo "error";
}


 ?>