<?php 

$excel  = $_FILES['excel'];
$filas  = $_POST['filas'];

if ($excel['type']=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') 
{


include'../PHPExcel/Classes/PHPExcel.php';
include'../PHPExcel/Classes/PHPExcel/Reader/Excel2007.php';
include'../autoload.php';

//cargamos el archivo al servidor con el mismo nombre
//solo le agregue el sufijo bak_ 
$archivo   = $excel['name'];
$tipo      = $excel['type'];
$destino   = "bak_" . $archivo;
if (copy($excel['tmp_name'], $destino))
{
#echo "Archivo Cargado Con Éxito";
}
else
{
echo "Error Al Cargar el Archivo";
}

#Convertimos el excel subido en un array
if (file_exists("bak_" . $archivo)) 
{

// Cargando la hoja de cálculo
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load("bak_" . $archivo);
$objFecha = new PHPExcel_Shared_Date();
// Asignar hoja de excel activa
$objPHPExcel->setActiveSheetIndex(0);


// Llenamos el arreglo con los datos  del archivo xlsx
for ($i = 2; $i <= $filas; $i++)
{
$_DATOS_EXCEL[$i]['nombres']    = $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['usuario'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['pass'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();

}

}

//si por algo no cargo el archivo bak_ 
else 
{
echo "Necesitas primero importar el archivo";
}


#Subir la información a la Base De Datos

foreach ($_DATOS_EXCEL as $key => $value) {

if (strlen($value['usuario'])>0)
{

$usuario  =  new Usuario();
echo $usuario->agregar($value['nombres'],$value['usuario'],md5($value['pass']));
}
else 
{
echo "vacio";
}


}

unlink($destino);



} 
else
{
echo "Solo se permiten archivos excel(.xlsx)";
}





 ?>