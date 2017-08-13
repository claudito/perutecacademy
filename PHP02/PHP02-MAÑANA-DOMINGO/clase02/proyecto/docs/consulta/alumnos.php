<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Alumnos</title>
<link rel="stylesheet" href="../consulta/css/estilos.css">
</head>
<body>

<h1>Lista de Alumnos</h1> <img src="../consulta/img/usuario.png" alt="" width="100">


	<table>
		<thead>
			<tr>
				<th class="center">Código</th>
				<th class="left">Nombres</th>
				<th class="left">Apellidos</th>
				<th class="left">DNI</th>
			</tr>
		</thead>
		<tbody>
		<?php 
        $alumnos  =  new Alumnos();
		foreach ($alumnos->lista() as $key => $value): ?>
		<tr>
		<td class="center"><?php echo $value['id'] ?></td>
		<td class="left"><?php echo $value['nombres'] ?></td>
		<td class="left"><?php echo $value['apellidos'] ?></td>
		<td class="left"><?php echo $value['dni'] ?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>






</body>
</html>