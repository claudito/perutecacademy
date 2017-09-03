<?php 

include'../../autoload.php';

$codigo  = $_GET['codigo'];

$articulos  =  new Articulos();

 ?>

<form  id="actualizar">

<div class="form-group">
<label>Código</label>
<input type="text" name="codigo" id="" class="form-control" required="" value="<?php echo $articulos->consulta($codigo,'codigo'); ?>" readonly>
</div>

<div class="form-group">
<label>Descripción</label>
<input type="text" name="descripcion" id="" class="form-control" required="" value="<?php echo $articulos->consulta($codigo,'descripcion'); ?>">
</div>


<div class="form-group">
<label>Unidad</label>
<select name="unidad"   class="form-control" required="">
<option value="<?php echo $articulos->consulta($codigo,'unidad'); ?>"><?php echo $articulos->consulta($codigo,'unidad'); ?></option>
<?php 
$unidad  =  new Unidad();
foreach ($unidad->lista() as $key => $value): ?>
<?php if ($value['codigo']!==$articulos->consulta($codigo,'unidad')): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['codigo'] ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Cantidad</label>
<input type="number" step="any" name="cantidad" id="" class="form-control" required="" value="<?php echo round($articulos->consulta($codigo,'cantidad'),2) ?>">
</div>

<div class="form-group">
<label>Precio</label>
<input type="number" step="any" name="precio" id="" class="form-control" required="" value="<?php echo round($articulos->consulta($codigo,'precio'),2); ?>">
</div>

<button type="submit" class="btn btn-primary">Actualizar</button>

</form>


<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    var parametros = $(this).serialize();
     $.ajax({
          type: "POST",
          url: "../controlador/actualizar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
         //$("#actualizar")[0].reset();  //resetear inputs
          $('#modal-actualizar').modal('hide'); //ocultar modal
          $('body').removeClass('modal-open');
          $("body").removeAttr("style");
          $('.modal-backdrop').remove();
          loadTabla(1);
          }
      });
  });
</script>