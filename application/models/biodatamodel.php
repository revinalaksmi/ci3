<?php

class Biodatamodel extends CI_Model {
	public function get_biodata() {
			//$this->load->database();
			//$data = $this->db->get('biodata');
			//return $data;
		return $this->db->get('biodata');
	}
	public function getInformation(){
		$data=array(
				'name'=>array('firstname'=> "Revina",'lastname' => "Laksmi"),
				'address'=>"Malang",
				'email'=>"revinaaniver@gmail.com",
				'song'=>array('a'=>"Mic Drop - BTS",'b'=>"Bad Boy - RV",'c'=>"Good Boy - BigBang",'d'=>"Peek a Boo - RV")
			);
		return $data;
	}
}

?>