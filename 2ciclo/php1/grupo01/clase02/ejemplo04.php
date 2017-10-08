<?php 

date_default_timezone_set('Europe/Brussels');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
</head>
<body>

<!-- 
GET    =  url
POST   =  encriptada
 -->

<form action="ejemplo05.php" method="GET" autocomplete="off" id="agregar">

<label>Nombres</label>
<input type="text" name="nombres" id=""	
 placeholder="Ingrese sus nombres" autofocus="" 
maxlength="100" required value="Luis">
<br>
<label>Edad</label>
<input type="number" name="edad" id="" min="18" 
 max="99">
<br>
<label>Talla</label>
<input type="number" name="talla" id=""  
 step="any">
<br>
<label>Área</label>
<select name="area" id="" required="">
<option value="">Seleccionar el área</option>
<option value="1">Contabilidad</option>
<option value="2">Sistemas</option>
<option value="3">Ventas</option>
</select>
<br>
<label>Turno</label>
<input type="radio" name="turno" value="M" id="">Mañana
<input type="radio" name="turno" value="T" id="">Tarde
<br>
<label>Habilidades</label>
<input type="checkbox" name="basedatos" id="">Base de Datos
<input type="checkbox" name="programacion" id="">Programación
<input type="checkbox" name="diseño" id="">Diseño
<br>
<!-- Año - mes - dia -->
<label>Fecha</label>
<input type="date" name="fecha" id=""  
 value="<?php echo date('Y-m-d'); ?>">
<br>
<label>Hora</label>
<input type="time" name="hora" id="" 
value="<?php echo date('H:i'); ?>"
>
<br>
<label>Mes y Año</label>
<input type="month" name="" id="" 
 value="<?php echo date('Y-m'); ?>">
<br>
<label>Semana</label>
<input type="week" name="" id="">
<br>
<label>Email</label>
<input type="email" name="" id="">
<br>
<label>URL</label>
<input type="url" name="" id="">
<br>
<label>Contraseña</label>
<input type="password" name="" id="">
<br>
<label for="">Oculto</label>
<input type="hidden" name="oculto">
<br>
<label>Comentario</label>
<textarea name="" id="" cols="30" rows="3"></textarea>
<br>
<label>Buscar</label>
<input type="search" name="buscar" id="">
<!-- 
<input type="submit" value="Enviar">
 -->
<br>

<button>Enviar</button>
<input type="reset" value="Limpiar">




</form>

	
</body>
</html>