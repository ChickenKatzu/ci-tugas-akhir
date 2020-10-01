<?php 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('kamar');
	}
	function tampil_data_join(){
		$this->db->select('id_kamar','ukuran_kamar','harga_kamar','nama');
		$this->db->from('kamar');
		$this->db->join('user');
		$query=$this->db->get();
	}
	function input_data($data, $table){
		$this->db->insert($data, $table);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}