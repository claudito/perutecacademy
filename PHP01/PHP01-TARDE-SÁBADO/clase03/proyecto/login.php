<?php 

date_default_timezone_set('America/Lima');

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>

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

<div class="container-fluid">

<div class="row">


<div class="col-md-4"></div>

<div class="col-md-4">

<center>
<img src="img/login.jpg" alt="" width="200" class="img-responsive" >
</center>
	
<div class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title text-center">Ingresar</h3>
	</div>

	<div class="panel-body">
	 
    
     <div class="form-group">
     <label>Usuario</label>
     <input type="text" name="usuario" id="" class="form-control" placeholder="Ingrese su usuario">
     </div>

     <div class="form-group">
     <label>Contraseña</label>
     <input type="password" name="pass" id="" class="form-control" placeholder="Ingrese su contraseña">
     </div>


     <button class="btn btn-primary">Ingresar</button>

     



	</div>

</div>

</div>


</div>

<div class="row">
<div class="col-md-12">

<footer>
 
<p class="text-center">&copy; <?php echo date('Y'); ?> PerúTec </p> 

</footer>


</div>
</div>




</div>


</body>
</html>