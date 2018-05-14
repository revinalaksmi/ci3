<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	
	public function GetArtikel($limit = FALSE, $offset = FALSE ){
		if ( $limit ) {
           $this->db->limit($limit, $offset);
      	}
		$this->db->join('kategori', 'biodata.id_ktg =kategori.id');
		$data = $this->db->get('biodata');
		return $data->result_array();
	}

	public function get_total() {
    	return $this->db->count_all("biodata");
   	}

	 
	public function GetPreview($id=''){
		$this->db->join('kategori', 'kategori.id = biodata.id_ktg');

    	$isi = $this->db->get_where('biodata', array('biodata.id' => $id));
    	            
		return $isi->result_array();
	}

	public function InsertData($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
		}
		
	public function DeleteData($tabelNama,$where){
		$res = $this->db->delete($tabelNama,$where);
		return $res;
		}

	public function getedit($id=''){
		$data = $this->db->query('SELECT id,judul,penyanyi,id_ktg,tahun_rilis,deskripsi,gambar FROM biodata where id = '.$id);
		return $data->result_array();
	}

	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
		}

}