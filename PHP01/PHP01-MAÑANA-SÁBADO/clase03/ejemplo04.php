<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo 04</title>

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
<div class="col-md-12">
<div class="pull-right">


<a class="btn btn-primary" data-toggle="modal" href='#modal-agregar'>Agregar Registro</a>

<div class="modal fade" id="modal-agregar">

	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-hidden="true">&times;</button>
				<h4 class="modal-title">Agregar Registro</h4>
			</div>

            <form action="ejemplo05.php" method=""><!-- Inicio del form -->
           
			<div class="modal-body">

			<div class="form group">
			<label>Nombres</label>
			<input type="text" name="nombres" id="" class="form-control" required="">
			</div>
				
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit"  class="btn btn-primary">Agregar</button>
			</div>

			</form>  <!-- fin del form -->

		</div>

	</div>

</div>



</div>

</div>
</div>


<div class="row">

<div class="col-md-12">
<div class="table-responsive">
	<table class="table table-condensed table-bordered">
		<thead>
			<tr class="info">
				<th>Código</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>DNI</th>
				<th>Dirección</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Luis</td>
				<td>Claudio</td>
				<td>46794282</td>
				<td>San Juan de Lurigancho</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Omar</td>
				<td>Zea</td>
				<td>46794282</td>
				<td>San Juan de Lurigancho</td>
			</tr>
		</tbody>
	</table>

</div>


</div>


</div>
</div>

</body>
</html>