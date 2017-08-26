<?php 
include'../autoload.php';

$codigo    =  $_GET['codigo'];
$articulos = new Articulos();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<h1>Actualizar Artículo</h1><hr>

<form action="../controlador/actualizar.php"  method="POST" autocomplete="off">

<div class="form-group">
<label>Código</label>
<input type="text" name="codigo" id="" class="form-control"  
 value="<?php echo $articulos->consulta($codigo,'codigo'); ?>" readonly>
</div>

<div class="form-group">
<label>Descripción</label>
<input type="text" name="descripcion" id="" class="form-control"
 value="<?php echo $articulos->consulta($codigo,'descripcion'); ?>">
</div>

<div class="form-group">
<label>Unidad</label>
<input type="text" name="unidad" id="" class="form-control"
 value="<?php echo $articulos->consulta($codigo,'unidad'); ?>">
</div>

<div class="form-group">
<label>Cantidad</label>
<input type="text" name="cantidad" id="" class="form-control"
 value="<?php echo $articulos->consulta($codigo,'cantidad'); ?>">
</div>

<div class="form-group">
<label>Precio</label>
<input type="text" name="precio" id="" class="form-control"
 value="<?php echo $articulos->consulta($codigo,'precio'); ?>">
</div>

<button class="btn btn-primary">Actualizar</button>


</form>

</div>
</div>
</div>
	
</body>
</html>