<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
</head>
<body>
	
<h1>Hola: <?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?></h1>


<a href="vistas/perfil.php">Mi Perfil</a>
<a href="controlador/logout.php">Cerrar Sesión</a>

</body>
</html>