<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Bootstrap -->
<!-- Css -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Js -->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!-- DataTables -->
<!-- Css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<!-- Js -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

</head>
<body>
<?php 
include'../modal/usuario/agregar.php';

 ?>



<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="pull-right">
<button class="btn btn-primary"  data-toggle="modal" 
  href="#modal-agregar">Agregar</button>
</div>


<?php 
$usuario = new Usuario();
if (count($usuario->lista())>0): ?>

<div class="panel panel-default">

<div class="panel-heading">
<h3 class="panel-title">Lista de Usuarios</h3>
</div>

<div class="panel-body">
<div class="table-responsive">
<table id="consulta"  class="table">
<thead>
<tr>
<th>Código</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Fecha de Creación</th>
</tr>
</thead>
<tbody>
<?php foreach ($usuario->lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id']; ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['fecha_creacion']; ?></td>
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
<p class="alert alert-warning">No existe información.</p>
<?php endif ?>







</div>

</div>
</div>
	
</body>
</html>