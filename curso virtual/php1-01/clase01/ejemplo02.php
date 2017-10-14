<?php 
date_default_timezone_set('America/Lima');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo 02</title>
<link rel="stylesheet" href="http://selectize.github.io/selectize.js/css/selectize.default.css" >

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script src="http://selectize.github.io/selectize.js/js/selectize.js"></script>
</head>
<body>
<!-- 
POST : Encriptada
GET  : URL

 -->
<form action="ejemplo03.php" method="GET" autocomplete="off">

<label>Nombres</label>
<input type="text" name="nombres" id="" >

<label>Edad</label>
<input type="number" name="edad" id="" min="18" max="99">

<label>Talla</label>
<input type="number" name="talla" id="" step="any">

<label>Fecha</label>
<input type="date" name="fecha" id="" value="<?php echo date('Y-m-d') ?>"
 min="2017-10-01" max="2017-10-31" >


 <label>Mes</label>
 <input type="month" name="mes" id=""  value="<?php echo date('Y-m') ?>">

 <label>Semana</label>
 <input type="week" name="semana" id="">

 <label>Área</label>
 <select name="area[]" id="idarea"  class="demo-default">
<option value="">[Seleccionar el área]</option>
<option value="1">Sistemas</option>
<option value="2">Contabilidad</option>
<option value="3">Compras</option>
<option value="4">Gerencia</option>
</select>
<script >
$('#idarea').selectize({
maxItems: 3
});
</script>
<br>
<label>Sexo</label>
<input type="radio" name="sexo"  value="M"  id="">M
<input type="radio" name="sexo"  value="F"  id="">F
<br>
<label>Programas</label>
<input type="checkbox" name="excel" id="">Excel
<input type="checkbox" name="word" id="">Word
<input type="checkbox" name="powerpoint" id="">Power Point

<!-- 
Check    = on
no check = vació 


 -->



<button>Enviar</button>

</form>




</body>
</html>