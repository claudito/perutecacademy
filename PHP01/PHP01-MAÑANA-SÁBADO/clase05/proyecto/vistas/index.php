<?php 
include'../autoload.php';
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Articulos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<a href="agregar.php" class="btn btn-primary"><i class="fa fa-plus fa-1x"></i> Agregar</a>
</div>
</div>


<div class="row">
<div class="col-md-12">

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Código</th>
				<th>Descripción</th>
				<th>Unidad</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		<?php 
        $articulos  =  new Articulos();
		foreach ($articulos->listar() as $key => $value): ?>
		<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['codigo']; ?></td>
		<td><?php echo $value['descripcion']; ?></td>
		<td><?php echo $value['unidad']; ?></td>
		<td><?php echo $value['cantidad']; ?></td>
		<td><?php echo $value['precio']; ?></td>
		<td>
		<a href="actualizar.php?codigo=<?php echo $value['codigo'];?>"><i class="glyphicon glyphicon-edit"></i></a>

		<a href="../controlador/eliminar.php?codigo=<?php echo $value['codigo'];  ?>"><i class="glyphicon glyphicon-trash text-danger"></i></a>
		
		</td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
</body>
</html>