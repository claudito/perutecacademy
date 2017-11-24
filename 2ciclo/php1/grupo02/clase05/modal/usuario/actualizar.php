<?php 

include'../../autoload.php';
$id  =  $_GET['id'];

$usuario =  new Usuario();

 ?>

<form id="actualizar" autocomplete="off">

<input type="hidden" name="id" value="<?php echo $id; ?>">

 	
<div class="form-group">
<label>Nombres</label>
<input type="text" name="nombres" id="" class="form-control" 
value="<?php echo $usuario->consulta($id,'nombres'); ?>" onchange="Mayusculas(this)">	
</div>

<div class="form-group">
<label>Apellidos</label>
<input type="text" name="apellidos" id="" class="form-control" 
value="<?php echo $usuario->consulta($id,'apellidos'); ?>" onchange="Mayusculas(this)">	
</div>


<div class="form-group">
<label>Área</label>
<select name="area" id="" class="form-control" required>
<option value="<?php echo $usuario->consulta($id,'codigo_area'); ?>"><?php echo $usuario->consulta($id,'area'); ?></option>
<?php 
$area = new Area();
foreach ($area->lista() as $key => $value): ?>

<?php if ($value['codigo']!==$usuario->consulta($id,'codigo_area')): ?>
 <option value="<?php echo $value['codigo'] ?>"><?php echo $value['descripcion'] ?></option> 
<?php endif ?>





<?php endforeach ?>
</select>
</div>





<button class="btn btn-primary">Actualizar</button>


 </form>

 <script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    var parametros = $(this).serialize();
     $.ajax({
          type: "POST",
          url: "../controlador/usuario/actualizar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
          $('#modal-actualizar').modal('hide'); //ocultar modal
          $('.modal-backdrop').remove();
          loadTable();
          }	
      });
  });
</script>