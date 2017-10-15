<?php 
include'autoload.php';
include'session.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi Perfil</title>
</head>
<body>
	
<h1><?php echo $_SESSION[KEY.NOMBRES]; ?></h1>

</body>
</html>