<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("dashboard_model");
		$this->load->model("general_model");
    }

	/**
	 * SUPER ADMIN DASHBOARD
	 */
	public function super_admin()
	{	
			$data['noCompanies'] = false;

			$arrParam = array("status" => 1);
			$data['companyInfo'] = $this->general_model->get_app_company($arrParam);
			$data['pageHeaderTitle'] = "Dashboard SUPER ADMIN";

			$data["view"] = "dashboard_admin";
			$this->load->view("layout", $data);
	}
		
	/**
	 * ADMINISTRATO DASHBOARD
	 */
	public function admin()
	{			
			$arrParam = array("tipoVinculacion" => 1);	
			$data['noUsuariosPlanta'] = $this->dashboard_model->countIntranetUsers($arrParam);

			$arrParam = array("tipoVinculacion" => 2);	
			$data['noUsuariosContratistas'] = $this->dashboard_model->countIntranetUsers($arrParam);	

			$data['pageHeaderTitle'] = "Dashboard";

			$data["view"] = "dashboard";
			$this->load->view("layout", $data);
	}
	
}