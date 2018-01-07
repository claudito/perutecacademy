<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Jugador</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<?php include'../nav.php'; ?>
</div>
</div>


<div class="row">
<div class="col-md-12">
	
<h1>Registrar Jugador</h1>

<form action="../controlador/jugador/agregar.php" method="POST" autocomplete="off" class="form-inline">

<label>Nombres</label>
<input type="text" name="nombres" id=""  required="" 
 class="form-control">

<label>Apellidos</label>
<input type="text" name="apellidos" id="" required="" class="form-control">

<label>Posición</label>
<input type="text" name="posicion" id="" required=""  maxlength="100" class="form-control">
	
<button class="btn btn-primary">Registrar</button>

</form>

<br>


<?php if (count(Jugador::lista())>0): ?>

<table class="table">
<thead>

<tr>
<th>IT</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>POSICIÓN</th>
<th>ACCIONES</th>
</tr>

</thead>

<tbody>
<?php 
$item  = 1;
foreach (Jugador::lista() as $key => $value): ?>
<tr>
<td><?php echo $item++; ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['posicion']; ?></td>
<td>

<a href="editar-jugador.php?id=<?php echo $value['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>	

<a href="../controlador/jugador/eliminar.php?id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick="return confirm('¿Desea eliminar el usuario seleccionado?');"><i class="glyphicon glyphicon-trash"></i></a>

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