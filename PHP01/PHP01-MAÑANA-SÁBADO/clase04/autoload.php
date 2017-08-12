<?php 
 
spl_autoload_register(function ($clase)
{
    include 'clases/'.$clase.'.php';
    #include'clases/Alumnos.php';
    
}
);


 ?>