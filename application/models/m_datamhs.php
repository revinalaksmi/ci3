<?php

class M_datamhs extends CI_Model {
	public function get_biodata() {
			//$this->load->database();
			//$data = $this->db->get('biodata');
			//return $data;
		return $this->db->get('biodata');
	}
}

?>