<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">

<!-- Para la compatibilidad con diferentes pantallas o dispositivos -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<title>Tablas con Bootstrap</title>

</head>

<body>

<div class="container-fluid"><!-- Inicio del contenedor -->

<div class="row"><!-- Inicio de la fila #1-->

<div class="col-md-12">

<h1>Table Responsive</h1>

<!-- 
Paleta de Colores.
success
info
danger
warning
active
 -->

<div class="table-responsive">

<table  class="table table-bordered table-condensed">
<thead>
<tr class="active">
<th>Código</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Edad</th>
<th>Dni</th>
<th>Fecha de Ingreso</th>
</tr>
</thead>
<tbody>
<tr>
<td>001</td>
<td>Luis</td>
<td>Claudio</td>
<td>27</td>
<td>12345678</td>
<td>11/07/2016</td>
</tr>
<tr>
<td>002</td>
<td>Juan</td>
<td>Perez</td>
<td>29</td>
<td>12000000</td>
<td>09/12/2010</td>
</tr>
</tbody>	

</table>


</div>




</div>

</div><!-- Fin de la fila #1 -->

</div><!-- Fin del contenedor -->





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>