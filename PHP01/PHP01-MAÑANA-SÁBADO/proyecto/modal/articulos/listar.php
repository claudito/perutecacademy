<?php 

include'../../autoload.php';

$articulos  =  new Articulos();

?>

<?php if (count($articulos->listar())>0): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Lista de Artículos</h3>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Código</th>
				<th>Descripción</th>
				<th>Unidad</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		<?php 
   		foreach ($articulos->listar() as $key => $value): ?>
		<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['codigo']; ?></td>
		<td><?php echo $value['descripcion']; ?></td>
		<td><?php echo $value['unidad']; ?></td>
		<td><?php echo $value['cantidad']; ?></td>
		<td><?php echo $value['precio']; ?></td>
		<td>
<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-eliminar" 
 data-codigo="<?php echo $value['codigo']; ?>"
 data-descripcion="<?php echo $value['descripcion']; ?>"

 ><i class="glyphicon glyphicon-trash"></i></button>

     <button class="btn btn-primary btn-sm btn-edit" 
     data-codigo="<?php echo $value['codigo']; ?>"><i class="glyphicon glyphicon-edit"></i></button>
		
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
      codigo = $(this).data("codigo");
      $.get("../modal/articulos/actualizar.php","codigo="+codigo,function(data){
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
<p class="alert alert-warning">No hay Información Disponible.</p>
<?php endif ?>