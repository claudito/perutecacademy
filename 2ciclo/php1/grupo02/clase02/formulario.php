<?php 

date_default_timezone_set('America/Lima');
$fecha  =  date('Y-m-d');
$mes    =  date('Y-m');
$semana =  date('Y').'-W'.date('W');
$hora   =  date('H:i');

//echo $_GET['hora'];

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=7">
</head>
<body>
<!-- 

action="url o página donde envio mi información"
method (POST , GET)
POST: Encriptada
GET : URL
autocomplete (on,off)

 -->	
<form action="" method="GET" autocomplete="off">

<label>Nombres</label>
<input type="text" name="nombres" id="" 
placeholder="Ingrese sus Nombres" maxlength="100" 
 pattern="[a-zA-Z0-9]+">
<br>
<label>Edad</label>
<input type="number" name="edad" id="" min="18" >
<br>
<label>Talla</label>
<input type="number" name="talla" id=""  step="any" 
 >
<br>
<label>Fecha</label>
<input type="date" name="fecha" id="" 
 value="<?php echo $fecha; ?>" max="2017-10-18">
<br>
<label>Mes</label>
<input type="month" name="mes" id="" 
 value="<?php echo $mes; ?>"> 
<br>
<label>Semana</label>
<input type="week" name="semana" id="" value="<?php echo $semana; ?>">
<br>
<label>Hora</label>
<input type="time" name="hora" id="" 
value="<?php echo $hora; ?>">

<!-- <input type="submit" value="Enviar">
 -->
<br>
<button>Enviar</button>
<input type="reset" value="Limpiar">




</form>

</body>
</html>