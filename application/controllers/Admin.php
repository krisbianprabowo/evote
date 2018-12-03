<?php

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->library('form_validation');
		/*$this->load->library('phpmailer_library');*/
		$this->load->helper('utility');

	}

	public function login(){
		$this->load->view('admin/loginadminprofile');
	}

	public function proses_login(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$akun = $this->admin_model->check_akun($username);
		$countAkun  = count($akun);
		$passwordhash	= $akun->password;
	
		if ($countAkun > 0){
			$verify = verifyHashedPassword($password,$passwordhash);
			if($verify == TRUE){
			$data_session = array(	'level' => 'admin',
									'id_admin'=>$akun->id_admin,
									'username'=>$akun->username,
									'logged_in' => TRUE
									);
			$this->session->set_userdata($data_session);
			redirect(site_url('admin/input_pemilih'));
			}else {
				$this->session->set_flashdata('info','<div class="m-alert alert alert-danger alert-dismissible fade show mt-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><h5><i class="la la-times-circle-o" style="font-size:1.55rem"></i></i> Username atau Password Salah !</h5>
					<br> Silahkan login kembali </div>');
					redirect(site_url('admin/login'));
			}
		}

	}

	public function input_kandidat(){
		$d['judul'] 	= 'Tambah Halaman - Admin TK ABA WIROBRAJAN 2';
 		$d['body']		= 'admin_evote/input_kandidat';
 		$this->load->view('admin/atemplate',$d);
	}

	public function simpan_kandidat(){
		$d['nama']			= $this->input->post('nama');
		$d['tempat_lahir']	= $this->input->post('tempat_lahir');
		$d['tanggal_lahir']	= $this->input->post('tanggal_lahir');
		$d['jenis_kelamin']	= $this->input->post('jenis_kelamin');
		/*if(!empty($_FILES['media']['name'])){
			$nama 		= $_FILES["media"]["name"];
			$img_size   = $_FILES['media']['size'];
			if (!is_dir('./assets/img/kandidat')) {
			    mkdir('./assets/img/kandidat', 0777, true);
			}
	      	$target_dir 	= './assets/img/kandidat/';
	      	$dir 			= asset_url().'img/kandidat/';
			$target_file 	= $nama.time();
			if($img_size<5000000){
				if (move_uploaded_file($_FILES["media"]["tmp_name"], $target_dir.$target_file)) {
						$d['foto'] 	= $dir.$target_file;
						$status 	= $this->admin_model->tambahKandidat($d);
				}
			}else {
				$pesan = '<i class="flaticon-warning-2"></i> Ukuran foto harus kurang dari 5 mb';
			}
		}*/
		$status 	= $this->admin_model->tambahKandidat($d);
		$iw = '<i class="flaticon-warning-2"></i>';
		$this->form_validation->set_rules('nama', 'Nama Kandidat', 'trim|required|callback_alpha_dash_space',
        array('required'=>$iw.' %s wajib diisi','alpha_dash_space'=>$iw.' %s hanya boleh terdiri dari huruf alphabet'));
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required|callback_alpha_dash_space',
        array('required'=>$iw.' %s wajib diisi','alpha_dash_space'=>$iw.' %s hanya boleh terdiri dari huruf alphabet'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required',
        array('required'=>$iw.' %s wajib diisi'));
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',
        array('required'=>$iw.' %s wajib diisi'));
	    if ($this->form_validation->run()==FALSE){
	      $pesan = validation_errors();
	      $this->session->set_flashdata('info','<div class="alert alert-danger text text-danger>"'.$pesan.'</div>');
	      redirect(site_url('admin/input_kandidat'));
	    }else{
	    	if($status==1){
				$this->session->set_flashdata('info','<div class="m-alert alert alert-success alert-dismissible fade show mt-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><h5><i class="la la-check-circle-o" style="font-size:1.55rem"></i></i> Penambahan data Kandidat Telah Berhasil !</h5>
			 			<br></div>');
				redirect(site_url('admin/input_kandidat'));
			}else {
				$this->session->set_flashdata('info','<div class="m-alert alert alert-danger alert-dismissible fade show mt-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><h5><i class="la la-times-circle-o" style="font-size:1.55rem"></i></i> Penambahan data Kandidat Gagal!</h5>
			 			<br> Silahkan mencoba untuk mengisi data data Kandidat yang baru kembali</div>');
				redirect(site_url('admin/input_kandidat'));
			}
    	}
			
	}

	public function input_pemilih(){
		$d['judul'] 	= 'Tambah ';
 		$d['body']		= 'admin_evote/input_pemilih';
 		$d['tampil'] 	= $this->admin_model->tampilKandidat();

 		$this->load->view('admin/atemplate',$d);
	}

	public function simpan_pemilih(){
		$d['nama']			= $this->input->post('nama');
		$d['tempat_lahir']	= $this->input->post('tempat_lahir');
		$d['tanggal_lahir']	= $this->input->post('tanggal_lahir');
		$d['jenis_kelamin']	= $this->input->post('jenis_kelamin');
		$d['address_eth']	= $this->input->post('address_eth');
		$d['private_key']	= md5($d['address_eth']);
		
		$status 	= $this->admin_model->tambahPemilih($d);
		$iw = '<i class="flaticon-warning-2"></i>';
		$this->form_validation->set_rules('nama', 'Nama Pemilih', 'trim|required|callback_alpha_dash_space',
        array('required'=>$iw.' %s wajib diisi','alpha_dash_space'=>$iw.' %s hanya boleh terdiri dari huruf alphabet'));
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required|callback_alpha_dash_space',
        array('required'=>$iw.' %s wajib diisi','alpha_dash_space'=>$iw.' %s hanya boleh terdiri dari huruf alphabet'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required',
        array('required'=>$iw.' %s wajib diisi'));
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',
        array('required'=>$iw.' %s wajib diisi'));
	    if ($this->form_validation->run()==FALSE){
	      $pesan = validation_errors();
	      $this->session->set_flashdata('info','<div class="alert alert-danger text text-danger>"'.$pesan.'</div>');
	      redirect(site_url('admin/input_pemilih'));
	    }else{
	    	if($status==1){
				$this->session->set_flashdata('info','<div class="m-alert alert alert-success alert-dismissible fade show mt-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><h5><i class="la la-check-circle-o" style="font-size:1.55rem"></i></i> Penambahan data Pemilih Telah Berhasil !</h5>
			 			<br></div>');
				redirect(site_url('admin/input_pemilih'));
			}else {
				$this->session->set_flashdata('info','<div class="m-alert alert alert-danger alert-dismissible fade show mt-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><h5><i class="la la-times-circle-o" style="font-size:1.55rem"></i></i> Penambahan data Pemilih Gagal!</h5>
			 			<br> Silahkan mencoba untuk mengisi data data Kandidat yang baru kembali</div>');
				redirect(site_url('admin/input_kandidat'));
			}
    	}
			
	}

	function test(){
		$this->load->view('dashboard/test');
	}

	function alpha_dash_space($str) {
	    return ( ! preg_match("/^([A-zÀ-ÿ_ ])+$/i", $str)) ? FALSE : TRUE;
	} 

	function notlikethis(){
		
	}
}