<?php 

include'../../autoload.php';

$articulos  =  new Articulos();

?>

<?php if (count($articulos->listar())>0): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Lista de Artículos</h3>
	</div>
	<div class="panel-body">
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
   		foreach ($articulos->listar() as $key => $value): ?>
		<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['codigo']; ?></td>
		<td><?php echo $value['descripcion']; ?></td>
		<td><?php echo $value['unidad']; ?></td>
		<td><?php echo $value['cantidad']; ?></td>
		<td><?php echo $value['precio']; ?></td>
		<td>
<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-eliminar" data-codigo="<?php echo $value['codigo']; ?>"><i class="glyphicon glyphicon-trash"></i></button>
		
		</td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>
	</div>
</div>
<?php else: ?>
<p class="alert alert-warning">No hay Información Disponible.</p>
<?php endif ?>