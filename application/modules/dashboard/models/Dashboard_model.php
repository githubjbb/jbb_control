<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Dashboard_model extends CI_Model {

	/**
	 * Contar usuarios activos con acceso a intranet
	 * @author BMOTTAG
	 * @since  24/11/2021
	 */
	public function countIntranetUsers($arrData)
	{
		$db2 = $this->load->database('intranets_sige',true);

		$sql = "SELECT count(id) CONTEO";
		$sql.= " FROM SIGE S";
		$sql.= " WHERE estado_usuario = 1";
		if (array_key_exists("tipoVinculacion", $arrData)) {
			$sql.= " AND tipoVinculacion = " . $arrData["tipoVinculacion"];
			if($arrData["tipoVinculacion"] == 2){ //Si es de planta se filtra por la fecha finalizacion del contrato
				$sql.= " AND fechaFinalizacionContrato  >= '" . date("Y-m-d") . "'";
			}
		}
        $query = $db2->query($sql);
        $row = $query->row();
        return $row->CONTEO;
	}		
		
	    
	}