<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Ticket</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<h1>Registrar Ticket</h1><hr>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Registrar Ticket</h3>
	</div>
	<div class="panel-body">
	
     <form action="validar.php" method="POST">
     	

    <div class="form-group">
    <label>Nombres y Apellidos</label>
    <input type="text" name="nombres" id="" class="form-control" required="" autofocus="" placeholder="Ingrese sus Nombres y Apellidos">
    </div>
     
    <div class="form-group">
    <label>Categoría</label>
    <select name="categoria" id="" required=""  
     class="form-control">
    <option value="">Seleccionar Categoría</option>
    <option value="1">Soporte de HardWare</option>
    <option value="2">Soporte de SoftWare</option>
    </select>
    </div>

    
    <div class="form-group">
    <label>Fecha</label>
    <input type="date" name="fecha" id="" class="form-control">
    </div>

    <div class="form-group">
    <label>Prioridad</label>
    <input type="radio" name="prioridad" id=""  value="1">Baja
    <input type="radio" name="prioridad" id=""  value="2">Media
    <input type="radio" name="prioridad" id=""  value="3">Alta
    </div>

    <div class="form-group">
    <label>Tipo</label>
    <input type="checkbox" name="tipo" id="">Incidente
    <input type="checkbox" name="tipo" id="">Requerimiento
    </div>

    <div class="form-group">
    <label>Comentario</label>
    <textarea name="" id="" rows="10" class="form-control" placeholder="Ingrese el detalle de su ticket"></textarea>
    </div>


    <div class="form-group">
    <button class="btn btn-primary">Enviar</button>
    </div>

    

     </form>



	</div>
</div>



</div>
</div>
</div>

	
</body>
</html>