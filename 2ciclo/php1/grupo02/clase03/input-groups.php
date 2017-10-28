<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home</title><!--  -->
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

<form  action="" method="GET">
	
<div class="input-group">

<input type="date" name="fecha"  class="form-control" required="">

<span class="input-group-btn">
<button class="btn btn-primary" type="submit">
<i class="fa fa-search"></i></button>
</span>

</div>



</form>


</div>
</div>



</div><!-- Fin Contenedor -->



</body>
</html>