<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modal</title><!--  -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=7">

<!-- Css Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

<div class="container-fluid"><!-- Inicio Contenedor -->

<div class="row">
<div class="col-md-12">
<?php include'nav.php'; ?>

</div>
</div>

<div class="row">
<div class="col-md-12">

<button class="btn btn-primary" data-toggle="modal" href="#modal-contacto" >Contacto</button>

<form action="">

<!-- Modal -->
<!-- 
Tamaños:
moda-lg
modal-md
modal-sm

 -->


<div class="modal fade" id="modal-contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-md" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contacto</h4>
      </div>
       
      

      <div class="modal-body">
        
       <input type="text" name="contacto" id="" class="form-control" required>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>

    

    </div>

  </div>

</div>

 </form>



</div>
</div>
</div>



</div><!-- Fin Contenedor -->



</body>
</html>