<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_PendaftarKaleng extends CI_Model{
	function tampil_data(){
		return $this->db->get('pendaftar');
	}
 
	function inputData($data,$table){
		$this->db->insert($table,$data);
    }
    
  function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function select_by_id($id)
	{
		$this->db->where('id',$id);
		
		return $this->db->get('admin')->row();
	}

	function ajukanPendaftaran($data, $username) {
		$this->db->where('username', $username);
       	$this->db->update('admin', $data);
	}

	public function cekAkun($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('admin');

		return $query;
	}

	public function dataPendaftar($username){
		$this->db->select("*");
		$this->db->from("admin");
		$this->db->where("username",$username);
		return $this->db->get();
	}


}

?>