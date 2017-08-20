<?php 

$assets  =  new Assets();
$html    =  new Html();
$assets ->principal('Acceso');
$html   ->header();

?>

<div class="row">
<div class="col-md-12">
<form action="controlador/login.php" method="POST">
	
<div class="form-group">
<label>Usuario</label>	
<input type="text" name="usuario" id="" class="form-control">
</div>

<div class="form-group">
<label>Contraseña</label>
<input type="password" name="password" id="" class="form-control">
</div>

<button>Ingresar</button>

</form>

</div>
</div>



<?php 

$html->footer('PerúTec Academy');

 ?>