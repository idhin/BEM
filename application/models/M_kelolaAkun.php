<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelolaAkun extends CI_Model{

	function updatePendaftar($data, $username) {
		$this->db->where('username', $username);
       	$this->db->update('pendaftar', $data);
	}

	public function getPendaftar(){
		$this->db->select("*");
		$this->db->from("pendaftar");
		$sql = $this->db->get();
		return $sql->result();
	}

	public function berkasLengkap(){
		$this->db->select("*");
		$this->db->from("pendaftar");
		$this->db->where("isiFoto",1);
		$this->db->where("isiBiodata",1);
		$this->db->where("isiCv",1);
		$this->db->where("isiPilihan",1);
		$sql = $this->db->get();
		return $sql->result();
	}


	public function ambilStatusBio($username){
		$this->db->select("isiBiodata");
		$this->db->from("pendaftar");
		$this->db->where("username",$username);
		$sql = $this->db->get();
		return $sql->row();
	}

	public function ambilPendaftarFix(){
		$this->db->select("*");
		$this->db->from("pendaftar");
		$this->db->where("isiFoto",1);
		$this->db->where("isiBiodata",1);
		$this->db->where("isiCv",1);
		$this->db->where("isiPilihan",1);
		$sql = $this->db->get();
		return $sql->result();
	}

	public function ambilDataPendaftar($username){
		$this->db->select("*");
		$this->db->from("pendaftar");
		$this->db->where("username",$username);
		$sql = $this->db->get();
		return $sql->result();
	}

		public function ambilSemuaPendaftar(){
		$this->db->select("*");
		$this->db->from("pendaftar");
		// $this->db->where("username",$username);
		$sql = $this->db->get();
		return $sql->result();
	}

	public function getKabinet(){
		$this->db->select("*");
		$this->db->from("kabinet");
		$sql = $this->db->get();
		return $sql->result();
	}

	public function uploadFoto($username){
		$data = array(
			'foto' 	=> $this->upload->data('file_name'),
			'isiFoto' => 1
			);	
		$this->db->where('username',$username);
		$this->db->update('pendaftar',$data);
	}

	public function uploadCV($username){
		$data = array(
			'cv' 	=> $this->upload->data('file_name'),
			'isiCv' => 1
			);	
		$this->db->where('username',$username);
		$this->db->update('pendaftar',$data);
	}
}
?>