<?php 

$assets  =  new Assets();
$html    =  new Html();
$assets ->principal('Acceso');
$html   ->header();

?>

<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">

<center><img src="assets/img/login.png" alt="" class="img-responsive"></center>

<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Acceso</h3>
	</div>
	<div class="panel-body">
		<form action="controlador/login.php" method="POST">
	
<div class="form-group">
<label>Usuario</label>	
<input type="text" name="usuario" id="" class="form-control">
</div>

<div class="form-group">
<label>Contraseña</label>
<input type="password" name="password" id="" class="form-control">
</div>

<button class="btn btn-primary">Ingresar</button>

</form>
	</div>
</div>

</div>
</div>



<?php 

$html->footer('PerúTec Academy');

 ?>