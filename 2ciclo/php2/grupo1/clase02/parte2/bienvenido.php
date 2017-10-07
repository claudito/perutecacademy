<?php 
include'config.php';
session_start();
include'session.php';

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
</head>
<body>
	
<h1>Bienvenido <?php echo $_SESSION[KEY.'session_usuario']; ?></h1>

<a href="logout.php">Cerrar Sesión</a>

</body>
</html>