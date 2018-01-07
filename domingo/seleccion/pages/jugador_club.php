<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Jugador Club</title>

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
	
<h1>Asociar Jugador y Club</h1>

<form action="../controlador/jugador_club/agregar.php" method="POST" autocomplete="off" class="form-inline">

<label>Jugador</label>
<select name="jugador" id="" class="form-control" required="">
<option value="">[Seleccionar]</option>
<?php foreach (Jugador::lista() as $key => $value): ?>
<option value="<?php echo $value['id'] ?>"><?php echo $value['nombres'].' '.$value['apellidos']  ?></option>	
<?php endforeach ?>

</select>

<label>Club</label>
<select name="club" id="" class="form-control" required="">
<option value="">[Seleccionar]</option>
<?php foreach (Club::lista() as $key => $value): ?>
<option value="<?php echo $value['id'] ?>"><?php echo $value['nombre'] ?></option>	
<?php endforeach ?>

</select>

	
<button class="btn btn-primary">Registrar</button>

</form>

<br>


<?php if (count(Jugador_club::lista())>0): ?>

<table class="table">
<thead>

<tr>
<th>IT</th>
<th>JUGADOR</th>
<th>CLUB</th>
<th>ACCIONES</th>
</tr>

</thead>

<tbody>
<?php 
$item  = 1;
foreach (Jugador_club::lista() as $key => $value): ?>
<tr>
<td><?php echo $item++; ?></td>
<td><?php echo $value['jugador']; ?></td>
<td><?php echo $value['club']; ?></td>
<td>

<a href="editar-jugador_club.php?id=<?php echo $value['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>	

<a href="../controlador/jugador_club/eliminar.php?id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick="return confirm('¿Desea eliminar el usuario seleccionado?');"><i class="glyphicon glyphicon-trash"></i></a>

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