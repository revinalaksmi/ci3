<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	
	public function index(){
		$this->load->model('mymodel');
		$data['result'] = $this->mymodel->GetArtikel();
		$this->load->view('home2', $data);
	} 

	public function do_preview($id=''){
		$this->load->model('mymodel');
		$data['isi'] = $this->mymodel->GetPreview($id);
		$this->load->view('preview', $data);
	}

	public function add_data(){
		$this->load->view('form_add');
	}

	public function do_insert(){
		$config['upload_path']          = 'assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

               print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $judul 			= $_POST['judul'];
			$penyanyi 		= $_POST['penyanyi'];
			$tahun_rilis	= date("Y-m-d H:i:s");
			$deskripsi 		= $_POST['deskripsi'];
			$gambar		= $this->upload->data('file_name');
			
			$data_insert	= array(
									'judul'		=> $judul,
									'penyanyi'	=> $penyanyi,
									'tahun_rilis' 		=> $tahun_rilis,
									'deskripsi' 		=> $deskripsi,
									'gambar'		=> $gambar
								);

			$this->load->model('mymodel');
			$res = $this->mymodel->InsertData('biodata', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('biodata');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
        }
	}

	//nyoba2

	public function edit_data($id='',$gambar=''){
		$this->load->model('mymodel');
		$biodata = $this->mymodel->getedit($id);
		$data = array(
			"id" 			=> $biodata[0]['id'],
			"judul" 		=> $biodata[0]['judul'],
			"penyanyi"		=> $biodata[0]['penyanyi'],
			"tahun_rilis"	=> $biodata[0]['tahun_rilis'],
			"deskripsi" 	=> $biodata[0]['deskripsi'],
			"gambar"		=> $biodata[0]['gambar']
		);
		$this->load->view('v_edit',$data);
	}

	public function do_update(){
		$config['upload_path']          = 'assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

               print_r($error);
        }
        else
        {
			$result_upload=$this->upload->data();
				
			$id 			= $_POST['id'];
			$judul 			= $_POST['judul'];
			$penyanyi		= $_POST['penyanyi'];
			$tahun_rilis	= date("Y-m-d H:i:s");
			$deskripsi		= $_POST['deskripsi'];
			$gambar			= $result_upload['file_name']; 
			$data_update 	= array(
				'judul' 		=> $judul,
				'penyanyi' 		=> $penyanyi,
				'tahun_rilis' 	=> $tahun_rilis,
				'deskripsi' 	=> $deskripsi,
				'gambar'		=> $gambar);
			$this->load->model('mymodel');
			$where = array('id' => $id);
			$res = $this->mymodel->UpdateData('biodata',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('biodata');
			}
		}
	}

	public function do_delete($id){
		$this->load->model('mymodel');
		$where 	= array('id' => $id);
		$res 	= $this->mymodel->DeleteData('biodata',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('biodata');
			}
		}
}
