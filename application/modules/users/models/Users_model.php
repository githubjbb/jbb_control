<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Users_model extends CI_Model {

	    function __construct(){        
	        parent::__construct();
	    }
	    
	    /**
	     * Actualizar contraseña usuario
	     * @author BMOTTAG
	     * @since  30/11/2020
	     */
	    public function updatePassword()
		{
				$idUser = $this->input->post("hddId");
				$newPassword = $this->input->post("inputPassword");
				$passwd = str_replace(array("<",">","[","]","*","^","-","'","="),"",$newPassword); 
				$passwd = md5($passwd);
				
				$data = array(
					'password' => $passwd,
					'status' => 1
				);

				$this->db->where('id_user', $idUser);
				$query = $this->db->update('user', $data);

				if ($query) {
					return true;
				} else {
					return false;
				}
	    }

		/**
		 * Verify if the user already exist by username
		 * @author BMOTTAG
		 * @since  21/11/2021
		 */
		public function verifyUserName($arrData) 
		{
				$db2 = $this->load->database('intranets_sige',true);

				if (array_key_exists("idUser", $arrData)) {
					$db2->where('id !=', $arrData["idUser"]);
				}			

				$db2->where($arrData["column"], $arrData["value"]);
				$query = $db2->get("SIGE");

				if ($query->num_rows() >= 1) {
					return true;
				} else{ return false; }
		}

		/**
		 * Add/Edit USER
		 * @since 21/11/2021
		 */
		public function saveIntranetUser() 
		{
				$db2 = $this->load->database('intranets_sige',true);

				$idUser = $this->input->post('hddId');
				
				$data = array(
					'username' => addslashes($this->security->xss_clean($this->input->post('username'))),
					'nombreCompleto' => addslashes($this->security->xss_clean($this->input->post('nombreCompleto'))),
					'correoUsuario' => addslashes($this->security->xss_clean($this->input->post('email'))),
					'tipoVinculacion' => addslashes($this->security->xss_clean($this->input->post('tipoVinculacion'))),
					'fechaFinalizacionContrato' => addslashes($this->security->xss_clean($this->input->post('fechaFinContrato'))),
					'estado_usuario' => addslashes($this->security->xss_clean($this->input->post('estado')))
				);	

				//revisar si es para adicionar o editar
				if ($idUser == '') 
				{
					$data['dateModified'] = date("Y-m-d G:i:s");
					$data['clv'] = 'A9AA73BA74C5DDD2E8AF1F97D1F2E223DC5B5AFACCABD87B6490E1A522AEDB7E';//Jardin2020*
					$query = $db2->insert('SIGE', $data);
				} else {
					$db2->where('id', $idUser);
					$query = $db2->update('SIGE', $data);
				}
				if ($query) {
					return true;
				} else {
					return false;
				}
		}

	    /**
	     * Reset intranet users password
	     * @author BMOTTAG
	     * @since  22/1/2021
	     */
	    public function resetIntranetUserPassword($arrData)
		{
				$db2 = $this->load->database('intranets_sige',true);
				$passwd = 'A9AA73BA74C5DDD2E8AF1F97D1F2E223DC5B5AFACCABD87B6490E1A522AEDB7E';
				$data = array(
					'clv' => $passwd
				);
				$db2->where('id', $arrData["idUser"]);
				$query = $db2->update('SIGE', $data);
				if ($query) {
					return true;
				} else {
					return false;
				}
	    }
	    
	}