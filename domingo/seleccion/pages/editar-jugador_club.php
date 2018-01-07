<?php include'../autoload.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Jugador Club</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
	
<div class="row">
<div class="col-md-12">
<?php include'../nav.php'; ?>
</div>
</div>



<h1>Actualizar Jugador CLub</h1>

<form action="../controlador/jugador_club/actualizar.php" method="POST" autocomplete="off" class="form-inline">

<input type="hidden" name="id"  
 value="<?php echo Jugador_club::consulta($_GET['id'],'id') ?>">


<label>Jugador</label>
<input type="text" name="jugador" id="" class="form-control" readonly=""
 value="<?php echo Jugador_club::consulta($_GET['id'],'jugador') ?>">

<label>Club</label>
<select name="club" id="" class="form-control">
<option value="<?php echo Jugador_club::consulta($_GET['id'],'id_club') ?>"><?php echo Jugador_club::consulta($_GET['id'],'club') ?></option>


<?php foreach (Club::lista() as $key => $value): ?>

<?php if ($value['id']!==Jugador_club::consulta($_GET['id'],'id_club')): ?>
<option value="<?php echo $value['id'] ?>"><?php echo $value['nombre'] ?></option>
<?php endif ?>


	
<?php endforeach ?>



</select>
	
<button class="btn btn-success">Actualizar</button>

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