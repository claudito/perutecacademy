<?php 

include'../autoload.php';

$usuario  =  new Usuario();
$id       =  $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
</head>
<body>

<h1>Actualizar</h1>

<form action="../controlador/actualizar.php" method="POST" autocomplete="off">

<input type="hidden" name="id" value="<?php echo $id; ?>">	
	
<label>Nombres</label>
<input type="text" name="nombres" id="" required=""  value="<?php echo $usuario->consulta($id,'nombres'); ?>">
<br>

<label>Apellidos</label>
<input type="text" name="apellidos" id="" required=""  value="<?php echo $usuario->consulta($id,'apellidos'); ?>">
<br>

<label>Dni</label>
<input type="text" name="dni" id="" required="" value="<?php echo $usuario->consulta($id,'dni'); ?>">
<br>

<button>Actualizar</button>

</form>
</body>
</html>