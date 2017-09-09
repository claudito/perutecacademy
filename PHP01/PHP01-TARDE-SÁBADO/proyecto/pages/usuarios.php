<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>

<!-- Optimizar el sitio en dispositivos móviles -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS de Bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Funciones JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Sweet Alert -->
<script src="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.js"></script>

<link rel="stylesheet" href="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.css">


</head>
<body>

<?php include'../modal/usuarios/agregar.php'; ?>
<?php include'../modal/usuarios/eliminar.php'; ?>

<div class="container-fluid"> <!-- Inicio Contenedor -->

<div class="row"> <!-- Inicio Fila -->

<div class="col-md-12"> <!-- Inicio Columna -->

<div class="pull-right">
<a class="btn btn-primary" data-toggle="modal" href='#modal-agregar'>Agregar</a>
</div>

<div id="mensaje"></div><!-- Mensaje(Agregar,Actualizar,Eliminar) -->

<div id="loader" class="text-center"><img src="../img/loader.gif" alt=""></div><!-- Mensaje de Carga -->

<div id="tabla"></div><!-- Lista de Usuarios -->





</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->

<script src="../ajax/usuarios.js"></script>
<script>loadTabla()</script>
</body>
</html>