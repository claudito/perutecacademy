<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Articulo</title>

<!-- Optimizar el sitio en dispositivos móviles -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Importar CSS de Bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- Importar Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Importar Funciones JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid"> <!-- Inicio Contenedor -->

<div class="row"> <!-- Inicio Fila -->

<div class="col-md-12"> <!-- Inicio Columna -->

<!-- En esta parte debe ir nuestro código -->

<h1>Registrar Artículo</h1><hr>

<form action="controlador/agregar.php" method="POST">
	
<div class="form-group">
<label>Código</label>
<input type="text" name="codigo" id="" required="" class="form-control">
</div>

<div class="form-group">
<label>Descripción</label>
<input type="text" name="descripcion" id="" required="" class="form-control">
</div>

<div class="form-group">
<label>Unidad</label>
<input type="text" name="unidad" id="" required="" class="form-control">
</div>

<div class="form-group">
<label>Cantidad</label>
<input type="text" name="cantidad" id="" required="" class="form-control">
</div>

<div class="form-group">
<label>Precio</label>
<input type="text" name="precio" id="" required="" class="form-control">
</div>

<button class="btn btn-primary">Agregar</button>


</form>




</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->


</body>
</html>