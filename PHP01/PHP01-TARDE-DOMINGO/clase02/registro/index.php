<?php date_default_timezone_set('America/Lima'); ?> <!-- Fijar horario de la zona actual -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!--CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Funciones de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Registro de Información</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h1 class="text-center">Registro de Alumnos</h1><hr> <!-- (hr) para subrayado -->
        <form action="registrar.php" method="POST" autocomplete="on">
          <div class="form-group">
          <label>Nombres</label>
          <input type="text" name="nombres" id="" class="form-control" required="" placeholder="Nombres">
          </div>
          <div class="form-group">
          <label>Apellidos</label>
          <input type="text" name="apellidos" id="" class="form-control" required="" placeholder="Apellidos">
          </div>
          <div class="form-group">
          <label>Edad</label>
          <input type="number" min="18" value="18" name="edad" id="" class="form-control" required="" placeholder="Edad">
          </div>
         
         <!-- 
          

          <div class="form-group">
            <label>Area</label>
            <select name="area" id="" class="form-control" required="">
              <option value="">Seleccionar</option>
              <option value="Contabilidad">Contabilidad</option>
              <option value="Compras">Compras</option>
              <option value="Ventas">Ventas</option>
            </select>
          </div>
          <div class="form-group">
            <label>Peso</label>
            <input type="number" step="any" name="peso" id="" class="form-control" placeholder="Peso">
          </div>
          <div class="form-group">
            <label>Fecha de Ingreso</label>
            <input type="date" name="fecha" id="" class="form-control" value="<?php //echo date('Y-m-d');?>">
          </div>
          <div class="form-group">
            <label>Tipo de Trabajador</label>
            <input type="radio" value="empleado" name="tipo" id=""> Empleado
            <input type="radio" value="obrero" name="tipo" id=""> Obrero
          </div>
          <div class="form-group">
            <label>Lenguajes que dominas</label>
            <input type="checkbox" value="java" name="java" id="">Java
            <input type="checkbox" value="php" name="php" id="">PHP
          </div>
          <div class="form-group">
            <label>Comentario</label>
            <textarea name="comentario" id="" rows="3" class="form-control" placeholder="Ingrese algún dato adicional"></textarea>
          </div>
          <div class="form-group">
            <label>Subir Imagen</label>
            <input type="file" name="imagen" id="" class="form-control">
          </div>
          
           -->

          <div class="form group">
            <button class="btn btn-primary">Registrar</button>  
          </div>      
        </form>
      </div>
    </div>
 

   <div class="row">
  <div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-hover table-bordered table-condensed">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Edad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      include'../clases/Conexion.php';
      include'../clases/Alumno.php';
      $alumno = new Alumno();
       ?>
      <?php foreach ($alumno->lista() as $key => $value): ?>
        <tr>
        <td><a href=""><?php echo $value['id']; ?></a></td>
        <td><?php echo $value['nombres']; ?></td>
        <td><?php echo $value['apellidos']; ?></td>
        <td><?php echo $value['edad']; ?></td>
        <td>
        <a href="editar.php?id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
        <a href="eliminar.php?id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-trash text-danger"></i></a>    

        </td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
  </div>
  </div>
   </div>


  </div>
</body>
</html>