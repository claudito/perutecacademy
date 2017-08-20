<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>

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

<div class="row">
<div class="col-md-12">
 <a href="agregar.php" class="btn btn-primary">Agregar Usuario</a>
</div>
</div>

<div class="row"> <!-- Inicio Fila -->

<div class="col-md-12"> <!-- Inicio Columna -->

<?php 

$usuarios  =  new Usuarios();

 ?>
 <?php if ( count($usuarios->listar())  >0 ): ?>
  <div class="panel panel-default">
  	<div class="panel-heading">
  		<h3 class="panel-title">Lista de Usuarios</h3>
  	</div>
  	<div class="panel-body">
  	<div class="table-responsive">
  		<table class="table table-hover">
  			<thead>
  				<tr>
  					<th>Código</th>
  					<th>Nombres</th>
  					<th>Apellidos</th>
            <th>Acciones</th>
  				</tr>
  			</thead>
  			<tbody>
  			<?php foreach ($usuarios->listar() as $key => $value): ?>

			<tr>
			<td><?php echo $value['codigo']; ?></td>
			<td><?php echo $value['nombres']; ?></td>
			<td><?php echo $value['apellidos']; ?></td>
      <td>
       
      <a href="actualizar.php?codigo=<?php echo $value['codigo']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
      
      <a href="../controlador/eliminar.php?codigo=<?php echo $value['codigo']; ?>"><i class="glyphicon glyphicon-trash text-danger"></i></a>

      </td>
			</tr>

  			<?php endforeach ?>
  			</tbody>
  		</table>
  	</div>
  	</div>
  </div>
 <?php else: ?>
  <p class="alert alert-warning">No hay registros.</p>
 <?php endif ?>



</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->


</body>
</html>