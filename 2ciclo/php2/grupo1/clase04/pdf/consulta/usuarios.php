<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lista de Usuarios</title>
<link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>

<h1 style="padding-left: 40px;" >Lista de Usuarios</h1>

<table class="detalle">
<thead>
<tr>
<th class="detalle-th center">Código</th>
<th class="detalle-th center">Nombres</th>
<th class="detalle-th center">Usuario</th>
</tr>
</thead>
<tbody>
<?php 
$usuario =  new Usuario();
foreach ($usuario->lista() as $key => $value): ?>
<tr>
<td class="detalle-td center"><?php echo $value['id']; ?>        </td>
<td class="detalle-td center"><?php echo $value['nombres']; ?>   </td>
<td class="detalle-td center"><?php echo $value['usuario']; ?> </td>
</tr>
<?php endforeach ?>
</tbody>
</table>



</body>
</html>