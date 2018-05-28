<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'username' => $this->input->post('username'),
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
}
