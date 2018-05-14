<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_categories()
    {
       $data = $this->db->get('kategori');
        return $data->result_array();
    }

    public function create_category()
    {
        $data = array(
            'id_ktg'          => $this->input->post('id_ktg'),
            'deskripsi'   => $this->input->post('deskripsi'),
            'keterangan'        => $this->input->post('keterangan')
        );
        return $this->db->insert('kategori', $data);
    }

   public function GetPreview($id='')
    {
        $isi = $this->db->get_where('kategori', array('id' => $id));
        return $isi->result_array();
    }
public function UpdateData($tabelNama,$data,$where){
        $res = $this->db->update($tabelNama,$data,$where);
        return $res;
        }
    public function delete_category($tabelNama,$where)
    {
        $res = $this->db->delete($tabelNama,$where);
        return $res;
    }
}
