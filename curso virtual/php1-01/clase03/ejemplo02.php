<?php 

include'autoload.php';

$usuario =  new Usuario();

$dni_1  =   "12345678";
$dni_2  =   "123456701";

foreach ($usuario->lista() as $key => $value) 
{
    if ($value['dni']==$dni_1) {
     echo $value['nombres']."</br>";
    }

}

echo "</br>";

if (count($usuario->lista_parametro($dni_2))>0) 
{

foreach ($usuario->lista_parametro($dni_2) as $key => $value) {
	
	echo $value['nombres']."</br>";
}


}
else 
{
   echo "EL Dni no existe";
}




 ?>