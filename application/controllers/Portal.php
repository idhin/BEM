 <?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Portal extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('m_pendaftar');
		$this->load->model('m_kelolaAkun');
  }

	public function index(){
		$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);
		$data['total'] = count($this->m_kelolaAkun->getPendaftar());
		$data['berkasLengkap'] = count($this->m_kelolaAkun->berkasLengkap());

			if($this->session->userdata('sedangLogin') == FALSE ){
				echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
				redirect('masuk','refresh');
			}else{
				// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
				// $this->template->admin('admin/pesertaselengkapnya',$data);
				$this->load->view('/bem/profil/index',$data);
			}
	}

	public function biodata()
	{
		$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar();
		if($this->session->userdata('sedangLogin') == FALSE ){
			echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
			redirect('masuk','refresh');
		}else{
			// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
			// $this->template->admin('admin/pesertaselengkapnya',$data);
			$this->load->view('/bem/profil/biodata',$data);
		}


		
	}
	public function foto()
	{
		$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);
		if($this->session->userdata('sedangLogin') == FALSE ){
			echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
			redirect('masuk','refresh');
		}else{
			// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
			// $this->template->admin('admin/pesertaselengkapnya',$data);
			$this->load->view('/bem/profil/foto',$data);
		}
		
	}
	public function cv()
	{
		$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);
		if($this->session->userdata('sedangLogin') == FALSE ){
			echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
			redirect('masuk','refresh');
		}else{
			// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
			// $this->template->admin('admin/pesertaselengkapnya',$data);
			$this->load->view('/bem/profil/cv',$data);
		}
		
	}

	public function ajukanDiri(){
		$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);
		$data['dataKabinet']= $this->m_kelolaAkun->getKabinet();

		$status = $this->m_kelolaAkun->ambilStatusBio($username);
		// echo "<pre>"; print_r($status); die;

		// echo "<pre>"; print_r($data2); die;
		if($this->session->userdata('sedangLogin') == FALSE ){
			echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
			redirect('masuk','refresh');
		}else{
			// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
			// $this->template->admin('admin/pesertaselengkapnya',$data);
			$this->load->view('/bem/ajukanDiri/index',$data);
		}
		
	}

	public function pendaftar (){
				$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);
		$data['dataSemuaPendaftar']= $this->m_kelolaAkun->ambilSemuaPendaftar();
		if($this->session->userdata('sedangLogin') == FALSE ){
			echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
			redirect('masuk','refresh');
		}else{
			// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
			// $this->template->admin('admin/pesertaselengkapnya',$data);
			$this->load->view('/bem/pengumuman/index',$data);	
		}	
	}



	public function pendaftarFix (){
		$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);

		$data['dataSemuaPendaftar']= $this->m_kelolaAkun->ambilPendaftarFix();

		if($this->session->userdata('sedangLogin') == FALSE ){
			echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
			redirect('masuk','refresh');
		}else{
			// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
			// $this->template->admin('admin/pesertaselengkapnya',$data);
			$this->load->view('/bem/pendaftarFix/index',$data);	
		}	
	}
	
	public function pengumuman(){
		$username = ($this->session->userdata['sedangLogin']['username']);
		$data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);
		if($this->session->userdata('sedangLogin') == FALSE ){
			echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
			redirect('masuk','refresh');
		}else{
			// $data['pendaftar'] = $this->m_pendaftar->select_by_id();
			// $this->template->admin('admin/pesertaselengkapnya',$data);
			$this->load->view('/bem/pengumuman/index',$data);	
		}		
	}

}
