<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tablas</title>
	<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<!-- JS -->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<!-- Vincular a mi tabla mediante el id -->
<script>
$(document).ready(function() {
    $('#tabla').DataTable();
} );
</script>


</head>
<body>

<table id="tabla"  class="table table-bordered">	

<thead>
<tr class="info">
<th>Código</th>
<th>Nombres</th>
<th>Apellidos</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>Luis Augusto</td>
<td>Claudio Ponce</td>
</tr>

<tr>
<td>2</td>
<td>Juan</td>
<td>Torres</td>
</tr>

</tbody>


</table>




	
</body>
</html>