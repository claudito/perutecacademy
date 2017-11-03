<?php 

#Operadores Logicos y Aritmeticos 

#Login - Formulario
$user1    =  "luis";
$pass1    =  "123";

#Login - Validación
$user_bd  =  "luis";
$pass_bd  =  "1231";

if ( !isset($user)  AND !isset($pass) ) 
{
  echo "No puedes trabajar";
}
else
{
   echo "continua trabajando";
}


/*
if ( isset($user)  AND isset($pass) ) 
{
  echo "continua trabajando";
}
else
{
   echo "No puedes trabajar";
}
*/

/*
if ($user==$user_bd AND $pass==$pass_bd) 
{
  echo "exito";
} 
else 
{
 echo "error";
}*/








 ?>