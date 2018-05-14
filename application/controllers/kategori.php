<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	
	public function index(){
		$this->load->model('category_model');
		$data['result'] = $this->category_model->get_all_categories();
		$this->load->view('view_category', $data);
	} 

	public function do_preview($id=''){
		$this->load->model('category_model');
		$data['isi'] = $this->category_model->GetPreview($id);
		$this->load->view('prev_cat', $data);
	}

	public function add_data(){
		$this->load->model('category_model');
		$data['result'] = $this->category_model->get_all_categories();
		$this->load->view('form_addcat');
	}

	public function do_insert(){
	    $this->form_validation->set_rules('id_ktg', 'Category name', 'required');
	    $this->form_validation->set_rules('deskripsi', 'Description', 'required');
	    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('form_addcat');
	    } else {

	    	$this->load->model('category_model');
			$this->category_model->create_transaksi();
			redirect('kategori');
		}
	}

	public function edit($id='')
	{	
		$this->load->model('category_model');

		$kategori = $this->category_model->GetPreview($id);
		$data = array(
			"id" 				=> $kategori[0]['id'],
			"id_ktg" 			=> $kategori[0]['id_ktg'],
			"deskripsi" 		=> $kategori[0]['deskripsi'],
			"keterangan"		=> $kategori[0]['keterangan']
		);

		$this->form_validation->set_rules('id_ktg', 'Category name', 'required');
	    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
	    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
	    
        $this->load->view('edit_cat', $data);
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('edit_cat', $data);

	    } else {

	    	$data_update 	= array(
				'id_ktg' 		=> $this->input->post('id_ktg'),
				'deskripsi' 	=> $this->input->post('deskripsi'),
				'keterangan'	=> $this->input->post('keterangan')
			);


    		$this->load->model('category_model');
			$where = array('id' => $id);
			print_r($data_update);
			$res = $this->category_model->UpdateData('kategori',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('kategori');
			}
	    }
	}

	public function do_delete($id){
		$this->load->model('category_model');
		$where 	= array('id' => $id);
		$res 	= $this->category_model->delete_category('kategori',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('kategori');
			}
		}
}
