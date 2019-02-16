<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftar extends CI_Model{
	function tampil_data(){
		return $this->db->get('pendaftar');
	}
 
	function inputData($data){
		$this->db->insert('admin',$data);
    }
    
  function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function select_by_id($id)
	{
		$this->db->where('id',$id);
		
		return $this->db->get('pendaftar')->row();
	}

	function ajukanPendaftaran($data, $username) {
		$this->db->where('username', $username);
       	$this->db->update('pendaftar', $data);
	}

	public function cekAkun($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('pendaftar');

		return $query;
	}

	public function dataPendaftar($username){
		$this->db->select("*");
		$this->db->from("pendaftar");
		$this->db->where("username",$username);
		return $this->db->get();
	}


}

?>