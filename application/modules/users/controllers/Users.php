<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("users_model");
        $this->load->model("general_model");
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
			$idUser = $this->session->userdata("idUser");
									
			$arrParam = array(
				"idUser" => $idUser
			);
			$data['information'] = $this->general_model->get_user($arrParam);
			$data['pageHeaderTitle'] = "Usuario - Cambiar Contraseña";

			$data["view"] = "form_password";
			$this->load->view("layout", $data);
	}
	

	/**
	 * Actulizar contraseña
	 */
	public function update_password()
	{
			$data = array();			
			
			$newPassword = $this->input->post("inputPassword");
			$confirm = $this->input->post("inputConfirm");
			$passwd = str_replace(array("<",">","[","]","*","^","-","'","="),"",$newPassword); 
			$idUser = $this->input->post("hddId");
						
			if($newPassword == $confirm)
			{					
				if ($this->users_model->updatePassword()) {
					$msj = 'Se actualizó la contraseña';
					$msj .= "<br><strong>Usuario: </strong>" . $this->input->post("hddUser");
					$msj .= "<br><strong>Contraseña: </strong>" . $passwd;
					$this->session->set_flashdata('retornoExito', $msj);
				}else{
						$data["msj"] = "<strong>Error!!!</strong> Ask for help.";
						$data["clase"] = "alert-danger";
				}
			}else{
				$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Debe ingresar el mismo valor.');
			}
			redirect(base_url('users'), 'refresh');
	}
	
	/**
	 * photo
	 */
	public function profile($error = '')
	{			
			$idUser = $this->session->userdata("idUser");
			
			//busco datos del usuario
			$arrParam = array(
				"idUser" => $idUser
			);
			$data['information'] = $this->general_model->get_user($arrParam);
			$data['pageHeaderTitle'] = "Usuario - Perfil";
			
			$data['error'] = $error; //se usa para mostrar los errores al cargar la imagen 
			$data["view"] = 'user_profile';
			$this->load->view("layout", $data);
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
			/*pr($error);
			pr($_FILES); exit;*/

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

        echo $filename; exit;
    }

	/**
	 * users List
     * @since 5/11/2021
     * @author BMOTTAG
	 */
	public function intranet_users($estado=1)
	{			
		$data['estado'] = $estado;
		$arrParam = array("estado" => $estado);
		$data['info'] = $this->general_model->get_intranet_users($arrParam);

		$data['pageHeaderTitle'] = "Administración usuarios con acceso a Intranet";

		$data["view"] = 'intranet_users';
		$this->load->view("layout", $data);
	}

    /**
     * Cargo modal - formulario User
     * @since 19/11/2021
     */
    public function cargarModalIntranetUsers() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idUser"] = $this->input->post("idUser");	
			
			if ($data["idUser"] != 'x') {
				$arrParam = array(
					"idUser" => $data["idUser"]
				);
				$data['information'] = $this->general_model->get_intranet_users($arrParam);
			}			
			$this->load->view("intranet_users_modal", $data);
    }

	/**
	 * Guardar usuario
     * @since 21/11/2021
     * @author BMOTTAG
	 */
	public function save_intranet_user()
	{			
			header('Content-Type: application/json');
			$data = array();
			$idUser = $this->input->post('hddId');
			$msj = "Se adicionó el usuario!";
			if ($idUser != '') {
				$msj = "Se actualizó el usuario!";
			}			
			$log_user = $this->input->post('username');
			$email_user = $this->input->post('email');
			$result_user = false;
			$result_email = false;
			$result_ldap = false;
			//verificar si ya existe el usuario
			$arrParam = array(
				"idUser" => $idUser,
				"column" => "username",
				"value" => $log_user
			);
			$result_user = $this->users_model->verifyUserName($arrParam);
			//verificar si ya existe el correo
			$arrParam = array(
				"idUser" => $idUser,
				"column" => "correoUsuario",
				"value" => $email_user
			);
			$result_email = $this->users_model->verifyUserName($arrParam);
			$data["estado"] = $this->input->post('estado');
			if ($idUser == '') {
				$data["estado"] = 1;//para el direccionamiento del JS, cuando es usuario nuevo no se envia status

				$ldapuser = $this->session->userdata('logUser');
				$ldappass = ldap_escape($this->session->userdata('password'), null, LDAP_ESCAPE_FILTER);
				$ds = ldap_connect("192.168.0.44", "389") or die("No es posible conectar con el directorio activo.");  // Servidor LDAP!
		        if (!$ds) {
		            echo "<br /><h4>Servidor LDAP no disponible</h4>";
		            @ldap_close($ds);
		        } else {
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
					if ($idUser = $this->users_model->saveIntranetUser()) 
					{
						$data["result"] = true;					
						$this->session->set_flashdata('retornoExito', '<strong>Correcto!</strong> ' . $msj);
						$this->session->set_flashdata('retornoError', '');
					} else {
						$data["result"] = "error";					
						$this->session->set_flashdata('retornoError', '<strong>Error!</strong> Ask for help');
						$this->session->set_flashdata('retornoExito', '');
					}
			}
			echo json_encode($data);
    }

	/**
	 * Evio de correo
     * @since 22/11/2021
     * @author BMOTTAG
	 */
	public function email($idUsuario)
	{
			$arrParam = array('idUser' => $idUsuario);
			$infoUsuario = $this->general_model->get_intranet_users($arrParam);
			$to = $infoUsuario[0]['correoUsuario'];

			//reiniciar primero la contraseña del usuario a Jardin2020* y estado colocarlo en cero
			$arrParam['passwd'] = 'Jardin2020*';
			$resetPassword = $this->users_model->resetIntranetUserPassword($arrParam);

			//busco datos parametricos de configuracion para envio de correo
			$arrParam2 = array(
				"table" => "parametros",
				"order" => "id_parametro",
				"id" => "x"
			);
			$parametric = $this->general_model->get_basic_search($arrParam2);

			$paramHost = $parametric[0]["parametro_valor"];
			$paramUsername = $parametric[1]["parametro_valor"];
			$paramPassword = $parametric[2]["parametro_valor"];
			$paramFromName = $parametric[3]["parametro_valor"];

			//mensaje del correo
			$msj = '<p>Sr.(a) ' . $infoUsuario[0]['nombreCompleto'] . ' se reinicio su contraseña para acceder a la INTRANET del Jardín Botánico de Bogotá,';
			$msj .= ' siga el enlace con las credenciales para acceder.</p>';
			$msj .= '<p>Recuerde cambiar su contraseña para activar su cuenta.</p>';
			$msj .= '<p><strong>Enlace: </strong>http://intranet.jbb.gov.co';
			$msj .= '<br><strong>Usuario: </strong>' . $infoUsuario[0]['username'];
			$msj .= '<br><strong>Contraseña: </strong>' . $arrParam['passwd'];
									
			$mensaje = "<p>$msj</p>
						<p>Cordialmente,</p>
						<p><strong>Jardín Botánico de Bogotá</strong></p>";		

			require_once(APPPATH.'libraries/PHPMailer/class.phpmailer.php');
            $mail = new PHPMailer(true);

            try {
                    $mail->IsSMTP(); // set mailer to use SMTP
                    $mail->Host = $paramHost; // specif smtp server
                    $mail->SMTPSecure= "tls"; // Used instead of TLS when only POP mail is selected
                    $mail->Port = 587; // Used instead of 587 when only POP mail is selected
                    $mail->SMTPAuth = true;
					$mail->Username = $paramUsername; // SMTP username
                    $mail->Password = $paramPassword; // SMTP password
                    $mail->FromName = $paramFromName;
                    $mail->From = $paramUsername;
                    $mail->AddAddress($to, 'Usuario Intranet JBB');
                    $mail->WordWrap = 50;
                    $mail->CharSet = 'UTF-8';
                    $mail->IsHTML(true); // set email format to HTML
                    $mail->Subject = 'Jardín Botánico de Bogotá - Control Acceso Intranet';

                    $mail->Body = nl2br ($mensaje,false);

                    $data['linkBack'] = "users/intranet_users";
					$data['pageHeaderTitle'] = "Usuario - Cambiar Contraseña";

                    if($mail->Send())
                    {
						$data['msj'] = '<h3 class="profile-username text-center">Reinicio Contraseña</h3>';
						$data['msj'] .= '<p class="text-muted text-center">Se reinicio la contraseña del usuario.</p>';
						$data['msj'] .= '<ul class="list-group list-group-unbordered mb-3">
											<li class="list-group-item">
											<b>Nombre:</b> <a class="float-right">' . $infoUsuario[0]['nombreCompleto'] . '</a>
											</li>
											<li class="list-group-item">
											<b>Usuario:</b> <a class="float-right">' . $infoUsuario[0]['username'] . '</a>
											</li>
											<li class="list-group-item">
											<b>Contraseña:</b> <a class="float-right">' .  $arrParam['passwd'] . '</a>
											</li>
										</ul>';
						$data['msj'] .= '<p class="text-muted text-center">La información con los datos de ingreso fue enviada al correo electrónico del usuario, quien debe cambiar la contraseña para activar la cuenta.</p>';
                        $this->session->set_flashdata('retorno_exito', 'Creaci&oacute;n de usuario exitosa!. La informaci&oacute;n para activar su cuenta fu&eacute; enviada al correo registrado.');
                    }else{
						$data['msj'] = 'Se actualizó la contraseña del usuario, sin embargo no se pudo enviar el correo electrónico.';
						$data['msj'] .= '<br>';
						$data['msj'] .= '<br><strong>Nombre Usuario: </strong>' . $infoUsuario[0]['first_name'];
						$data['msj'] .= '<br><strong>Contraseña: </strong>' . $arrParam['passwd'];
						$data['clase'] = 'alert-success';

                        $this->session->set_flashdata('retorno_error', 'Se creo la persona, sin embargo no se pudo enviar el correo electr&oacute;nico.');
                       // redirect(base_url(), 'refresh');
                       //exit;

                    }

					$data["view"] = "template/answer";
					$this->load->view("layout", $data);

                }catch (Exception $e){
                    print_r($e->getMessage());
                    exit;
                }

	}

	
}