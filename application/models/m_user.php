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
		if($query=$this->db->get()){
			return $query;
		}else{
			return 'data not entry';
		}
	}
	// function tampil_data_user($id) 
	// {
	// 	$sql = "SELECT b.*,u.*,k.*
	// 	FROM booking b 
	// 	JOIN user u ON u.id = b.id
	// 	JOIN kamar k ON k.id_kamar = b.id_kamar
	// 	WHERE u.id = ?";
	// 	$query = $this->db->query($sql,$id);
	// 	if ($query->num_rows() > 0) {
	// 		$result = $query->row();
	// 		$query->free_result();
	// 		return $result;
	// 		// return true;
	// 	} else {
	// 		return array();
	// 	}
	// }
	function tampil_data_user($idsession)
	{
		// $this->db->select('nama');
		// $this->db->from('user');
		// $this->db->where('id = ?');
		$sql="SELECT * from user where user.id = ? ";
		$query=$this->db->query($sql,$idsession);
		if ($query->num_rows() > 0) {
			$result=$query->row();
			return $result;
		}else{
			return false;
		}
		// return $query->result();
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