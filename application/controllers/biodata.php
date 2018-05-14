<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('mymodel');
	}

	public function index(){
		$data['page_title'] = 'List Artikel';
        
        // Dapatkan data dari model Blog dengan pagination
        // Jumlah artikel per halaman
        $limit_per_page = 4;
		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;
		// Dapatkan jumlah data 
		$total_records = $this->mymodel->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data['result'] = $this->mymodel->GetArtikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'biodata/index/';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}
        // Dapatkan jumlah data
        $total_records = $this->mymodel->get_total();
		$data['result'] = $this->mymodel->GetArtikel();
		$this->load->view('home2', $data);
	} 

	public function do_preview($id=''){
		$this->load->model('mymodel');
		$data['isi'] = $this->mymodel->GetPreview($id);
		$this->load->view('preview', $data);
	}

	public function add_data(){
		$this->load->model('category_model');
		$data['result'] = $this->category_model->get_all_categories();
		$this->load->view('form_add');
	}

	public function do_insert(){
		$this->load->model('category_model');
		$data['result'] = $this->category_model->get_all_categories();
		$this->load->view('form_add',$data);
		// Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
	    $this->form_validation->set_rules('judul', 'Title', 'required');
	    $this->form_validation->set_rules('penyanyi', 'Singer', 'required');
	    $this->form_validation->set_rules('tahun_rilis', 'Released', 'required');
	    $this->form_validation->set_rules('deskripsi', 'Description', 'required');
	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('form_add');
	    }

		$config['upload_path']          = 'assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $data['upload_error'] = $this->upload->display_errors();
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $judul 			= $_POST['judul'];
			$penyanyi 		= $_POST['penyanyi'];
			$id_ktg 		= $_POST['id_ktg'];
			$tahun_rilis	= date("Y-m-d H:i:s");
			$deskripsi 		= $_POST['deskripsi'];
			$gambar			= $this->upload->data('file_name');
			
			$data_insert	= array(
									'judul'		=> $judul,
									'penyanyi'	=> $penyanyi,
									'id_ktg'=> $id_ktg,
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

	public function do_update($id='',$gambar='' ){
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
		
		$this->form_validation->set_rules('judul','Judul','required|is_unique[biodata.judul]',
			array(
					'required' => 'Judul kosong, isi dulu',
					'is_unique' => 'Judul' .$this->input->post('judul'). ' sudah ada.'));

		$this->form_validation->set_rules('penyanyi','Penyanyi','required|is_unique[biodata.penyanyi]',
			array(
					'required' => 'Penyanyi kosong, isi dulu',
					'is_unique' => 'Penyanyi' .$this->input->post('penyanyi'). ' sudah ada.'));

		$this->form_validation->set_rules('tahun_rilis','Tahun Rilis','required',
			array(
					'required' => 'Tahun rilis kosong, isi dulu'));

		$this->form_validation->set_rules('deskripsi','Deskripsi','required|is_unique[biodata.deskripsi]',
			array(
					'required' => 'Deskripsi kosong, isi dulu',
					'is_unique' => 'Deskripsi' .$this->input->post('deskripsi'). ' sudah ada.'));

		if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('v_edit', $data);
	    }
	    else{
	    	$config['upload_path']          = 'assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data['upload_error'] = $this->upload->display_errors();
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
