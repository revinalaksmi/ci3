<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	
	public function GetArtikel(){
		
		$this->db->select('id,judul,penyanyi,tahun_rilis,deskripsi,gambar');
		$this->db->from('biodata');
		$data=$this->db->get();
	
		return $data->result_array();
	}
	 public function get_artikel_by_id($id)
    {
        // Inner Join dengan table Categories
       // $this->db->join('categories', 'categories.id = blogs.cat_id');

    	$query = $this->db->get_where('biodata', array('biodata.id' => $id));
    	            
		return $query->row();
    }
	public function GetPreview($id=''){
		$isi = $this->db->query('SELECT id,judul,penyanyi,tahun_rilis,deskripsi,gambar FROM biodata where id = '.$id);
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
		$data = $this->db->query('SELECT id,judul,penyanyi,tahun_rilis,deskripsi,gambar FROM biodata where id = '.$id);
		return $data->result_array();
	}

	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
		}

}