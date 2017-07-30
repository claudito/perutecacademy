<?php 

session_start();
#Formas para eliminar variables de sesión:
#1 
#session_destroy();

#2 
#unset($_SESSION['codigo']);
unset($_SESSION['nombres']);


 ?>