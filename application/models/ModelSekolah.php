<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSekolah extends CI_Model {

 public function getData(){
	$data = $this->db->get('tb_sekolah')->result();
	return $data;
 }
 public function getAnggota(){
<<<<<<< HEAD
/*	$this->db->select('*');
 	$this->db->from('tb_provinsi');
 	$this->db->join('tb_anggota','tb_anggota.id_anggota=tb_provinsi.id_provinsi');
 	$data = $this->db->get();
	return $data->result();*/
	$data = $this->db->get('tb_anggota')->result();
	return $data;
 }
 public function getKegiatan(){
 	$this->db->select('*');
 	$this->db->from('tb_anggota');
 	$this->db->join('tb_kegiatan','tb_kegiatan.id_kegiatan=tb_anggota.id_anggota');

	$data = $this->db->get();
	return $data->result();
 }	
 public function tampilAnggota(){
 	$this->db->select('nama_lengkap','id_anggota');
 	$this->db->from('tb_anggota');
 	$anggota = $this->db->get();
 	return $anggota->result();
 }
=======
	$data = $this->db->get('tb_anggota')->result();
	return $data;
 }
  public function getKegiatan(){
	$data = $this->db->get('tb_kegiatan')->result();
	return $data;
 }	
>>>>>>> 8d6572d76750e65ef3a0816a12f0cde6104b4573
  public function addData($data){
 	$this->db->insert('tb_sekolah',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }
  
  public function addAnggota($data){
 	$this->db->insert('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }
 public function addKegiatann($data){
 	$this->db->insert('tb_kegiatan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }
 public function check_data($id){
 	$this->db->where('id',$id);
 	$this->db->from('tb_sekolah');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }

 public function check_anggota($id){
 	$this->db->where('id',$id);
 	$this->db->from('tb_anggota');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }

  public function getDataById($id){
 	$this->db->where('id',$id);
 	$data = $this->db->get('tb_sekolah')->row();
 	return $data;
 }

  public function getDataByAnggota($id){
<<<<<<< HEAD
 	$this->db->where('id_anggota',$id);
=======
 	$this->db->where('id',$id);
>>>>>>> 8d6572d76750e65ef3a0816a12f0cde6104b4573
 	$data = $this->db->get('tb_anggota')->row();
 	return $data;
 }
 public function getDataByKegiatan($id){
<<<<<<< HEAD
 	$this->db->where('id_kegiatan',$id);
=======
 	$this->db->where('id',$id);
>>>>>>> 8d6572d76750e65ef3a0816a12f0cde6104b4573
 	$data = $this->db->get('tb_kegiatan')->row();
 	return $data;
 }
 public function updateData($id,$data){
 	$this->db->where('id',$id);
 	$this->db->update('tb_sekolah',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }


 public function updateAnggota($id,$data){
<<<<<<< HEAD
 	$this->db->where('id_anggota',$id);
=======
 	$this->db->where('id',$id);
>>>>>>> 8d6572d76750e65ef3a0816a12f0cde6104b4573
 	$this->db->update('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }

 public function updateKegiatan($id,$data){
<<<<<<< HEAD
 	$this->db->where('id_kegiatan',$id);
=======
 	$this->db->where('id',$id);
>>>>>>> 8d6572d76750e65ef3a0816a12f0cde6104b4573
 	$this->db->update('tb_kegiatan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }

 public function deleteData($id){
	$this->db->where('id',$id);
	$cek = $this->db->delete('tb_sekolah');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
	 public function deleteAnggota($id){
<<<<<<< HEAD
	$this->db->where('id_anggota',$id);
=======
	$this->db->where('id',$id);
>>>>>>> 8d6572d76750e65ef3a0816a12f0cde6104b4573
	$cek = $this->db->delete('tb_anggota');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
	 public function deleteKegiatan($id){
	$this->db->where('id',$id);
	$cek = $this->db->delete('tb_kegiatan');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
}

/* End of file ModelTulis.php */
/* Location: ./application/models/ModelTulis.php */