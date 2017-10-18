<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
<h1>Bienvenido <?php echo $_SESSION[KEY.NOMBRES]; ?></h1>

<a href="reporte.php">Reporte Excel</a>

<a href="perfil.php">Mi perfil</a>

<a href="logout.php">Cerrar Sessión</a>
</body>
</html>