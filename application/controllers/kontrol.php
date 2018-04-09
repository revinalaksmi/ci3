<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrol extends CI_Controller {

	
	public function index()
	{
		$this->load->model('modele');
		$data=$this->modele->getInformation();
		$this->load->view('home2',$data,FALSE);
	}
	
}
