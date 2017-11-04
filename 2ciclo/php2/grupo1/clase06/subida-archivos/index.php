<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar Usuario</title>
</head>
<body>
	
<form action="controlador/subir-archivo.php"  method="POST"  
enctype="multipart/form-data">

<h1>Registrar Usuario</h1>

<label>Nombre</label>
<input type="text" name="nombre" id="" required="">

<br>

<label>Subir Archivo</label>
<input type="file" name="archivo" id="" required="">	

<br>

<button>Subir</button>

</form>




</body>
</html>