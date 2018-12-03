<?php
class Admin_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function check_akun($username){
		$this->db->where('username',$username);
		$query = $this->db->get('admin')->row();
		if(!empty($query)){
			return $query;
		}else {
			return false;
		}
	}

	function tampilKandidat(){
		return $this->db->get('kandidat')->result_array();
	}

	function pilihPengguna($id){
		$this->db->where('id',$id);
		return $this->db->get('pemilih')->row();
	}

	function updateVoting($id,$d){
		$this->db->where('id',$id);
		$this->db->update('pemilih',$d);
		return ($this->db->affected_rows()>0);
	}

	function tambahKandidat($d){
		$this->db->insert('kandidat',$d);

		return ($this->db->affected_rows()>0);
	}

	function tambahPemilih($d){
		$this->db->insert('pemilih',$d);

		return ($this->db->affected_rows()>0);
	}
} 
?>