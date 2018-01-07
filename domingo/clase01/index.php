<?php 

include'autoload.php';

echo count(Usuario::lista());
echo "<br>";

foreach (Usuario::lista() as $key => $value) {

echo $value['nombres'].' '.$value['apellidos']."<br>";

}




 ?>