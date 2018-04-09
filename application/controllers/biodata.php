<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('biodatamodel');
	}

	public function index()
	{
		
		
		$data=$this->biodatamodel->getInformation();
		$data['biodata'] = $this->biodatamodel->get_biodata()->result();
		$this->load->view('latihandb.php',$data);

	}

}
?>
