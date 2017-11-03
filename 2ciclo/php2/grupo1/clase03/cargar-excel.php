<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Importar Excel</title>
</head>
<body>

<form action="reporte/subir-excel.php" method="POST" 
 enctype="multipart/form-data">
	
<input type="file" name="excel" id="" required="">
<select name="filas" id="" required="">
<option value="">[Seleccionar]</option>
<option value="6">5</option>
<option value="11">10</option>
<option value="16">15</option>
</select>
<button>Subir</button>


</form>

</body>
</html>