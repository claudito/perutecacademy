<?php 

date_default_timezone_set('America/Lima');

$fechamin;
$fechamax;
$horadeingreso;

$fechamin      = date('Y-m-d');
$fechamax      = "2017-12-31";
$horadeingreso = date('H:i');

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo 02</title>

<!-- Optimizar el sitio en dispositivos móviles 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">-->

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

<div class="col-md-4"></div>

<div class="col-md-4"> <!-- Inicio Columna -->

<h1>Registro</h1><hr>


<form action="">

<div class="form-group">
<label>Nombres:</label>
<input type="text" name="nombres" id=""  class="form-control" required="">
</div>

<div class="form-group">
<label>Apellidos:</label>
<input type="text" name="apellidos" id=""  class="form-control" required="">
</div>

<div class="form-group">
<label>Fecha de Ingreso:</label>
<input type="date" name="fechadeingreso" id=""  class="form-control"  required="" min="<?php echo $fechamin; ?>"  
            max="<?php echo $fechamax; ?>">
</div>

<div class="form-group">
<label>Edad:</label>
<input type="number" min="18" name="edad" id=""  class="form-control" required="" >
</div>

<div class="form-group">
<label>Peso:</label>
<input type="number" step="any"  name="peso" id=""  class="form-control" required="" >
</div>

<div class="form-group">
<label>Hora de Ingreso</label>
<input type="time" name="horadeingreso" id=""  class="form-control" required=""  value="<?php echo $horadeingreso; ?>"  readonly>
</div>

<div class="form-group">
<label>Área</label>
<select name="area" id="" class="form-control" required="">
<option value=""> Seleccionar </option>
<option value="contabilidad">Contabilidad</option>
<option value="sistemas">Sistemas</option>
<option value="compras">Compras</option>
</select>
</div>

<div class="form-group">
<label>Comentario</label>
<textarea name="comentario" id="" rows="4" class="form-control" required="" placeholder="Ingrese su comentario." ></textarea>
</div>





<button class="btn btn-primary">Enviar</button>



</form>






</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->


</body>
</html>
