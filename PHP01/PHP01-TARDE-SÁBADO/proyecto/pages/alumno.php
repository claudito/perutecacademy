<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Alumnos</title>

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

<!-- DataTables -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<script>
function Mayusculas(field) {
field.value         = field.value.toUpperCase();

}
</script>


</head>
<body>

<?php include'../modal/alumno/agregar.php'; ?>
<?php include'../modal/alumno/eliminar.php'; ?>

<div class="container-fluid"> <!-- Inicio Contenedor -->

<div class="row">
<div class="col-md-12">
<?php include'../vistas/nav.php'; ?>
</div>
</div>




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

<script src="../ajax/alumno.js"></script>
<script>loadTabla()</script>
</body>
</html>