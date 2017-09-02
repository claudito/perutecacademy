<?php 

include'../../autoload.php';

$usuarios =  new Usuarios();

 ?>

 <?php if ( count($usuarios->listar()) > 0): ?>
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
			<td><a href="" target="_blank"><?php echo $value['codigo']; ?></a></td>
			<td><?php echo $value['nombres']; ?></td>
			<td><?php echo $value['apellidos']; ?></td>
      <td>
  
      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-eliminar" 
      data-codigo="<?php echo $value['codigo']; ?>"
      data-nombres="<?php echo $value['nombres']; ?>"
      ><i class="glyphicon glyphicon-trash"></i></button>
  
      </td>
			</tr>

  			<?php endforeach ?>
  			</tbody>
  		</table>
  	</div>
  	</div>
  </div>
 <?php else: ?>
<p class="alert alert-warning">No hay datos disponibles.</p>
 <?php endif ?>