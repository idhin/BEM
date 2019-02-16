<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {


  function __construct(){
		parent::__construct();		
		$this->load->model('m_pendaftar');
	}

	public function index()
	{
		$this->load->view('/bem/daftar/index');
	}


	public function prosesDaftar()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
 
		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => md5($password),
			'foto' => "user.png",
			'status' => 0
			);
        $this->m_pendaftar->inputData($data);
        print "<script type=\"text/javascript\">alert('Sukses! Anda Telah Terdaftar, Silahkan Login');</script>";
        redirect('masukKaleng','refresh');
		// redirect('masuk/index');
	}
}
