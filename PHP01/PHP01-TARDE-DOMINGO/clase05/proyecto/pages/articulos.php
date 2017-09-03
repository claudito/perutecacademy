<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Artículos</title>

<!-- Optimizar el sitio en dispositivos móviles -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Importar CSS de Bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- Importar Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Importar Funciones JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- SweetAlert -->
<script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

</head>
<body>
<!-- Modales -->
<?php include'../modal/articulos/agregar.php'; ?> <!-- Agregar -->
<?php include'../modal/articulos/eliminar.php'; ?> <!-- Eliminar -->

<div class="container-fluid"> 

<div class="row">
<div class="col-md-12">
<?php include'nav.php'; #Barra de Navegación?>
</div>
</div>

<div class="row">
<div class="col-md-12">
<a class="btn btn-primary" data-toggle="modal" href='#modal-agregar'>Agregar</a>
</div>
</div>



<div class="row"> 
<div class="col-md-12">

<div id="loader" class="text-center"> <img src="../img/loader.gif"></div>
<div id="mensaje"></div><!-- Mensaje(Agregar,Actualizar,Eliminar) -->
<div id="tabla"></div><!-- Datos de  la Tabla-->


</div> 
</div> 
</div>


<script src="../ajax/articulos.js"></script>
<script>loadTabla();</script>
</body>
</html>