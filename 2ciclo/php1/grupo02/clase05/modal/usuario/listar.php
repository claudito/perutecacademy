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
 <td><?php echo $value['fecha_creacion'] ?></td>
 <td>
 <button class="btn btn-danger" data-toggle="modal" 
 data-target="#modal-eliminar" 
 data-id="<?php echo $value['id']; ?>" ><i class="glyphicon glyphicon-trash"></i></button>
 </td>
 </tr>
 <?php endforeach ?>
 </tbody>
 </table>


 </div>
 </div>


 </div>

<script>
$(document).ready(function(){
    $('#consulta').DataTable();
});
</script>
 <?php else: ?>
 <p class="alert alert-warning">No hay registros disponibles.</p>
 <?php endif ?>