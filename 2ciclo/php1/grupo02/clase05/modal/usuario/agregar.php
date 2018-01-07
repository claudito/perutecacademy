<form  id="agregar"   autocomplete="off">

<div class="modal fade" id="modal-agregar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Agregar</h4>
			</div>
			<div class="modal-body">

            <div class="form-group">
            <label>Nombres</label>
            <input type="text" name="nombres" id="" class="form-control"  onchange="Mayusculas(this)">
            </div>

            <div class="form-group">
            <label>Apellidos</label>
            <input type="text" name="apellidos" id="" class="form-control"
              onchange="Mayusculas(this)">
            </div>

<div class="form-group">
<label>Área</label>
<select name="area" id="" class="form-control" required>
<option value="">[Seleccionar]</option>
<?php 
$area = new Area();
foreach ($area->lista() as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['descripcion'] ?></option>
<?php endforeach ?>
</select>
</div>



				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Agregar</button>
			</div>
		</div>
	</div>
</div>


</form>