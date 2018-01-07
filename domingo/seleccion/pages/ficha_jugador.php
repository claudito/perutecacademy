<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ficha de Jugadores</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<?php include'../nav.php'; ?>
</div>
</div>


<div class="row">
<div class="col-md-12">
<h1>Ficha de Jugadores</h1>

<ul>

<?php foreach (Jugador::lista() as $key => $value): ?>
<li>
<?php echo $value['nombres'].' '.$value['apellidos'].' - '.$value['posicion']; ?>

<ul>
<?php foreach (Jugador_club::lista_club($value['id']) as $key => $value): ?>
<li><?php echo $value['club']; ?></li>
<?php endforeach ?>
</ul>

</li>
<?php endforeach ?>
	
</ul>



</div>
</div>



</div>

	
</body>
</html>