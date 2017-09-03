<?php 
include'../../../autoload.php';

$id  =  $_GET['id'];

$alumnos  = new Alumnos();

//echo $alumnos->consulta($id,'nombres');
 ?>

<form id="actualizar">

<input type="hidden"  name="id" value="<?php echo $id; ?>">
 	
<div class="form-group">
<label >Nombres</label>
<input type="text" name="nombres"  class="form-control" 
 value="<?php echo $alumnos->consulta($id,'nombres'); ?>" >
</div>

<div class="form-group">
<label >Apellidos</label>
<input type="text" name="apellidos"  class="form-control" 
 value="<?php echo $alumnos->consulta($id,'apellidos'); ?>" >
</div>

<div class="form-group">
<label >Dni</label>
<input type="text" name="dni"  class="form-control" 
 value="<?php echo $alumnos->consulta($id,'dni'); ?>" >
</div>


<div class="form-group">
<label >Usuario</label>
<input type="text" name="usuario"  class="form-control" 
 value="<?php echo $alumnos->consulta($id,'user'); ?>" >
</div>

<button class="btn btn-primary">Actualizar</button>

 </form>

 <script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    var parametros = $(this).serialize();
     $.ajax({
          type: "POST",
          url: "../controlador/alumno/actualizar.php",
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