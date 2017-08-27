<?php 

include'../../../autoload.php';
include'../../../session.php';

$alumnos  =  new Alumnos();

 ?>

 <?php if (count($alumnos->lista())>0): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		Lista de Alumnos
		<div class="pull-right">
		<a href="../docs/excel/alumnos.php" class="btn btn-success btn-xs" >excel</a>
		<a href="../docs/pdf/alumnos.php" target="_blank" class="btn btn-warning btn-xs" >pdf</a>
		</div>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
	<table id="consulta"  class="table table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>DNI</th>
				<th>Usuario</th>
			</tr>
		</thead>
		<tbody>
	    <?php 
	    foreach ($alumnos->lista() as $key => $value): ?>
	    <tr>
	    <td><a href="../docs/pdf/detalle.php?id=<?php echo $value['id'];  ?>"><?php echo $value['id'] ?></a></td>
	    <td><?php echo $value['nombres'] ?></td>
	    <td><?php echo $value['apellidos'] ?></td>
	    <td><?php echo $value['dni'] ?></td>
	    <td><?php echo $value['user'] ?></td>

	    </tr>
	    <?php endforeach ?>

		</tbody>
	</table>
	<script>
	$(document).ready(function(){
	$('#consulta').DataTable();
	});
	</script>
</div>
	</div>
</div>
 <?php else: ?>
 <p class="alert alert-warning">No Hay Registros.</p>	
 <?php endif ?>