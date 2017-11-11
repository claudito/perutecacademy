<?php 
include'../autoload.php'; 

$usuario  = new Usuario();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Bootstrap -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">


</head>
<body>

<?php include'../modal/agregar.php'; ?>

<div class="container-fluid">

	

<div class="row">
<div class="col-md-12">

<div class="pull-right">
<button class="btn btn-primary btn-sm" data-toggle="modal"  href="#modal-agregar" >
 <i class="glyphicon glyphicon-plus"></i> Agregar</button>
</div>


<?php if (count($usuario->lista())>0): ?>


<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Lista de Usuarios 
			<i class="glyphicon glyphicon-user"></i> </h3>
	</div>
	<div class="panel-body">
    <div class="table-responsive">
    <table id="consulta"  class="table">
<thead>
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Fecha Creación</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php 
foreach ($usuario->lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id'] ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['fecha_creacion']; ?></td>
<td>
<a href="editar.php?id=<?php  echo $value['id'] ?>" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
<a href="../controlador/eliminar.php?id=<?php  echo $value['id'] ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>


    </div>
	</div>
</div>






<script>
$(document).ready(function() {
    $('#consulta').DataTable();
} );
</script>

<?php else: ?>

<p>No hay datos disponibles</p>

<?php endif ?>
	

</div>
</div>

</div>

</body>
</html>