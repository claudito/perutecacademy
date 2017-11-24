<?php 
include'../../autoload.php';

$usuario = new Usuario();

 ?>

 <?php if (count($usuario->lista())>0): ?>
 <div class="panel panel-default">
 
 <div class="panel-heading">
 <h3 class="panel-title">Lista de Usuarios</h3>
 </div>

 <div class="panel-body">
 <div class="table-reponsive">
 <table id="consulta"  class="table table-condensed">
 <thead>
 <tr>
 <th>Código</th>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Área</th>
 <th>Fecha de Creación</th>
 <th>Acciones</th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($usuario->lista() as $key => $value): ?>
 <tr>
 <td><?php echo $value['id'] ?></td>
 <td><?php echo $value['nombres'] ?></td>
 <td><?php echo $value['apellidos'] ?></td>
 <td><?php echo $value['area'] ?></td>
 <td><?php echo date_format(date_create($value['fecha_creacion']),'d/m/Y H:i:s'); ?></td>
 <td>
 <button class="btn btn-danger" data-toggle="modal" 
 data-target="#modal-eliminar" 
 data-id="<?php echo $value['id']; ?>" ><i class="glyphicon glyphicon-trash"></i></button>

<button class="btn btn-primary btn-edit" 
 data-id="<?php echo $value['id']; ?>">
 <i class="glyphicon glyphicon-edit"></i>
</button>

 </td>
 </tr>
 <?php endforeach ?>
 </tbody>
 </table>


 </div>
 </div>


 </div>

<!-- Modal -->
  <script>
  	$(".btn-edit").click(function(){
  		id = $(this).data("id");
  		$.get("../modal/usuario/actualizar.php","id="+id,function(data){
  			$("#form-actualizar").html(data);
  		});
  		$('#modal-actualizar').modal('show');
  	});
  </script>

<div class="modal fade" id="modal-actualizar" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Actualizar</h4>
</div>
<div class="modal-body">
<div id="form-actualizar"></div>
</div>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<script>
$(document).ready(function(){
    $('#consulta').DataTable();
});
</script>
 <?php else: ?>
 <p class="alert alert-warning">No hay registros disponibles.</p>
 <?php endif ?>