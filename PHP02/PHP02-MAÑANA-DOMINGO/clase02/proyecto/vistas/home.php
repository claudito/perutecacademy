<?php 

$assets  =  new Assets();
$html    =  new Html();
$mensaje =  new Mensaje();
$assets ->principal('Bienvenidos');
$assets->sweetalert();
$html   ->header();

if (isset($_GET['ok'])) 
{

$mensaje->sweetalert('Bienvenido','success',$_SESSION['nombres'].' '.$_SESSION['apellidos'],2);
}

?>

<div class="row">
	
<div class="col-md-12">
<?php include'vistas/nav.php'; ?>
</div>	

</div>


<div class="row">
<div class="col-md-12">
<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
		<p>Contents ...</p>
		<p>
			<a class="btn btn-primary btn-lg">Learn more</a>
		</p>
	</div>
</div>
</div>
</div>




<?php 

$html->footer('PerúTec Academy');

 ?>