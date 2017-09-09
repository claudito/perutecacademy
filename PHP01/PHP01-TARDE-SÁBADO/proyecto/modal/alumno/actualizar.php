<?php 

include'../../autoload.php';

$codigo    =  $_GET['codigo'];
$alumno  =  new Alumno();

 ?>

<form id="actualizar">
<div class="form-group">
<label>Código</label>
<input type="text" name="codigo" id="" class="form-control" value="<?php echo $alumno->consultar($codigo,'codigo'); ?>" readonly>
</div>

<div class="form-group">
<label>Nombres</label>
<input type="text" name="nombres" id="" class="form-control" value="<?php echo $alumno->consultar($codigo,'nombres'); ?>" >
</div>


<div class="form-group">
<label>Apellidos</label>
<input type="text" name="apellidos" id="" class="form-control" value="<?php echo $alumno->consultar($codigo,'apellidos'); ?>">
</div>

<div class="form-group">
<label>Edad</label>
<input type="number" name="edad" id="" class="form-control" value="<?php echo $alumno->consultar($codigo,'edad'); ?>">
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