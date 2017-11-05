<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
</head>
<body>

<table>
<thead>
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Fecha Creación</th>
</tr>
</thead>
<tbody>
<?php 
$usuario =  new Usuario();
foreach ($usuario->lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id'] ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['fecha_creacion']; ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<br>

<select name="" id="">
<option value="">[Seleccionar]</option>
<?php foreach ($usuario->lista() as $key => $value): ?>
<option value=""><?php echo $value['nombres'] ?></option>
<?php endforeach ?>
</select>


</body>
</html>
