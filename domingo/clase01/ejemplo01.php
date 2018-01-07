<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tablas</title>
</head>
<body>
	

<?php if (count(Usuario::lista())>0): ?>

<table>
<thead>

<tr>
<th>ID</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>DNI</th>
<th>FECHA DE CREACIÓN</th>
</tr>

</thead>

<tbody>
<?php foreach (Usuario::lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id']; ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['dni']; ?></td>
<td><?php echo $value['fecha_creacion']; ?></td>
</tr>
<?php endforeach ?>
</tbody>

</table>




<?php else: ?>
<p>No hay registros disponibles.</p>
<?php endif ?>







</body>
</html>