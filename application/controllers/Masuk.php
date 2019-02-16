<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
		parent::__construct();		
		$this->load->model('m_pendaftar');
    }
    
	public function index()
	{
		$this->load->view('/bem/masuk/index');
    }
    
    public function prosesLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_pendaftar->cek_login("pendaftar",$where)->num_rows();
		$hasil = $this->m_pendaftar->dataPendaftar($username)->row(0,'array');
	
		if($cek > 0){
 			$data = array(
				'id' => $hasil['id'],
				'username' => $hasil['username'],
				'email' => $hasil['email'],
				'nim' => $hasil['nim'],
				'namaLengkap' => $hasil['namaLengkap'],
				'ttl' => $hasil['ttl'],
				'angkatan' => $hasil['angkatan'],
				'alamat' => $hasil['alamat'],
				'noHp' => $hasil['noHp'],
				'iDline' => $hasil['iDline'],
				'pengalamanrOrganisasi' => $hasil['pengalamanrOrganisasi'],
				'keahlian' => $hasil['keahlian'],
				'harapan' => $hasil['harapan'],
				'cv' => $hasil['cv'],
				'status' => $hasil['status'],
				'pilihan1' => $hasil['pilihan1'],
				'pilihan2' => $hasil['pilihan2'],
				'jabatan' => $hasil['jabatan'],
				'logged_in'=>true
			);

		$this->session->set_userdata('sedangLogin',$data);
		$this->session->sess_expiration = '14400';
			// echo print_r($_SESSION);	die;	
			redirect(base_url("portal"));
 
		}else{
			print "<script type=\"text/javascript\">alert('Username atau Password anda Salah!');</script>";
      redirect('Masuk','refresh');
		}
	}
 
	public function keluar(){
		$this->session->sess_destroy();
		redirect(base_url('Beranda'));
	}


    

}
