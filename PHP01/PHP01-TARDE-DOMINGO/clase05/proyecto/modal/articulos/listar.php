<?php 

include'../../autoload.php';
$articulos  =  new Articulos();
 
 ?>

<?php if (count($articulos->lista())>0): ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Lista de Artículos</h3>
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
			<?php foreach ($articulos->lista() as $key => $value): ?>
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

<?php else: ?>
<p class="alert alert-warning">No Hay Datos Disponibles</p>
<?php endif ?>
