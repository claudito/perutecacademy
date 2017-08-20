<?php 
include'../autoload.php';
include'../session.php';

$assets  =  new Assets();
$html    =  new Html();
$assets ->principal('Carga de Archivos');
$html   ->header();

?>

<div class="row">
	
<div class="col-md-12">
<?php include'../vistas/nav.php'; ?>
</div>	

</div>


<div class="row">
<div class="col-md-12">

<form action="../controlador/subir-archivo.php" method="POST" enctype="multipart/form-data">

<input type="file" name="archivo" id="" class="form-control" required="">

<button class="btn btn-primary">Subir Archivo</button>


</form>

</div>
</div>




<?php 

$html->footer('PerúTec Academy');

 ?>