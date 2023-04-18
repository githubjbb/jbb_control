<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("reportes_model");
		$this->load->library('PHPExcel.php');
    }
	
	/**
	 * Generate Reportes in XLS
     * @since 16/02/2022
     * @author BMOTTAG
	 */
	public function generarCatalogoXLS()
	{				
			$nombreArchivo = 'catalogo_sistemas_informacion.xls';

			$arrParam = array();
			$infoCatalogo = $this->reportes_model->get_catalogo($arrParam);

			// Create new PHPExcel object	
			$objPHPExcel = new PHPExcel();

			// Set document properties
			$objPHPExcel->getProperties()->setCreator("JBB APP")
										 ->setLastModifiedBy("JBB APP")
										 ->setTitle("Report")
										 ->setSubject("Report")
										 ->setDescription("JBB Report")
										 ->setKeywords("office 2007 openxml php")
										 ->setCategory("Report");
										 
			// Create a first sheet
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'CATÁLOGO DE SISTEMAS DE INFORMACIÓN');
						
			$objPHPExcel->getActiveSheet()->setCellValue('A3', 'No.')
										->setCellValue('B3', 'Nombre')
										->setCellValue('C3', 'Sigla')
										->setCellValue('D3', 'Descripción')
										->setCellValue('E3', 'Versión')
										->setCellValue('F3', 'Fabricante')
										->setCellValue('G3', 'Fecha de vencimiento del soporte')
										->setCellValue('H3', 'Responsable técnico')
										->setCellValue('I3', 'Responsable funcional')
										->setCellValue('J3', 'Lenguaje de programación')
										->setCellValue('K3', 'URL apicación:')
										->setCellValue('L3', 'Servidor aplicación')
										->setCellValue('M3', 'Servidor base de datos')
										->setCellValue('N3', 'Nombre base de datos')
										->setCellValue('O3', 'Observaciones');

										
			$j=4;
			$x = 0; 

			if($infoCatalogo){
				foreach ($infoCatalogo as $lista):
						$x++;
						$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						$objPHPExcel->getActiveSheet()->getStyle('E'.$j.':G'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

						$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, "$x")
													  ->setCellValue('B'.$j, $lista['nombre_sistema'])
													  ->setCellValue('C'.$j, $lista['sigla_sistema'])
													  ->setCellValue('D'.$j, $lista['descripcion_sistema'])
													  ->setCellValue('E'.$j, $lista['version_sistema'])
													  ->setCellValue('F'.$j, $lista['fabricante'])
													  ->setCellValue('G'.$j, $lista['fecha_vencimiento_soporte'])
													  ->setCellValue('H'.$j, $lista['tecnico'])
													  ->setCellValue('I'.$j, $lista['funcional'])
													  ->setCellValue('J'.$j, $lista['lenguaje_programacion'])
													  ->setCellValue('K'.$j, $lista['url_aplicacion'])
													  ->setCellValue('L'.$j, $lista['servidor_aplicacion'])
													  ->setCellValue('M'.$j, $lista['servidor_base_datos'])
													  ->setCellValue('N'.$j, $lista['nombre_base_datos'])
													  ->setCellValue('O'.$j, $lista['observaciones']);
						$j++;
				endforeach;
			}

			// Set column widths							  
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(80);
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(38);
			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(50);
			$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(70);

			// Set fonts	
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFill()->getStartColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);



			// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
			$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&BPersonal cash register&RPrinted on &D');
			$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

			// Set page orientation and size
			$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
			$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

			// Rename worksheet
			$objPHPExcel->getActiveSheet()->setTitle('Work Order');

			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
			$objPHPExcel->setActiveSheetIndex(0);

			// redireccionamos la salida al navegador del cliente (Excel2007)
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename=' . $nombreArchivo);
			header('Cache-Control: max-age=0');

			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('php://output');
			  
    }

	
}