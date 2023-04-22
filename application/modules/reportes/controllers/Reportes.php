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
										->setCellValue('E3', 'Dependencia Responsable')
										->setCellValue('F3', 'Versión')
										->setCellValue('G3', 'Categoria')
										->setCellValue('H3', 'Tipo de Desarrollo')
										->setCellValue('I3', 'Fabricante')
										->setCellValue('J3', 'Proveedor de Soporte')
										->setCellValue('K3', 'Fecha de Vencimiento del Soporte')
										->setCellValue('L3', 'Responsable Técnico')
										->setCellValue('M3', 'Responsable Funcional')
										->setCellValue('N3', 'Estado')
										->setCellValue('O3', 'Fecha Inactivación')
										->setCellValue('P3', 'Licenciamiento')
										->setCellValue('Q3', 'Sistema Operativo')
										->setCellValue('R3', 'Lenguaje de programación')
										->setCellValue('S3', 'Conexión LDAP')
										->setCellValue('T3', 'URL apicación:')
										->setCellValue('U3', 'Servidor aplicación')
										->setCellValue('V3', 'Servidor base de datos')
										->setCellValue('W3', 'Nombre base de datos')
										->setCellValue('X3', 'Observaciones');
			$j=4;
			$x = 0; 
			if($infoCatalogo){
				foreach ($infoCatalogo as $lista):
					if ($lista['estado_sistema'] == 1) {
						$estado = 'Activo';
					} else {
						$estado = 'Inactivo';
					}
					$x++;
					$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					$objPHPExcel->getActiveSheet()->getStyle('E'.$j.':G'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, "$x")
												  ->setCellValue('B'.$j, $lista['nombre_sistema'])
												  ->setCellValue('C'.$j, $lista['sigla_sistema'])
												  ->setCellValue('D'.$j, $lista['descripcion_sistema'])
												  ->setCellValue('E'.$j, $lista['dependencia'])
												  ->setCellValue('F'.$j, $lista['version_sistema'])
												  ->setCellValue('G'.$j, $lista['categoria'])
												  ->setCellValue('H'.$j, $lista['tipo_desarrollo'])
												  ->setCellValue('I'.$j, $lista['fabricante'])
												  ->setCellValue('J'.$j, $lista['proveedor_soporte'])
												  ->setCellValue('K'.$j, $lista['fecha_vencimiento_soporte'])
												  ->setCellValue('L'.$j, $lista['tecnico'])
												  ->setCellValue('M'.$j, $lista['funcional'])
												  ->setCellValue('N'.$j, $estado)
												  ->setCellValue('O'.$j, $lista['fecha_inactivacion'])
												  ->setCellValue('P'.$j, $lista['licenciamiento'])
												  ->setCellValue('Q'.$j, $lista['sistema_operativo'])
												  ->setCellValue('R'.$j, $lista['lenguaje_programacion'])
												  ->setCellValue('S'.$j, $lista['conexion_ldap'])
												  ->setCellValue('T'.$j, $lista['url_aplicacion'])
												  ->setCellValue('U'.$j, $lista['servidor_aplicacion'])
												  ->setCellValue('V'.$j, $lista['servidor_base_datos'])
												  ->setCellValue('W'.$j, $lista['nombre_base_datos'])
												  ->setCellValue('X'.$j, $lista['observaciones']);
					$j++;
				endforeach;
			}

			// Set column widths							  
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(80);
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(50);
			$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(70);

			// Set fonts	
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A3:X3')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A3:X3')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
			$objPHPExcel->getActiveSheet()->getStyle('A3:X3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->getActiveSheet()->getStyle('A3:X3')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$objPHPExcel->getActiveSheet()->getStyle('A3:X3')->getFill()->getStartColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);

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