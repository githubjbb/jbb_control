<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("general_model");
    }

	/**
	 * Index Page for this controller.
	 * @param int $id: id del vehiculo encriptado para el hauling
	 */
	public function index()
	{
			$this->session->sess_destroy();
			$this->load->view('login');
	}
	
	public function validateUser()
	{
			$login = $this->input->post("inputLogin");
	        $passwd = $this->input->post("inputPassword");
	        
	        $ds = ldap_connect("192.168.0.44", "389") or die("No es posible conectar con el directorio activo.");  // Servidor LDAP!
	        if (!$ds) {
	            echo "<br /><h4>Servidor LDAP no disponible</h4>";
	            @ldap_close($ds);
	        } else {
	        	$ldapuser = $login;
	        	$ldappass = ldap_escape($passwd, ".,_,-,+,*,#,$,%,&,@", LDAP_ESCAPE_FILTER);
	            $ldapdominio = "jardin";
	            $ldapusercn = $ldapdominio . "\\" . $ldapuser;
	            $binddn = "dc=jardin, dc=local";
	            ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
            	ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
	            $r = @ldap_bind($ds, $ldapusercn, $ldappass);
	            if (!$r) {
	                @ldap_close($ds);
	                $data["msj"] = "Error de autenticación. Por favor revisar usuario y contraseña de red.";
	                $this->session->sess_destroy();
					$this->load->view('login', $data);
	                /*$data["view"] = "error";
	                $data["mensaje"] = "Error de autenticación. Revisar usuario y contraseña de red.";
	                $this->load->view("layout", $data);*/
	            } else {
					//busco datos del usuario
					/*$arrParam = array(
						"table" => "usuarios",
						"order" => "id_user",
						"column" => "log_user",
						"id" => $login
					);
					$userExist = $this->general_model->get_basic_search($arrParam);
					if ($userExist)
					{*/
						$arrParam = array(
							"login" => $login
							//"passwd" => $passwd
						);
						$user = $this->login_model->validateLogin($arrParam); //brings user information from user table
						if(($user["valid"] == true)) 
						{
							$idRole = intval($user["idRole"]);
							//busco url del dashboard de acuerdo al rol del usuario
							$arrParam = array("idRole" => $idRole);
							$rolInfo = $this->general_model->get_roles($arrParam);
							//busco info de la empresa para el usuarios
							$arrParam = array("idCompany" => $user["idCompany"]);
							$companyInfo = $this->general_model->get_app_company($arrParam);

							$sessionData = array(
								"auth" => "OK",
								"idUser" => $user["idUser"],
								"idRole" => $user["idRole"],
								"idCompany" => $companyInfo[0]['id_company'],
								"companyName" => $companyInfo[0]['company_name'],
								"dashboardURL" => $rolInfo[0]['dashboard_url'],
								"firstname" => $user["firstname"],
								"lastname" => $user["lastname"],
								"name" => $user["firstname"] . ' ' . $user["lastname"],
								"logUser" => $user["logUser"],
								"password" => $passwd,
								"status" => $user["status"],
								"photo" => $user["photo"]
							);

							$this->session->set_userdata($sessionData);
							$this->login_model->redireccionarUsuario();
						} else {					
							$data["msj"] = "<strong>" . $login . "</strong> no esta registrado.";
							$this->session->sess_destroy();
							$this->load->view('login', $data);
						}
					/*} else {
						$data["msj"] = "<strong>" . $login . "</strong> no esta registrado.";
						$this->session->sess_destroy();
						$this->load->view('login', $data);
					}*/
	            }
	        }
	}
	
}