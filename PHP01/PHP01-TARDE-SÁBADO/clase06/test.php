<?php 

$pdo = new PDO('mysql:host=localhost;dbname=academia_bd', 'root', '');
$sentencia = $pdo->query("SELECT id,nombres,apellidos,DATE_FORMAT(fecha_creacion,'%d/%m/%Y %H:%i:%s') as fecha_creacion FROM usuario;");
$fila = $sentencia->fetch(PDO::FETCH_ASSOC);
echo htmlentities($fila['fecha_creacion']);



 ?>