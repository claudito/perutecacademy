<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Artículos</title>
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
<?php include'../modal/articulos/agregar.php'; ?>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<div class="pull-right">
<a class="btn btn-primary" data-toggle="modal" href='#modal-agregar'>Agregar</a>
</div>

<div id="mensaje"></div><!-- Mensaje -->
<div id="loader" class="text-center">
<img src="../img/loader.gif" alt="" class="img-res">
</div>  <!-- Mensaje de Carga -->
<div id="tabla"></div>   <!-- Información -->


</div>
</div>
</div>

<script src="../ajax/articulos.js"></script>
<script>loadTabla()</script>
</body>
</html>