<?php 
include'../autoload.php'; 

$usuario  = new Usuario();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Bootstrap -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">


<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



</head>
<body>
<!-- Modales -->
<?php 
include'../modal/usuario/agregar.php';
include'../modal/usuario/eliminar.php';
 ?>

<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<div class="pull-right">
<button class="btn btn-primary btn-sm" data-toggle="modal"  href="#modal-agregar" >
 <i class="glyphicon glyphicon-plus"></i> Agregar</button>
</div>

<div id="mensaje"></div>
<div id="loader"></div>
<div id="tabla"></div>


</div>
</div>

</div>


<script src="../ajax/usuario.js"></script>
<script>loadTable();</script>
</body>
</html>