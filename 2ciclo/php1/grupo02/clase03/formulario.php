<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario Bootstrap</title><!--  -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=7">

<!-- Css Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid"><!-- Inicio Contenedor -->

<div class="row">

<div class="col-md-4">

<h1>Registro</h1><hr>

<div class="form-group">
<label>Nombres</label>
<input type="text" name="" id="" class="form-control">
</div>

<div class="form-group">
<label>Apellidos</label>
<input type="text" name="" id="" class="form-control">
</div>


<!--
colores:
btn-primary
btn-info
btn-danger
btn-warning
btn-default
btn-success

Tamaños:
btn-lg
btn-md
btn-sm
btn-xs

btn-block
 -->


<button class="btn-primary btn-block btn-lg btn">Enviar</button>



</div>
<div class="col-md-4">

<!-- 
colores:
panel-primary
panel-info
panel-danger
panel-warning
panel-default
panel-success

 -->


<div class="panel panel-success">

<div class="panel-heading">
Registro
</div>

<div class="panel-body">

<div class="form-group">
<label>Nombres</label>
<input type="text" name="" id="" class="form-control">
</div>

<div class="form-group">
<label>Apellidos</label>
<input type="text" name="" id="" class="form-control">
</div>


</div>

<div class="panel-footer">

<button class="btn-primary btn-block btn-lg btn">Enviar</button>

</div>





</div>



</div>
<div class="col-md-4">

<div class="alert alert-success">
Columna de 4
</div>

</div>

</div>






</div><!-- Fin Contenedor -->





	
</body>
</html>