<?php 

spl_autoload_register(function ($clase){

  $ruta = 'clases/'.$clase.'.php';

  #echo $ruta;

  include($ruta);

  
});







 ?>