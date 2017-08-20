<?php 
include'../autoload.php';
$usuarios  =  new Usuarios();
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar Usuario</title>

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

<h1>Actualizar Usuario</h1>

<form action="../controlador/actualizar.php" method="POST">
	
<div class="form-group">
<label>Código</label>
<input type="text" name="codigo" id="" class="form-control"  
 value="<?php echo $usuarios->consultar($_GET['codigo'],'codigo');  ?>" readonly>
</div>

<div class="form-group">
<label>Nombres</label>
<input type="text" name="nombres" id="" class="form-control" value="<?php echo $usuarios->consultar($_GET['codigo'],'nombres');  ?>">
</div>

<div class="form-group">
<label>Apellidos</label>
<input type="text" name="apellidos" id="" class="form-control" 
 value="<?php echo $usuarios->consultar($_GET['codigo'],'apellidos');  ?>">
</div>


<button class="btn btn-primary">Actualizar</button>


</form>



</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->


</body>
</html>