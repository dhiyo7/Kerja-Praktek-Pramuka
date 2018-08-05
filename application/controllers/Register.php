<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller{
    function __construct() {
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('modelAnggota');
    $this->load->model('modelSekolah');
 }
   public function index(){
        $this->load->view('register');
   }

   public function register(){
   	 $this->load->view('register');
   }
    public function addRegister(){
    	   $this->form_validation->set_rules('nama_lengkap', 'Nama ','trim|required');
         $this->form_validation->set_rules('username', 'Username','trim|required');
         $this->form_validation->set_rules('alamat', 'Alamat','trim|required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('agama', 'Agama', 'required');

          if ($this->form_validation->run() == TRUE) {
              $data = array(
                'nama_lengkap'  => $this->input->post('nama_lengkap'),
                'username'      => $this->input->post('username'),
                'agama'         => $this->input->post('agama'),
                'alamat'        => $this->input->post('alamat'),
                'password'      => md5($this->input->post('password')),
                'level'         => $this->input->post('level'),
                'jml_jk'        => $this->input->post('jml_jk'),
                'jml_gol'       =>  $this->input->post('jml_gol'),
                'jml_sekolah'   => $this->input->post('jml_sekolah'),
                );
            $cek = $this->modelSekolah->addAnggota($data);
              if ($cek) {
                $this->session->set_flashdata('info', 'Pendaftaran Sukses');
                redirect('login','refresh');
              }else{
                $this->session->set_flashdata('info', 'Pendaftaran Gagal');
                redirect('register','refresh');
              } 
              }else{
                $this->session->set_flashdata('info', 'Pendaftaran Gagal');
                redirect('register','refresh');
                }
    }
}