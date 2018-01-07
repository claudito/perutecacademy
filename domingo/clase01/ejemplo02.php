<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Select</title>
</head>
<body>
	

<h1>Lista de Usuarios</h1>

<select name="" id="">
<option value="">[Seleccionar]</option>
<?php foreach (Usuario::lista() as $key => $value): ?>
<option value="<?php echo $value['id'] ?>"><?php echo $value['nombres'].' '.$value['apellidos']  ?></option>	
<?php endforeach ?>

</select>



</body>
</html>