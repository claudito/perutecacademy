<?php
  #PHPEXCEL
  include'../../librerias/PHPExcel/Classes/PHPExcel.php';
  #Autoload
  include'../../autoload.php';
  $conexion  = new Conexion();

	$alumnos  =  new Alumnos();
	if(count($alumnos->lista()) > 0 )
	{

     if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		


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

		$tituloReporte   = "REPORTE DE ALUMNO";
		$titulosColumnas = array('ID', 'NOMBRES', 'APELLIDOS','EDAD','USUARIO','CONTRASEÑA');


						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A3',  $titulosColumnas[0])
		            ->setCellValue('B3',  $titulosColumnas[1])
        		    ->setCellValue('C3',  $titulosColumnas[2])
        		    ->setCellValue('D3',  $titulosColumnas[3])
        		    ->setCellValue('E3',  $titulosColumnas[4])
        		    ->setCellValue('F3',  $titulosColumnas[5])
        		   
        		    ;
		
		$i = 4;
	    foreach ($alumnos->lista() as $key => $value) {
	    	
	    	$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValueExplicit('A'.$i,  $value['id'],PHPExcel_Cell_DataType::TYPE_NUMERIC)
		            ->setCellValueExplicit('B'.$i,  $value['nombres'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('C'.$i,  $value['apellidos'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('D'.$i,  $value['dni'],PHPExcel_Cell_DataType::TYPE_NUMERIC)
        		    ->setCellValueExplicit('E'.$i,  $value['user'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('F'.$i,  $value['user'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    

        		     ;
					$i++;
	    }

       
				
		for($i = 'A'; $i <= 'C'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('ALUMNOS');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="REPORTE DE ALUMNOS.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;

		
	}
	else
	{
	echo "No hay resultados para mostrar";
	}
?>