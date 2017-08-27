<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Correo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<div id="mensaje"></div>

<form id="agregar">

<h1>Enviar Correo</h1>

<div class="form-group">
<label>Destinario</label>
<input type="email" name="destinatario" id="" required="" class="form-control">
</div>

<div class="form-group">
<label>Remitente</label>
<input type="email" name="remitente" id="" required=""  class="form-control">
</div>

<div class="form-group">
<label>Asunto</label>
<input type="text" name="asunto" id="" required=""  class="form-control">
</div>


<div class="form-group">
<label>Mensaje</label>
<textarea name="texto" rows="5"  class="form-control"></textarea>
</div>


<button class="btn btn-primary">Enviar</button>





</form>



</div>
</div>
</div>	

<!-- Importar Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Importar Funciones JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>