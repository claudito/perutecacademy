<?php 

/*
$_GET[]
$_POST[]
$_REQUEST[]
$_FILES[]



*/



$codigo            =  $_POST['codigo'];
$nombres           =  $_POST['nombres'];
$apellidos         =  $_POST['apellidos'];
$fecha_ingreso     =  $_POST['fecha_ingreso'];
$fecha_nacimiento  =  $_POST['fecha_nacimiento'];
$talla             =  $_POST['talla'];
$sexo              =  $_POST['sexo'];
$word              = (isset($_POST['word'])) ? 'SI' : 'NO' ;
$excel             = (isset($_POST['excel'])) ? 'SI' : 'NO' ;
$access            = (isset($_POST['access'])) ? 'SI' : 'NO' ;
$comentario        =  $_POST['comentario'];
$foto              =  $_FILES['foto'];
 ?>

 <ul>
 <li>Código:   <?php echo $codigo; ?></li>
 <li>Nombres:  <?php echo $nombres; ?></li>
 <li>Apellidos: <?php echo $apellidos; ?></li>
 <li>Fecha de Ingreso: <?php echo $fecha_ingreso; ?></li>
 <li>Fecha de Nacimiento: <?php echo $fecha_nacimiento; ?></li>
 <li>Talla: <?php echo $talla; ?></li>
 <li>Sexo: <?php echo $sexo; ?></li>
 <li>
 Habilidades:
 <ul>
 <li>Word:   <?php echo $word; ?></li>
 <li>Excel:  <?php echo $excel; ?></li>
 <li>Access: <?php echo $access; ?></li>
 </ul>
 </li>
 <li>Comentario: <?php echo $comentario; ?></li>
 <li>Foto: 
 <br>
 <?php 
   
  //var_dump($foto);

/*
  foreach ($foto as $key => $value) {
  	
    echo $key.':  '.$value."</br>";

  }
  echo "</br>";

  echo $foto['size'];
*/

if (move_uploaded_file($foto['tmp_name'], './img/'.$foto['name']))
{
 echo "<img src='img/".$foto['name']."'>";
} 
else 
{
  echo "error al cargar el archivo";
}

 


 
 ?>
 </li>
 </ul>