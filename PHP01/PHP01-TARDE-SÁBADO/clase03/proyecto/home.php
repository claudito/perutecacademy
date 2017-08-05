<?php 

date_default_timezone_set('America/Lima');

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenidos</title>

<!-- Optimizar el sitio en dispositivos móviles -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Importar CSS de Bootstrap  -->
<link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">


<!-- Importar Jquery -->
<script src="../boostrap/js/jquery.min.js"></script>

<!-- Importar Funciones JavaScript de Bootstrap -->
<script src="../boostrap/js/bootstrap.min.js"></script>

<script>

$(function () {
  $('[data-toggle="popover"]').popover()
})

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>

</head>
<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-12">
<?php include'nav.php'; ?>     
</div>


</div>


<div class="row">
<div class="col-md-12">
<div class="jumbotron">
    <div class="container">
        <h1>Sistema de Matriculas</h1>
        <p>Versión 1.0</p>
        <p>
            
<button type="button" class="btn btn-primary btn-lg" data-container="body" data-toggle="popover" data-placement="right" data-content="Esta es la primera versión del sistema de Matriculas.">
Acerca de...
</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Información del Sistema en PDF."> 
<i class="glyphicon glyphicon-download"></i>  Descargar información
</button>

<?php include'modal.php'; ?>



        </p>
    </div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">

<footer>
 
<p class="text-center">&copy; <?php echo date('Y'); ?> PerúTec </p> 

</footer>


</div>
</div>



</div>


</body>
</html>