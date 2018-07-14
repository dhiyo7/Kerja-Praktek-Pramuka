<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{

     function __construct() {

    parent::__construct();
    $this->load->model('mod_login');
}
    public function index(){
        $this->load->view('login');
    }

    public function proseslogin(){
        $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        $user = $this->input->post('username',true);
        $pass = $this->input->post('password',true);
        $u = $user;
        $p = md5($pass);
        $cek = $this->mod_login->ceklogin($u, $p);
        $tes = count($cek);

        if ($tes > 0) {
            $loginn = $this->mod_login->ceklogin($u, $p);
            $level = $loginn->level;
            $data = array('id_anggota' => $id);
            $data = array('level' => $level);
            $this->session->set_userdata($data);
            if ($level == 'admin') {
                    redirect('admin');
            }elseif($level == 'user'){
                redirect('user');
            }
        }else{
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }   
    function logout(){
       $this->session->sess_destroy();
       redirect('login');
    }
}