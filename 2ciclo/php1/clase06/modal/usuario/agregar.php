<form action="../controlador/usuario/agregar.php" 
 method="POST">

<!-- Modal -->
<div class="modal fade" id="modal-agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>
      </div>
      <div class="modal-body">
        
      <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres" id="" class="form-control" required="">
      </div>

      <div class="form-group">
      <label>Apellidos</label>
      <input type="text" name="apellidos" id="" class="form-control" required="">
      </div>

      <div class="form-group">
      <label>DNI</label>
      <input type="text" name="dni" id="" class="form-control" required="">
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