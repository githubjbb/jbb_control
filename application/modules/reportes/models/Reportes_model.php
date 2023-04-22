<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Reportes_model extends CI_Model {
	    
	/**
	 * Lista catalogo
	 * @since 8/11/2021
	 */
	public function get_catalogo($arrData) 
	{			
		$this->db->select("C.*, CONCAT(U.first_name, ' ', U.last_name) tecnico, CONCAT(X.first_name, ' ', X.last_name) funcional, S.sistema_operativo, L.lenguaje_programacion, D.dependencia");
        $this->db->join('user U', 'U.id_user = C.fk_id_responsable_tecnico', 'INNER');
        $this->db->join('user X', 'X.id_user = C.fk_id_responsable_funcional', 'INNER');
        $this->db->join('param_sistema_operativo S', 'S.id_sistema_operativo = C.fk_id_sistema_operativo', 'INNER');
        $this->db->join('param_lenguaje_programacion L', 'L.id_lenguaje_programacion = C.fk_id_leguaje_programacion', 'INNER');
        $this->db->join('param_dependencias D', 'D.id_dependencia = C.fk_id_dependencia', 'LEFT');
		if (array_key_exists("idCatalogo", $arrData)) {
			$this->db->where('C.id_catalogo_sistema', $arrData["idCatalogo"]);
		}
		$this->db->order_by("nombre_sistema", "ASC");
		$query = $this->db->get("catalogo_sistemas_informacion  C");

		if ($query->num_rows() >= 1) {
			return $query->result_array();
		}else{
			return false;
		}
	}
		
		
		
		
	    
	}