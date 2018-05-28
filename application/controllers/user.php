<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_model');

	}

	// Register user
	public function register(){
		$data['page_title'] = 'Pendaftaran User';

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('register', $data);
		} else {
			$enc_password = md5($this->input->post('password'));
			$this->user_model->register($enc_password);
			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

			redirect('biodata');
		}
	}

	// Log in user
	public function login(){
		$data['page_title'] = 'Log In';
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('login', $data);
		} 
		else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$id = $this->user_model->login($username, $password);

		if($id){
			
			$user_data = array(
				'id' => $id,
				'username' => $username,
				'logged_in' => true
			);

			$this->session->set_userdata($user_data);

			$this->session->set_flashdata('user_loggedin', 'You have been login');

			redirect('biodata');
		} 
		else {
		
		$this->session->set_flashdata('login_failed', 'Login failed');

		redirect('user/login');
		}		
			}
	}


	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

		redirect('user/login');
	}

}