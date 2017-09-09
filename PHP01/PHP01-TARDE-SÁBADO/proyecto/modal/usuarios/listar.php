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

      <button class="btn btn-primary btn-sm btn-edit"  
      data-codigo="<?php echo $value['codigo']; ?>"
       ><i class="glyphicon glyphicon-edit"></i></button>
  
      </td>
			</tr>

  			<?php endforeach ?>
  			</tbody>
  		</table>
  	</div>
  	</div>
  </div>
     <!-- 
     data-codigo="001"
     codigo="001"

     -->
   <!-- Modal -->
  <script>
    $(".btn-edit").click(function(){
      codigo = $(this).data("codigo");
      $.get("../modal/usuarios/actualizar.php","codigo="+codigo,function(data){
        $("#form-edit").html(data);
      });
      $('#modal-actualizar').modal('show');
    });
  </script>

  <!-- Inicio Modal Actualizar -->
  <div class="modal fade" id="modal-actualizar" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Actualizar</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>

      </div>
    </div>
  </div>
<!-- Fin Modal Actualizar -->
 <?php else: ?>
<p class="alert alert-warning">No hay datos disponibles.</p>
 <?php endif ?>