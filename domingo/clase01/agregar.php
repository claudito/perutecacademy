<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
	



<h1>Registrar Usuario</h1>

<form action="controlador/agregar.php" method="POST" autocomplete="off" class="form-inline">

<label>Nombres</label>
<input type="text" name="nombres" id=""  required="" 
 class="form-control">

<label>Apellidos</label>
<input type="text" name="apellidos" id="" required="" class="form-control">

<label>Dni</label>
<input type="text" name="dni" id="" required=""  maxlength="8" class="form-control">
	
<button class="btn btn-primary">Registrar</button>

</form>

<br>


<?php if (count(Usuario::lista())>0): ?>

<table class="table">
<thead>

<tr>
<th>IT</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>DNI</th>
<th>FECHA DE CREACIÓN</th>
<th>ACCIONES</th>
</tr>

</thead>

<tbody>
<?php 
$item  = 1;
foreach (Usuario::lista() as $key => $value): ?>
<tr>
<td><?php echo $item++; ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['dni']; ?></td>
<td><?php echo $value['fecha_creacion']; ?></td>
<td>

<a href="editar.php?id=<?php echo $value['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>	

<a href="controlador/eliminar.php?id=<?php echo $value['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>


</td>

</tr>
<?php endforeach ?>
</tbody>

</table>




<?php else: ?>
<p>No hay registros disponibles.</p>
<?php endif ?>






</div>
</div>	
</div>
	
</body>
</html>