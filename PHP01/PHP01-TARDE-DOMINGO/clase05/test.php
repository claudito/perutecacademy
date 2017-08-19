

<?php 

#Una fila
$result  = $statement->fetch();
return $result[$campo];

#Más de una fila
$result  = $statement->fetchAll();
return $result;



 ?>


 