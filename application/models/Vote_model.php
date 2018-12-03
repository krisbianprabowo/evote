<?php
class Vote_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function tampilKandidat(){
		return $this->db->get('kandidat')->result();
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

	function checkVoting($id){
		$this->db->where('id',$id);
		$this->db->where('id_kandidat !=',NULL);
		return $this->db->get('pemilih')->row();
	}
} 
?>