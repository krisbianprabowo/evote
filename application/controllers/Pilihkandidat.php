<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihkandidat extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('vote_model');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('utility');
		$this->load->helper('date');
	}

	public function index(){
		$pemilih = $this->vote_model->pilihPengguna('3');
		$data_session = array(	'level' => 'admin',
								'id'=>$pemilih->id,
								'nama'=>$pemilih->nama,
								'logged_in' => TRUE
							);
		$this->session->set_userdata($data_session);
		$d['kandidat'] 	= $this->vote_model->tampilKandidat();
		$checkvote = $this->vote_model->checkVoting($_SESSION['id']);
		if (count($checkvote) > 0){
			$d['body'] = 'ui_pemilihan/ui_feedback/telah_memilih'; 
			$this->load->view("ui_pemilihan/atemplate",$d);
		}else{
			$d['body'] 		= 'pemilihan/test/test'; 
			$this->load->view("ui_pemilihan/atemplate",$d);
		}
		
	}

	public function proses_voting(){
		if($id_kandidat=NULL){
			redirect(site_url('pilihkandidat/index'));
		}else{
			/*$last 				= $this->uri->total_segments();
			$id_kandidat 		= $this->uri->segment($last);*/
			$id_kandidat		= $this->input->post('id_kandidat');
			$d['waktu'] 	 	= date('Y-m-d H:i:s');
			$d['id_kandidat']	= $id_kandidat;
			$id			= $_SESSION['id'];
			$status 	= $this->vote_model->updateVoting($id,$d);

			if($status == 1){
				$data['body'] = 'ui_pemilihan/ui_feedback/pemilihan_berhasil'; 
				$this->load->view("ui_pemilihan/atemplate",$data);
			}else{
				$data['body'] = 'ui_pemilihan/ui_feedback/pemilihan_gagal'; 
				$this->load->view("ui_pemilihan/atemplate",$data);
			}
			
		}
	}
}
?>