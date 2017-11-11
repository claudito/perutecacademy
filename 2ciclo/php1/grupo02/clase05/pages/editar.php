<?php 
include'../autoload.php';

$id  =  $_GET['id'];

$usuario  =  new Usuario();
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Bootstrap -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-12">

<h1>Actualizar Usuario</h1><hr>

<form action="../controlador/actualizar.php" method="POST">

<input type="hidden" name="id" value="<?php echo $id; ?>">

<div class="form-group">
<label>Nombres</label>
<input type="text" name="nombres" id="" class="form-control"   
 value="<?php echo $usuario->consulta($id,'nombres') ?>">
</div>

<div class="form-group">
<label>Apellidos</label>
<input type="text" name="apellidos" id="" class="form-control"  
 value="<?php echo $usuario->consulta($id,'apellidos') ?>">
</div>

<button class="btn btn-primary">Actualizar</button>


</form>


</div>


</div>
	
</div>

</body>
</html>