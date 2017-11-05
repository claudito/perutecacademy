<?php 

 include'config.php';

 #$usuarios  =  new Usuario();
spl_autoload_register(function ($clase){

  $ruta  =  'clases/'.$clase.'.php';
  include($ruta);

});





 ?>