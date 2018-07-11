<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Export_excel extends CI_Controller {
	function index(){
		$this->load->Produk_model('tb_sekolah');
		$d['sekolah'] = $this->Produk_model->get_excel()->result();
		$this->load->view('layout',$data);
	}
}