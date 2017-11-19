<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Perutec</title>

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

<?php if (isset($_GET['msj']) and $_GET['msj']=='ok'): ?>
<p class="alert alert-success">Correo enviado Exitosamente</p>
<?php endif ?>


<h1>Envió de Correo</h1>

<form action="http://correo.perutec.com.pe/perutecacademy/send_2.php"  method="POST" autocomplete="off">

<div class="form-group">
<label>Nombre</label>
<input type="text" name="nombre" id="" 
 class="form-control">
</div>



<div class="form-group">
<label>Destinatario</label>
<input type="email" name="destinatario" id="" 
 class="form-control">
</div>

<div class="form-group">
<label>Remitente</label>
<input type="email" name="remitente" id="" class="form-control">
</div>

<div class="form-group">
<label>Asunto</label>
<input type="text" name="asunto" id="" class="form-control">
</div>

<div class="form-group">
<label>Mensaje</label>
<textarea name="mensaje"  rows="5" class="form-control"></textarea>
</div>

<?php 

$url   =  'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

 ?>

 <input type="hidden" name="url" value="<?php echo $url ?>">




<button class="btn btn-primary">Enviar</button>

</form>

</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->


</body>
</html>


