<?php 
include'../autoload.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Artículos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
	
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Panel title</h3>
	</div>
	<div class="panel-body">
	 <div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Descripción</th>
				<th>Unidad</th>
				<th>Cantidad</th>
				<th>Precio</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$articulos  = new Articulos();
		foreach ($articulos->listar() as $key => $value): ?>
        <tr>
        <td><?php echo $value['codigo']; ?></td>
        <td><?php echo $value['descripcion']; ?></td>
        <td><?php echo $value['unidad']; ?></td>
        <td><?php echo $value['cantidad']; ?></td>
        <td><?php echo $value['precio']; ?></td>
        </tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>

	</div>
</div>


</div>
</div>


<div class="row">
<div class="col-md-12">
<select name="" id="" class="form-control">
<option value="">Seleccionar</option>
<?php 
$articulos  = new Articulos();
foreach ($articulos->listar() as $key => $value): ?>
<option value=""><?php echo $value['descripcion']; ?></option>
<?php endforeach ?>
</select>
</div>
</div>



</div>
</body>
</html>