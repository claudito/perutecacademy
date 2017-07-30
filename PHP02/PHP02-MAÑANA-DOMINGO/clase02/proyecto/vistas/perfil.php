<?php 
include'../autoload.php';
session_start();
if (!isset($_SESSION['id'])) 
{
   echo "<script>
   alert('Inicie Sesión');
   window.location='".URL."';
   </script>";
}


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi Perfil</title>
</head>
<body>
	
<ul>
<li>Nombres: <?php echo $_SESSION['nombres']; ?></li>
<li>Apellidos: <?php echo $_SESSION['apellidos']; ?></li>
</ul>


</body>
</html>