<?php 
date_default_timezone_set('America/Lima');

#echo date_default_timezone_get();

$date    =  date('Y-m-d');
$hora    =  date('H:i');
$mes     =  date('Y-m');
$semana  =  date('Y-').'W'.date('W'); 

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo 06</title>
</head>
<body>
<h1>Formulario</h1>

<!-- 
method:
GET
POST

 -->

<form action="registro.php" method="POST">

<label>Código:</label>
<input type="text" name="codigo" id="" placeholder="Ingrese el código" required  value="12345" readonly="">
<br>
<label>Edad</label>
<input type="number" name="edad" id="" min="18" 
 max="60">
<br>
<label>Talla</label>
<input type="number" name="talla" id="" step="any">
<br>
<label>Fecha de Ingreso</label>
<input type="date" name="fecha" id="" 
 value="<?php echo $date; ?>">
 <br>
<label>Hora de Ingreso</label>
<input type="time" name="hora" id="" value="<?php echo $hora; ?>">
<br>
<label>Mes y Año</label>
<input type="month" name="mes" id="" value="<?php echo $mes; ?>">	
<br>
<label>Semana</label>
<input type="week" name="semana" id="" 
 value="<?php echo $semana; ?>">
<br>
<label>Comentario</label>
<textarea name="comentario" id="" cols="30" rows="3" 
 placeholder="Ingrese un comentario"  maxlength="100" ></textarea>
<br>
<button>Enviar</button>

</form>

<!--  
<a href="registro.php?codigo=123">codigo</a>

-->
	
</body>
</html>