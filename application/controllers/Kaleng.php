<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Kaleng extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            $this->load->model('m_kelolaAkun');
            $this->load->model('m_pendaftar');
        }

        public function index(){
        $username = ($this->session->userdata['sedangLogin']['username']);
        $data['dataPendaftar']= $this->m_kelolaAkun->ambilDataPendaftar($username);
            if($this->session->userdata('sedangLogin') == FALSE ){
                echo '<script>alert("Silahkan Login Terlebih Dahulu!");</script>';
                redirect('MasukKaleng','refresh');
            }else{

                $this->load->view('/bem/kaleng/index',$data);
            }
            // echo "<pre>"; print_r($data); die();
        }
    }

?>