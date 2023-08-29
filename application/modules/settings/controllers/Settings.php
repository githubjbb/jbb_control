<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("settings_model");
        $this->load->model("general_model");
		$this->load->helper('form');
    }
	
	/**
	 * users List
     * @since 15/12/2016
     * @author BMOTTAG
	 */
	public function users($status=1)
	{			
			$data['status'] = $status;
			if($status == 1){
				$arrParam = array("filtroStatus" => TRUE);
			}else{
				$arrParam = array("status" => $status);
			}
			$idRole = $this->session->idRole;
			if($idRole != 99){
				$arrParam['idCompany'] = $this->session->idCompany;
			}
			$data['info'] = $this->general_model->get_user($arrParam);
			$data['pageHeaderTitle'] = "Configuración - Usuarios";

			$data["view"] = 'users';
			$this->load->view("layout", $data);
	}
	
    /**
     * Cargo modal - formulario User
     * @since 15/12/2016
     */
    public function cargarModalUsers() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idUser"] = $this->input->post("idUser");	
			
			$idRole = $this->session->idRole;
			$arrParam = array();
			if($idRole != 99){
				$arrParam = array("filtro" => TRUE);	
			}
			$data['roles'] = $this->general_model->get_roles($arrParam);

			if ($data["idUser"] != 'x') {
				$arrParam = array(
					"idUser" => $data["idUser"]
				);
				$data['information'] = $this->general_model->get_user($arrParam);
			}
			
			$this->load->view("users_modal", $data);
    }
	
	/**
	 * Update User
     * @since 15/12/2016
     * @author BMOTTAG
	 */
	public function save_user()
	{			
			header('Content-Type: application/json');
			$data = array();
			$idUser = $this->input->post('hddId');
			$bandera = true;
			$msj = "Se adicionó el usuario!";
			if ($idUser != '') {
				$bandera = false;
				$msj = "Se actualizó el usuario!";
			}
			$log_user = $this->input->post('user');
			$email_user = $this->input->post('email');
			$result_user = false;
			$result_email = false;
			$result_ldap = false;
			//verificar si ya existe el usuario
			$arrParam = array(
				"idUser" => $idUser,
				"column" => "log_user",
				"value" => $log_user
			);
			$result_user = $this->settings_model->verifyUser($arrParam);
			//verificar si ya existe el correo
			$arrParam = array(
				"idUser" => $idUser,
				"column" => "email",
				"value" => $email_user
			);
			$result_email = $this->settings_model->verifyUser($arrParam);
			$data["status"] = $this->input->post('status');
			if ($idUser == '') {
				$data["status"] = 1;//para el direccionamiento del JS, cuando es usuario nuevo no se envia status

				$ds = ldap_connect("192.168.0.44", "389") or die("No es posible conectar con el directorio activo.");  // Servidor LDAP!
		        if (!$ds) {
		            echo "<br /><h4>Servidor LDAP no disponible</h4>";
		            @ldap_close($ds);
		        } else {
		        	$ldapuser = $this->session->userdata('logUser');
					$ldappass = ldap_escape($this->session->userdata('password'), ".,_,-,+,*,#,$,%,&,@", LDAP_ESCAPE_FILTER);
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
		            } else {
		            	$filter = "(&(sAMAccountName=" . $log_user . ")(mail=" . $email_user . "))";
		            	$attributes = array('sAMAccountName', 'mail');
		            	$result = @ldap_search($ds, $binddn, $filter, $attributes);
		            	if (@ldap_count_entries($ds, $result) == 1) {
		            		$result_ldap = false;
		            	} else {
		            		$result_ldap = true;
		            	}
		            }
		        }

			}

			if ($result_user || $result_email || $result_ldap)
			{
				$data["result"] = "error";
				if($result_user)
				{
					$data["mensaje"] = " Error! El nombre de usuario ya existe.";
					$this->session->set_flashdata('retornoError', '<strong>Error!</strong> El nombre de usuario ya existe.');
				}
				if($result_email)
				{
					$data["mensaje"] = " Error! El correo ya existe.";
					$this->session->set_flashdata('retornoError', '<strong>Error!</strong> El correo ya existe');
				}
				if($result_user && $result_email)
				{
					$data["mensaje"] = " Error! El nombre de usuario y correo ya existen.";
					$this->session->set_flashdata('retornoError', '<strong>Error!</strong> El nombre de usuario y correo ya existen.');
				}

				if ($result_ldap) {
					$data["mensaje"] = " Error. El usuario no existe en el directorio activo.";
					$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> El usuario no esta creado en el directorio activo.');
				}

			} else {
					if ($idUser = $this->settings_model->saveUser()) 
					{
						$data["result"] = true;					
						$this->session->set_flashdata('retornoExito', '<strong>Correcto!</strong> ' . $msj);
					} else {
						$data["result"] = "error";					
						$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Ask for help');
					}
			}
			echo json_encode($data);
    }
	
	/**
	 * Reset employee password
	 * Reset the password to '123456'
	 * And change the status to '0' to changue de password 
     * @since 11/1/2017
     * @author BMOTTAG
	 */
	public function resetPassword($idUser)
	{
			if ($this->settings_model->resetEmployeePassword($idUser)) {
				$this->session->set_flashdata('retornoExito', '<strong>Correcto!</strong> You have reset the Employee pasword to: 123456');
			} else {
				$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Ask for help');
			}
			
			redirect("/settings/employee/",'refresh');
	}	

	/**
	 * Change password
     * @since 15/4/2017
     * @author BMOTTAG
	 */
	public function change_password($idUser)
	{
			if (empty($idUser)) {
				show_error('ERROR!!! - You are in the wrong place. The ID USER is missing.');
			}
			
			$arrParam = array("idUser" => $idUser);
			$data['information'] = $this->general_model->get_user($arrParam);
			$data['pageHeaderTitle'] = "Settings - Change Password";
		
			$data["view"] = "form_password";
			$this->load->view("layout", $data);
	}
	
	/**
	 * Update user password
	 */
	public function update_password()
	{
			$data = array();			
			
			$newPassword = $this->input->post("inputPassword");
			$confirm = $this->input->post("inputConfirm");
			$userStatus = $this->input->post("hddStatus");
			$idUser = $this->input->post("hddId");
			
			//Para redireccionar el usuario
			if($userStatus!=2){
				$userStatus = 1;
			}
			
			$passwd = str_replace(array("<",">","[","]","*","^","-","'","="),"",$newPassword); 
						
			if($newPassword == $confirm)
			{					
				if ($this->settings_model->updatePassword()) {
					$msj = 'Se actualizó la contraseña del usuario';
					$msj .= "<br><strong>Nombre Usuario: </strong>" . $this->input->post("hddUser");
					$msj .= "<br><strong>Contraseña: </strong>" . $passwd;
					$this->session->set_flashdata('retornoExito', $msj);
				} else {
					$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Ask for help');
				}
			}else{
				$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Please enter the same value again.');
			}
			redirect(base_url('settings/change_password/' . $idUser), 'refresh');
	}
	
	/**
	 * clients List
     * @since 4/7/2021
     * @author BMOTTAG
	 */
	public function param_clients($status=1)
	{			
			$data['status'] = $status;
			
			$arrParam = array("status" => $status);			
			$data['info'] = $this->general_model->get_param_clients($arrParam);
			$data['pageHeaderTitle'] = "Settings - Clients";
pr($data['info'] ); exit;
			$data["view"] = 'param_clients';
			$this->load->view("layout", $data);
	}
	
    /**
     * Cargo modal - formulario Client
     * @since 4/7/2021
     */
    public function cargarModalParamClients() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idParamClient"] = $this->input->post("idParamClient");	
			
			if ($data["idParamClient"] != 'x') {
				$arrParam = array(
					"idParamClient" => $data["idParamClient"]
				);
				$data['information'] = $this->general_model->get_param_clients($arrParam);
			}

			$this->load->view("param_clients_modal", $data);
    }
	
	/**
	 * Update Client
     * @since 12/6/2021
     * @author BMOTTAG
	 */
	public function save_param_client()
	{			
			header('Content-Type: application/json');
			$data = array();
			
			$idClient = $this->input->post('hddId');

			$msj = "The Client was added!";
			$data["status"] = 1;
			if ($idClient != '') {
				$msj = "The Client was updated!";
				$data["status"] = $this->input->post('status');
			}			

			if ($this->settings_model->saveParamClient()) {
				$data["result"] = true;					
				$this->session->set_flashdata('retornoExito', '<strong>Right!</strong> ' . $msj);
			} else {
				$data["result"] = "error";					
				$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Ask for help');
			}
			echo json_encode($data);
    }

	/**
	 * Company info
     * @since 12/7/2021
     * @author BMOTTAG
	 */
	public function company($error = '')
	{			
			$arrParam = array('idCompany' =>$this->session->idCompany);
			$data['appCompany'] = $this->general_model->get_app_company($arrParam);//app company info

			$arrParam = array(
				"table" => "parametros",
				"order" => "id_parametro",
				"id" => "x"
			);
			$data['datosParametricos'] = $this->general_model->get_basic_search($arrParam);

			$data['pageHeaderTitle'] = "Configuración - Información aplicación";

			$data['error'] = $error; //se usa para mostrar los errores al cargar la imagen 
			$data["view"] = 'company_info';
			$this->load->view("layout", $data);
	}

    /**
     * Cargo modal- formulario para editar info del APP CLIENT
     * @since 13/7/2021
     */
    public function cargarModalUpdateAPPCompany() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['idCompany'] = $this->input->post('idCompany');

			$arrParam = array("idCompany" => $data["idCompany"]);
			$data['information'] = $this->general_model->get_app_company($arrParam);
						
			$this->load->view("app_company_modal", $data);
    }
	
	/**
	 * Save company info
     * @since 19/7/2021
     * @author BMOTTAG
	 */
	public function update_company()
	{			
			header('Content-Type: application/json');
			$data = array();
						
			$msj = "Se actualizó la Información.";

			if ($idInvoice = $this->settings_model->saveCompany()) {
				$data["result"] = true;		
				$this->session->set_flashdata('retornoExito', '<strong>Correcto!</strong> ' . $msj);
			} else {
				$data["result"] = "error";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}
			
			echo json_encode($data);
    }

    /**
     * Cargo modal- formulario para adicionar taxes
     * @since 20/7/2021
     */
    public function cargarModalAddTax() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos

			$data['information'] = FALSE;
			$data['idTax'] = $this->input->post('idTax');

			if ($data["idTax"] != 'x') {
				$arrParam = array("idTax" => $data["idTax"]);
				$data['information'] = $this->general_model->get_taxes($arrParam);
			}

			$this->load->view("tax_modal", $data);
    }
	
	/**
	 * Add taxes
     * @since 20/7/2021
     * @author BMOTTAG
	 */
	public function save_tax()
	{			
			header('Content-Type: application/json');

			$idTax = $this->input->post('hddId');
			$msj = "The Tax was added!";
			if ($idTax != '') {
				$msj = "The Tax was updated!";
			}	

			if ($idInvoice = $this->settings_model->saveTax()) {
				$data["result"] = true;		
				$this->session->set_flashdata('retornoExito', '<strong>Right!</strong> ' . $msj);
			} else {
				$data["result"] = "error";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}
			
			echo json_encode($data);
    }

    //FUNCIÓN PARA SUBIR LA IMAGEN 
    function do_upload() 
	{
			$config['upload_path'] = './images/users/';
			$config['overwrite'] = true;
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '3000';
			$config['max_width'] = '2024';
			$config['max_height'] = '2008';
			$idUser = $this->session->userdata("idUser");
			$config['file_name'] = $idUser;

			$this->load->library('upload', $config);
			//SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA 
			if (!$this->upload->do_upload()) {
				$error = $this->upload->display_errors();
pr($error);
pr($_FILES); exit;

				$this->profile($error);
			} else {
				$file_info = $this->upload->data();//subimos la imagen
				
				//USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
				//ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
				$this->_create_thumbnail($file_info['file_name']);
				$data = array('upload_data' => $this->upload->data());
				$imagen = $file_info['file_name'];
				$path = "images/users/thumbs/" . $imagen;
				
				//actualizamos el campo photo
				$arrParam = array(
					"table" => "user",
					"primaryKey" => "id_user",
					"id" => $idUser,
					"column" => "photo",
					"value" => $path
				);				
				if($this->general_model->updateRecord($arrParam))
				{
					$this->session->set_flashdata('retornoExito', '<strong>Nice!</strong> User photo updated');
				}else{
					$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Ask for help');
				}
				redirect('users/profile');
			}
    }
	
    //FUNCIÓN PARA CREAR LA MINIATURA A LA MEDIDA QUE LE DIGAMOS
    function _create_thumbnail($filename) 
	{
        $config['image_library'] = 'gd2';
        //CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
        $config['source_image'] = 'images/users/' . $filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
        $config['new_image'] = 'images/users/thumbs/';
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }
	
	

	
}