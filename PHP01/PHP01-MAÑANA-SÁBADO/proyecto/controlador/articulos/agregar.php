<?php 

 include'../../autoload.php';

 $codigo       = htmlentities(trim($_POST['codigo']),ENT_QUOTES,"UTF-8");
 $descripcion  =  htmlentities(trim($_POST['descripcion']),ENT_QUOTES,"UTF-8");
 $unidad       =  trim($_POST['unidad']);
 $cantidad     =  trim($_POST['cantidad']);
 $precio       =  trim($_POST['precio']);

if (strlen($codigo)>0 AND strlen($descripcion)>0 AND strlen($unidad)>0) 
{

 $articulos  =  new Articulos();
 $valor  = $articulos->agregar($codigo,$descripcion,$unidad,$cantidad,$precio);

if ($valor=='ok') 
{

 echo "<script>
 swal({
  title: 'Buen Trabajo',
  text: 'Artículo Registrado',
  timer: 2000,
  type : 'success'
})
</script>";

} 
else
{
 echo "<script>
swal({
  title: 'Error',
  text: 'Consulte al área de Soporte',
  timer: 2000,
  type : 'error'
})
 </script>";
}



}
else
{
  echo "algún dato esta vacio";
}




 ?>