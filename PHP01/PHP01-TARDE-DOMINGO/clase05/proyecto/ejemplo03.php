<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla</title>

<!-- Optimizar el sitio en dispositivos móviles -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Importar CSS de Bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- Importar Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Importar Funciones JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid"> <!-- Inicio Contenedor -->

<div class="row"> <!-- Inicio Fila -->

<div class="col-md-12"> <!-- Inicio Columna -->

<!-- En esta parte debe ir nuestro código -->

<h1>Lista de Artículos</h1><hr>

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
				<th>Fecha</th>
			</tr>
		</thead>
		<tbody>
		<?php 
         $articulos  =  new Articulos();
		foreach ($articulos->lista() as $key => $value): ?>
		<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['codigo']; ?></td>
		<td><?php echo $value['descripcion']; ?></td>
		<td><?php echo $value['unidad']; ?></td>
		<td><?php echo round($value['cantidad'],3); ?></td>
		<td><?php echo round($value['precio'],2); ?></td>
<td><?php echo date_format(date_create($value['fecha_creacion']),'d/m/Y h:i:s a'); ?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>





</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->


</body>
</html>