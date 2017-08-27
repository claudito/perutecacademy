<?php 

include'../autoload.php';
include'../session.php';

$assets  =  new Assets();
$html    =  new Html();
$assets ->principal('Lista de Alumnos');
$assets ->datatables();
$assets->sweetalert();
$html   ->header();
include'../vistas/modal/alumno/agregar.php';

?>


<div class="row">
	
<div class="col-md-12">
<?php include'../vistas/nav.php'; ?>
</div>	

</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<a data-toggle="modal" href="#newModal" class="btn btn-primary">Agregar Registro</a>
</div>

</div>
</div>


<div class="row">
<div class="col-md-12">

<div id="loader" class="text-center"> <img src="../assets/img/loader.gif"></div>
<div id="mensaje"></div><!-- Datos ajax Final -->
<div id="tabla"></div><!-- Datos ajax Final -->


</div>
</div>


<script src="../ajax/app/alumno.js"></script>
<script>loadTabla();</script>
<?php 

$html->footer('PerúTec Academy');

 ?>