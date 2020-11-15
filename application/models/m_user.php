<?php 
class M_user extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('user');
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function cek($email, $password)
	{
		$this->db->select('*');
		$this->db->where(array('password'=> $password,'email' => $email));
		
		return $this->db->get('user');
	}
	function edit_data($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	function get_user_list($limit, $start){

		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by("id", "asc");
		$this->db->limit($limit, $start);
		if($queryGetUserActivityData=$this->db->get()){
			return $queryGetUserActivityData;
		}else{
			return 'data not entry';
		}
	}
	// function userprofile($where, $table)
	// {
	// 	return $this->db->get_where($table,$where);
	// }
	// public function userprofile($idprofile)
	// {
	// 	return $this->db->get_where('user',['id' => $idprofile])->row();
	// }
	public function userprofile($id)
	{
		return $this->db->get_where('user',['id' => $id])->row();
	}
	// function tampil_data_join(){
	// 	$this->db->select('id_kamar','nama_kamar','ukuran_kamar','harga_kamar','nama');
	// 	$this->db->from('kamar');
	// 	$this->db->join('user');
	// 	$query=$this->db->get();
	// }
}