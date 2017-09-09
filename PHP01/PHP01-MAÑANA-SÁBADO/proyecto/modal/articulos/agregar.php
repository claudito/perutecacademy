
<div class="modal fade" id="modal-agregar">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Agregar Artículo</h4>
</div>

<form  id="agregar">

<div class="modal-body">

<div class="form-group">
<label>Código</label>
<input type="text" name="codigo" id="" class="form-control">
</div>


<div class="form-group">
<label>Descripción</label>
<input type="text" name="descripcion" id="" class="form-control">
</div>

<div class="form-group">
<label>Unidad</label>
<select name="unidad" id="" class="form-control" required>
<option value="">[Seleccionar]</option>
<?php 
$unidades  = new Unidades();
foreach ($unidades->listar() as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['codigo'] ?></option>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Cantidad</label>
<input type="number"  step="any" name="cantidad" id="" class="form-control">
</div>

<div class="form-group">
<label>Precio</label>
<input type="number"  step="any"  name="precio" id="" class="form-control">
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
<button type="submit" class="btn btn-primary">Agregar</button>
</div>

</form>

</div>
</div>
</div>