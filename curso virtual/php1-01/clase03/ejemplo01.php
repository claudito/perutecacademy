<?php 
include'autoload.php';
 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Ejemplo 01</title>
 </head>
 <body>

 <table>
 <thead>
 <tr>
 <th>Código</th>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Dni</th>
 </tr>
 </thead>
 <tbody>
<?php 
$usuarios  =  new Usuario();
foreach ($usuarios->lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id']; ?></td>
<td><?php echo $value['nombres']; ?></td>
<td><?php echo $value['apellidos']; ?></td>
<td><?php echo $value['dni']; ?></td>
</tr>
<?php endforeach ?>
 </tbody>
 </table>

<br>
<select name="" id="">
<option value="">[Seleccionar]</option>
<?php foreach ($usuarios->lista() as $key => $value): ?>
<option value="<?php echo $value['id'] ?>"><?php echo $value['nombres'].' '.$value['apellidos']; ?></option>
<?php endforeach ?>
</select>

<br>

<?php foreach ($usuarios->lista() as $key => $value): ?>
<input type="radio" name="" id="" ><?php echo $value['nombres'] ?>
<?php endforeach ?>






 </body>
 </html>