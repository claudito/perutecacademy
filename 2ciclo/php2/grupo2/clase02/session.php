<?php 
session_start();
if (!isset($_SESSION[KEY.ID])) 
{
   echo "<script>
    alert('No ha iniciado Sesión');
    window.location='".URL."'; 
   </script>";
} 


 ?>