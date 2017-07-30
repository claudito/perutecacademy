<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Css / Formularios</title>

<!-- Optimizar el sitio en dispositivos móviles -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Importar CSS de Bootstrap  -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Importar Jquery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Importar Funciones JavaScript de Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid"> <!-- Inicio Contenedor -->

<div class="row"> <!-- Inicio Fila -->

<div class="col-md-6"> <!-- Inicio Columna -->

<!-- Formularios -->

<!-- #1 -->

<form>

  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Archivo</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Solo se permiten archivos JPG,PNG,GIF</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Click para recordar.
    </label>
  </div>
  <button type="submit" class="btn btn-default">Ingresar</button>
</form>

<br>
<!-- #2 -->

<form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
  <button type="submit" class="btn btn-default">Send invitation</button>
</form>

<br>

<!-- #3 -->
<form class="form-horizontal">


<div class="form-group">

<label  class="col-sm-4 control-label">Email</label>

<div class="col-sm-8">
<input type="email" class="form-control input-lg"  placeholder="Correo">
</div>

</div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>


<input type="date" name="" id="" class="form-control">

</div> <!-- Fin Columna -->

</div> <!-- Fin Fila -->

</div> <!-- Fin Contenedor -->


</body>
</html>

