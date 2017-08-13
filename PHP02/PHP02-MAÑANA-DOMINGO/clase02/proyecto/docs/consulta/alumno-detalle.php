<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Detalle de Alumno</title>
</head>
<body>

<ul>
<?php 
$alumnos = new Alumnos();
foreach ($alumnos->consulta($_GET['id']) as $key => $value): ?>
<li>Código:<?php echo $value['id'] ?></li>
<li>Nombres:<?php echo $value['nombres'] ?></li>
<li>Apellidos:<?php echo $value['apellidos'] ?></li>
<li>Dni:<?php echo $value['dni'] ?></li>
<li>Usuario: <?php echo $value['user'] ?></li>
<?php endforeach ?>

</ul>



</body>
</html>