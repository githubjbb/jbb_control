<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Control_model extends CI_Model {

	    function __construct(){        
	        parent::__construct();      
	    }
		
		/**
		 * Add/Edit INVOICE
		 * @since 5/7/2021
		 */
		public function saveCatalogo() 
		{				
				$idCatalogo = $this->input->post('hddId');
				$data = array(
					'nombre_sistema' => addslashes($this->security->xss_clean($this->input->post('nombre'))),
					'sigla_sistema' => addslashes($this->security->xss_clean($this->input->post('sigla'))),
					'descripcion_sistema' => addslashes($this->security->xss_clean($this->input->post('descripcion'))),
					'version_sistema' => addslashes($this->security->xss_clean($this->input->post('version_sistema'))),
					'fecha_creacion' =>  date("Y-m-d G:i:s"),
					'fecha_vencimiento_soporte' => addslashes($this->security->xss_clean($this->input->post('fechaVencimiento'))),
					'fk_id_responsable_tecnico' => addslashes($this->security->xss_clean($this->input->post('responsable_tecnico'))),
					'fk_id_responsable_funcional' => addslashes($this->security->xss_clean($this->input->post('responsable_funcional'))),
					'fk_id_dependencia' => addslashes($this->security->xss_clean($this->input->post('dependencia_responsable'))),
					'fk_id_sistema_operativo' => addslashes($this->security->xss_clean($this->input->post('sistema_operativo'))),
					'fk_id_leguaje_programacion' => addslashes($this->security->xss_clean($this->input->post('lenguaje_programacion'))),
					'observaciones' => addslashes($this->security->xss_clean($this->input->post('observaciones'))),
					'fabricante' => addslashes($this->security->xss_clean($this->input->post('fabricante'))),
					'tipo_desarrollo' => addslashes($this->security->xss_clean($this->input->post('tipo_desarrollo'))),
					'categoria' => addslashes($this->security->xss_clean($this->input->post('categoria'))),
					'licenciamiento' => addslashes($this->security->xss_clean($this->input->post('licenciamiento')))
				);
				//revisar si es para adicionar o editar
				if ($idCatalogo == '') {
					$data['estado_sistema'] = 1;
					$query = $this->db->insert('catalogo_sistemas_informacion', $data);
				} else {
					$this->db->where('id_catalogo_sistema', $idCatalogo);
					$query = $this->db->update('catalogo_sistemas_informacion', $data);
				}
				if ($query) {
					return true;
				} else {
					return false;
				}
		}

		/**
		 * Adicionar informacion del catalogo de sistemas
		 * @since 23/11/2021
		 */
		public function saveDetalleCatalogo() 
		{				
				$idCatalogo = $this->input->post('hddId');
				$data = array(
					'servidor_aplicacion' => $this->input->post('servidor_aplicacion'),
					'servidor_base_datos' => $this->input->post('servidor_base_datos'),
					'url_aplicacion' => $this->input->post('url_aplicacion'),
					'nombre_base_datos' => $this->input->post('nombre_base_datos'),
					'conexion_ldap' => $this->input->post('conexion_ldap'),
					'proveedor_soporte' => $this->input->post('proveedor_soporte')
				);			
				$this->db->where('id_catalogo_sistema', $idCatalogo);
				$query = $this->db->update('catalogo_sistemas_informacion', $data);
				if ($query) {
					return true;
				} else {
					return false;
				}
		}

		/**
		 * activar catalogo
		 * @since 18/04/2023
		 */
		public function activarCatalogo() 
		{
				$idCatalogo = $this->input->post('idCatalogo');
				$data = array(
					'estado_sistema' => 1,
					'fecha_inactivacion' => NULL
				);			
				$this->db->where('id_catalogo_sistema', $idCatalogo);
				$query = $this->db->update('catalogo_sistemas_informacion', $data);
				if ($query) {
					return true;
				} else {
					return false;
				}
		}

		/**
		 * inactivar catalogo
		 * @since 18/04/2023
		 */
		public function inactivarCatalogo() 
		{
				$idCatalogo = $this->input->post('idCatalogo');
				$data = array(
					'estado_sistema' => 2,
					'fecha_inactivacion' => date('Y-m-d')
				);			
				$this->db->where('id_catalogo_sistema', $idCatalogo);
				$query = $this->db->update('catalogo_sistemas_informacion', $data);
				if ($query) {
					return true;
				} else {
					return false;
				}
		}
	}