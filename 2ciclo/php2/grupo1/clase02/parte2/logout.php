<?php 

include'config.php';
session_start();
include'session.php';

unset($_SESSION[KEY.'session_usuario']);
unset($_SESSION[KEY.'session_id']);

 echo "
   <script>
   alert('Adios');
   window.location='acceso.php';
   </script>";

 ?>