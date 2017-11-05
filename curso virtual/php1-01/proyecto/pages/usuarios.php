<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
</head>
<body>

<table border="1">
<thead>
<tr>
<th>Código</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Dni</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php 
$usuario =  new Usuario();
foreach ($usuario->lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id']; ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['dni']; ?></td>
<td>
<a href="editar.php?id=<?php echo $value['id']; ?>">Actualizar</a>
<a href="">Eliminar</a>
</td>
</tr>	
<?php endforeach ?>
</tbody>
</table>


	
</body>
</html>