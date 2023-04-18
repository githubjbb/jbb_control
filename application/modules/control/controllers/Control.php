<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("control_model");
        $this->load->model("general_model");
    }

	/**
	 * Lista catalogo
     * @since 8/11/2021
     * @author BMOTTAG
	 */
	public function catalogo()
	{			
			$arrParam = array();
			$data['infoCatalogo'] = $this->general_model->get_catalogo($arrParam);
			$data['pageHeaderTitle'] = "Catálogo De Sistemas De Información";

			$data["view"] = 'catalogo';
			$this->load->view("layout", $data);
	}

    /**
     * Cargo modal - Catalogo
     * @since 15/11/2021
     */
    public function cargarModalCatalogo() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idCatalogo"] = $this->input->post("idCatalogo");	

			$arrParam = array(
				"table" => "param_lenguaje_programacion",
				"order" => "lenguaje_programacion",
				"id" => 'x'
			);
			$data['listaLenguajeProgramacion'] = $this->general_model->get_basic_search($arrParam);

			$arrParam = array(
				"table" => "param_sistema_operativo",
				"order" => "sistema_operativo",
				"id" => 'x'
			);
			$data['listaSO'] = $this->general_model->get_basic_search($arrParam);

			$arrParam = array("filtroStatus" => TRUE);
			$data['listaUsuarios'] = $this->general_model->get_user($arrParam);

			if ($data["idCatalogo"] != 'x') {
				$arrParam = array(
					"idCatalogo" => $data["idCatalogo"]
				);
				$data['information'] = $this->general_model->get_catalogo($arrParam);
			}		
			$this->load->view("catalogo_modal", $data);
    }

	/**
	 * Guardar datos Catalogo
     * @since 15/11/2021
     * @author BMOTTAG
	 */
	public function save_catalogo()
	{			
			header('Content-Type: application/json');
			$data = array();
		
			$idCatalogo = $this->input->post('hddId');
			
			$msj = "Se adicionó con exito el nuevo registro!";
			if ($idCatalogo != '') {
				$msj = "Se actualizó con exito el registro!";
			}

			if ($idCatalogo = $this->control_model->saveCatalogo()) {
				$data["result"] = true;		
				$this->session->set_flashdata('retornoExito', '<strong>Correcto!</strong> ' . $msj);
			} else {
				$data["result"] = "error";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);
    }

	/**
	 * Detalle catalogo sistema
     * @since 22/11/2021
     * @author BMOTTAG
	 */
	public function detalles($idCatalogo)
	{
			if (empty($idCatalogo) ) {
				show_error('ERROR!!! - You are in the wrong place.');
			}else{
				$data['invoiceDetails'] = FALSE;
				$arrParam = array('idCatalogo' =>$idCatalogo);
				$data['infoCatagolo'] = $this->general_model->get_catalogo($arrParam);//invoice general info
				if(!$data['infoCatagolo']){
					show_error('ERROR!!! - You are in the wrong place.');
				}else{	
					//$data['invoiceDetails'] = $this->general_model->get_invoice_details($arrParam);//invoice details
					$data['pageHeaderTitle'] = "Catálogo De Sistemas De Información - Detalle";

					$data["view"] = 'detalle_registro';
					$this->load->view("layout", $data);
				}
			}
	}

    /**
     * Cargo modal - Detalle Catalogo
     * @since 23/11/2021
     */
    public function cargarModalDetalleCatalogo() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idCatalogo"] = $this->input->post("idCatalogo");	

			if ($data["idCatalogo"] != 'x') {
				$arrParam = array(
					"idCatalogo" => $data["idCatalogo"]
				);
				$data['information'] = $this->general_model->get_catalogo($arrParam);
			}		
			$this->load->view("catalogo_detalle_modal", $data);
    }
	
	/**
	 * Save detalle del catalogo
     * @since 23/11/2021
     * @author BMOTTAG
	 */
	public function save_detalle_catalogo()
	{			
			header('Content-Type: application/json');
			$data = array();
						
			$data["idRecord"] = $idCatalogo = $this->input->post('hddId');

			$msj = "Se adicionó la información!";

			if ($idCatalogo = $this->control_model->saveDetalleCatalogo()) {
				$data["result"] = true;		
				$this->session->set_flashdata('retornoExito', '<strong>Correcto!</strong> ' . $msj);
			} else {
				$data["result"] = "error";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}	
			echo json_encode($data);
    }



	
}