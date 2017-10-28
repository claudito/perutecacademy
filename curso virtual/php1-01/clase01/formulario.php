<?php 
date_default_timezone_set('America/Lima'); 

echo date_default_timezone_get();

$fecha = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Registro</title>
</head>
<body>
<!-- 
Registro de Trabajadores:
* codigo
* nombres
* apellidos
* fecha ingreso
* fecha nac
* talla
* sexo
* habilidades
* comentario
* Foto

 -->
 
 <h1>Registro de Trabajadores</h1><hr>
<form action="registro.php" method="POST" autocomplete="off" 
 enctype="multipart/form-data">

<label>Código</label>
<input type="text" name="codigo" id="" required=""  placeholder="Ingrese el código" value="00001">
<br>
<label>Nombres</label>
<input type="text" name="nombres" id="" required=""  placeholder="Ingrese sus nombres">
<br>
<label>Apellidos</label>
<input type="text" name="apellidos" id="" required=""  placeholder="Ingrese sus apellidos">
<br>
<label>Fecha de Ingreso</label>
<input type="date" name="fecha_ingreso" id="" required=""
 value="<?php echo $fecha; ?>">
<br>
<label>Fecha de Nacimiento</label>
<input type="date" name="fecha_nacimiento" id="" required=""
>
<br>
<label>Talla</label>
<input type="number" name="talla" id="" required=""
  step="any" min="0">
<br>
<label>Sexo</label>
<input type="radio" name="sexo" value="M" id="" required="">M
<input type="radio" name="sexo" value="F" id="" required="">F
<br>
<label>Habilidades</label>
<input type="checkbox" name="word" >Word
<input type="checkbox" name="excel">Excel
<input type="checkbox" name="access">Access
<br>
<label>Comentario</label>
<textarea name="comentario" id="" cols="30" rows="4" placeholder="Ingrese un Comentario"></textarea>
<br>
<label>Foto</label>
<input type="file" name="foto" id="" required="">
<br>
<button>Registrar</button>

</form>
	
</body>
</html>