<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaAkun extends CI_Controller {

    function __construct(){
		parent::__construct();		
        $this->load->model('m_pendaftar');
        $this->load->model('m_kelolaAkun');
    }

    public function uploadFoto(){
        $username = ($this->session->userdata['sedangLogin']['username']);
        $namaFile = $username;
        $config['upload_path']          = './foto';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name'] = $namaFile;

        $this->upload->initialize($config);
        if (! $this->upload->do_upload('foto')){
            echo '<script>alert("Gagal, harap periksa kembali file anda!");</script>';
            redirect('portal/foto','refresh');
        }else{
        $this->m_kelolaAkun->uploadFoto($username);
        echo '<script>alert("Sukses menambahkan foto anda!");</script>';
        redirect('portal/foto/','refresh');
        }

    }

    public function uploadCV(){
        $username = ($this->session->userdata['sedangLogin']['username']);
        $namaFile = $username;
        $config['upload_path']          = './cv';
        $config['allowed_types']        = 'pdf|docx|png|jpeg|jpg';
        $config['file_name'] = $namaFile;

        $this->upload->initialize($config);
        if (! $this->upload->do_upload('cv')){
            echo '<script>alert("Gagal, harap periksa kembali CV anda!");</script>';
            redirect('portal/cv','refresh');
        }else{
        $this->m_kelolaAkun->uploadCV($username);
        echo '<script>alert("Sukses menambahkan CV anda!");</script>';
        redirect('portal/cv/','refresh');
        }

    }



    public function ajukanPendaftaran(){
        $struktural = $this->input->post('struktural');
        $pilihanPertama = $this->input->post('pilihanPertama');
        $pilihanDua = $this->input->post('pilihanDua');
        $username = ($this->session->userdata['sedangLogin']['username']);

        $data = array(
			'jabatan' => $struktural,
			'pilihan1' => $pilihanPertama,
            'pilihan2' => $pilihanDua,
            'isiPilihan' => 1
        );
        
        $this->m_pendaftar->ajukanPendaftaran($data,$username);
        print "<script type=\"text/javascript\">alert('Sukses! Anda Telah Telah Diajukan,Silahkan Tunggu Info Selanjutnya');</script>";
        redirect('portal','refresh');

        // $struktural = $this->input->post('struktural');
        // echo $struktural."<br>"; 
        // echo $pilihanPertama."<br>";
        // echo $pilihanDua;
    }

    public function updateInfo(){
        $nim = $this->input->post('nim');
		$namaLengkap = $this->input->post('namaLengkap');
        $ttl = $this->input->post('ttl');
        $programStudi = $this->input->post('programStudi');
        $alamat = $this->input->post('alamat');
        $noHp = $this->input->post('noHp');
        $iDline = $this->input->post('iDline');
        $angkatan = $this->input->post('angkatan');
        $keahlian = $this->input->post('keahlian');
        $pengalamanOrganisasi = $this->input->post('pengalamanOrganisasi');
        $harapan = $this->input->post('harapan');
        $username = ($this->session->userdata['sedangLogin']['username']);
        // echo "<pre>"; print_r($username); die;
		$data = array(
			'nim' => $nim,
			'namaLengkap' => $namaLengkap,
            'ttl' => $ttl,
            'programStudi' => $programStudi,
            'alamat' => $alamat,
            'noHp' => $noHp,
            'angkatan' => $angkatan,
            'keahlian' => $keahlian,
            'pengalamanOrganisasi' => $pengalamanOrganisasi,
            'harapan' => $harapan,
            'isiBiodata' => 1,
            'iDline' => $iDline
        );
        
        $this->m_kelolaAkun->updatePendaftar($data,$username);
        print "<script type=\"text/javascript\">alert('Sukses! Anda Telah Mengisi Biodata');</script>";
        redirect('portal/biodata','refresh');
    }
}

?>