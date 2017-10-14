<?php
     
    /** Se agrega la libreria PHPExcel */
    include'../PHPExcel/Classes/PHPExcel.php';

    include'../autoload.php';

    $usuario  =  new Usuario();
   
	if (count($usuario->lista())>0) 
	{
	    
	   if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

	  // Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

     // Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("LUIS CLAUDIO") //Autor
							 ->setLastModifiedBy("LUIS CLAUDIO") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte Excel")
							 ->setSubject("Reporte Excel")
							 ->setDescription("Reporte de Alumnos")
							 ->setKeywords("Reporte de Alumnos")
							 ->setCategory("Reporte excel");

    $tituloReporte   = "REPORTE DE USUARIOS";
	$titulosColumnas = array('CÓDIGO', 'NOMBRES', 'USUARIO');

	// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A3',  $titulosColumnas[0])
		            ->setCellValue('B3',  $titulosColumnas[1])
        		    ->setCellValue('C3',  $titulosColumnas[2])        		   
        		    ;

    //Se agregan los datos de los alumnos
		$i = 4;
        foreach ($usuario->lista() as $key => $value) 
        {

$objPHPExcel->setActiveSheetIndex(0)
->setCellValueExplicit('A'.$i,  $value['id'],PHPExcel_Cell_DataType::TYPE_NUMERIC)
->setCellValueExplicit('B'.$i,  $value['nombres'],PHPExcel_Cell_DataType::TYPE_STRING)
->setCellValueExplicit('C'.$i,  $value['usuario'],PHPExcel_Cell_DataType::TYPE_STRING)

;
					$i++;
        }


for($i = 'A'; $i <= 'C'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}


// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('USUARIOS');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="REPORTE DE USUARIOS.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;






	} 
	else
	{
	  echo "no hay registros disponibles";
	}
    





?>