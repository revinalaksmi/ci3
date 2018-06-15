<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'username' => $this->input->post('username'),
            'fk_level_id'=> $this->input->post('membership'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => $enc_password
        );
        return $this->db->insert('user', $data);
    }

    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('user');


        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    public function get_user_level($user_id){
        $this->db->select('fk_level_id');
        $this->db->where('user_id', $user_id);

        $result=$this->db->get('user');

        if($result->num_rows()==1){
            return $result->row(0)->fk_level_id;
        } else{
            return false;
        }
    }

    public function get_user_details($username){
        $this->db->where('username',$username);
        $result=$this->db->get('user');
        if($result->num_rows()==1){
            return $result->row();
        }
        else{
            return false;
        }
    }
}
