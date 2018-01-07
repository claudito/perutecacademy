<?php include'../autoload.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Club</title>

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



<h1>Actualizar Club</h1>

<form action="../controlador/club/actualizar.php" method="POST" autocomplete="off" class="form-inline">

<input type="hidden" name="id"  
 value="<?php echo Club::consulta($_GET['id'],'id') ?>">


<label>Nombre</label>
<input type="text" name="nombre" id=""  required="" 
 class="form-control" 
  value="<?php echo Club::consulta($_GET['id'],'nombre') ?>">

<label>País</label>
<input type="text" name="pais" id="" required="" class="form-control"
 value="<?php echo Club::consulta($_GET['id'],'pais') ?>">
	
<button class="btn btn-success">Actualizar</button>

</form>

<br>


<?php if (count(Club::lista())>0): ?>

<table class="table">
<thead>

<tr>
<th>IT</th>
<th>NOMBRE</th>
<th>PAÍS</th>
<th>ACCIONES</th>
</tr>

</thead>

<tbody>
<?php 
$item  = 1;
foreach (Club::lista() as $key => $value): ?>
<tr>
<td><?php echo $item++; ?></td>
<td><?php echo $value['nombre']; ?></td>
<td><?php echo $value['pais']; ?></td>
<td>

<a href="editar-club.php?id=<?php echo $value['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>	

<a href="../controlador/club/eliminar.php?id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick="return confirm('¿Desea eliminar el usuario seleccionado?');"><i class="glyphicon glyphicon-trash"></i></a>

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