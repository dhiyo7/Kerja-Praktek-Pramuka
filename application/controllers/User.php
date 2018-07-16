<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{
 function __construct() {

    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('modelAnggota');
    $this->load->model('modelSekolah');
     $this->load->model('modelProfil');
    $this->load->model('modelUser');
 if (!$this->session->userdata('level','id_anggota')) {
      redirect('login');
    }
 }
	public function index(){
		$data['main'] = 'user/user_dashboard';
		$this->load->view('template/template',$data);
	
}

  public function form_edit(){
    $data['anggota'] = $this->modelProfil->getProfil(($this->session->userdata('id_anggota')));
    $data['main'] = 'user/form_edit';
    $this->load->view('template/template',$data);
  }
	 public function edit_profil()
    {   /* $data['anggota'] = $this->modelSekolah->getAnggota();*/
/*        var_dump($this->session->userdata()); die('CEK');*/
        $data['anggota'] = $this->modelProfil->getProfil(($this->session->userdata('id_anggota')));
        $data['main'] = 'user/edit_profill';
       $this->load->view('template/template',$data);
    }

    public function editProfil($id=null){
      $data['anggota'] = $this->modelProfil->getDataByProfil($id);
      $data['main'] = 'user/form_edit';
      $this->load->view('template/template',$data);
      if ($id==null) {
        $this->session->set_flashdata('info','Id profil tidak boleh kosong!');
        redirect('user/edit_profil  ','refresh');
      }

    if($this->input->post('submit')==true){
      $this->form_validation->set_rules('nama_lengkap', 'Nama ','trim|required');
      $this->form_validation->set_rules('username', 'Username','trim|required');
      $this->form_validation->set_rules('password', 'Password','trim|required');
    if ($this->form_validation->run() == TRUE) {
      $data = array(
         'nama_lengkap' => $this->input->post('nama_lengkap'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
        );

    $sql = $this->modelProfil->updateProfil($data);
    if ($sql) {
      $this->session->set_flashdata('info', 'Edit Data sukses');
      redirect('user/edit_profil','refresh');
    }else{
      $this->session->set_flashdata('info', 'Edit Data gagal');
      redirect('admin/editProfil'.$id,'refresh');
    } 
    
    }

  }
}

    public function print()
    {
        $data['main'] = 'user/print_data_diri';
     $this->load->view('template/template',$data);
    }

   public function print_biodata(){
    $data['anggota'] = $this->modelSekolah->getAnggota();
    $this->load->view('user/print_biodata',$data);
  }
    

    public function keahlian()
    {
        $data['main'] = 'user/riwayat_keahlian';
    $this->load->view('template/template',$data);
    }

    public function addKeahlian(){
        $config = [
        'upload_path' => './uploads/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 1000, /*'max_width' => 1000,
        'max_height' => 768*/
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('dokumen')) //jika gagal upload
      {
          $data['error'] = $this->upload->display_errors(); //tampilkan error
          $data['main'] = 'user/riwayat_keahlian';
          $this->load->view('template/template', $data);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
      $data = array(
        'dokumen' =>$file['file_name']
        );

          $this->modelSekolah->addKegiatann($data); //memasukan data ke database
          redirect('admin/kegiatan'); //mengalihkan halaman
      }
  }


    public function upload_keahlian()
    {
        $data['main'] = 'user/upload_keahlian';
        $this->load->view('template/template',$data);
    }

    public function riwayat_kegiatan()
    {
      $data['kegiatan'] = $this->modelSekolah->getKegiatan();
        $data['main'] = 'user/riwayat_kegiatan';
       $this->load->view('template/template',$data);
    }

    public function addKegiatan(){
         $config = [
        'upload_path' => './uploads/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 1000, /*'max_width' => 1000,
        'max_height' => 768*/
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('dokumen')) //jika gagal upload
      {
          $data['error'] = $this->upload->display_errors(); //tampilkan error
          $data['main'] = 'user/riwayat_kegiatan';
          $this->load->view('template/template', $data);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
      $data = array(
       'dokumen' =>$file['file_name']
        );

          $this->modelSekolah->addKegiatann($data); //memasukan data ke database
          redirect('user/riwayat_kegiatan'); //mengalihkan halaman
      }
  }

    public function upload_kegiatan()
    {
        $data['main'] = 'user/upload_kegiatan';
       $this->load->view('template/template',$data);
    }

    public function penghargaan()
    {
        $data['penghargaan'] = $this->modelSekolah->getPenghargaan();
        $data['main'] = 'user/riwayat_penghargaan';
        $this->load->view('template/template',$data);
    }

    public function upload_penghargaan()
    {
        $data['main'] = 'user/upload_penghargaan';
        $this->load->view('template/template',$data);
    }

    public function tugas()
    {
        $data['main'] = 'user/riwayat_tugas';
      $this->load->view('template/template',$data);
}
    public function upload_tugas()
    {
        $data['main'] = 'user/upload_tugas';
     $this->load->view('template/template',$data);
    }

}