<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasukKaleng extends CI_Controller {


    public function __construct(){
		parent::__construct();		
		$this->load->model('m_PendaftarKaleng');
    }
    
	public function index()
	{
		$this->load->view('bem/masukKaleng/index');
    }
    
    public function prosesLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password),
			'status' => 1
			);
		$cek = $this->m_PendaftarKaleng->cek_login("admin",$where)->num_rows();
		$hasil = $this->m_PendaftarKaleng->dataPendaftar($username)->row(0,'array');
	
		if($cek > 0){
 			$data = array(
				'id' => $hasil['id'],
				'username' => $hasil['username'],
				'email' => $hasil['email'],
				'logged_in'=>true
			);

		$this->session->set_userdata('sedangLogin',$data);
		$this->session->sess_expiration = '14400';
			// echo print_r($_SESSION);	die;	
			redirect(base_url("portal"));
 
		}else{
			print "<script type=\"text/javascript\">alert('Akun Anda Belum diVerifikasi');</script>";
      redirect('masukKaleng','refresh');
		}
	}
 
	public function keluar(){
		$this->session->sess_destroy();
		redirect(base_url('Beranda'));
	}


    

}
