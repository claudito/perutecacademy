<?php 
 
#Archivo de Configuración
include'config.php';

spl_autoload_register(function ($clase)
{    
	#Articulos
    include 'clases/'.$clase.'.php';
    

    
}
);
 ?>