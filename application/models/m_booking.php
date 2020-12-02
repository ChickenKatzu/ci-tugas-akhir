<?php 
class M_booking extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('kamar');
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function tampil_data_join(){
		$this->db->select('*, b.status as status_booking');
		$this->db->from('booking b');
		$this->db->join('user u','u.id = b.id');
		$this->db->join('kamar k','k.id_kamar = b.id_kamar');
		$this->db->order_by('b.id_booking', 'asc');
		$query=$this->db->get();

		// echo json_encode($query->result());
		// echo $query->num_rows();
		// echo print_r($query->result());die();
		return $query->result();
	}
	public function tampil_data_join_booking($id_booking)
	{

		// echo json_encode($id_booking);
		$sql="SELECT b.*,k.*,u.*,b.status as status_payment,u.gambar as gambar_user
		FROM booking b
		INNER JOIN kamar k on k.id_kamar = b.id_kamar
		INNER JOIN user u on u.id = b.id
		WHERE b.id_booking = ? ";
		$query = $this->db->query($sql,$id_booking);
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$query->free_result();
			return $result;
		} else {
			return array();
		}
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
	public function tampildatajoininbox($id)
	{
		$sql="SELECT u.*,b.*
		FROM booking b
		JOIN user u on u.id = b.id
		JOIN kamar k on k.id_kamar = b.id_kamar
		WHERE u.id = ? ";
		$query=$this->db->query($sql,$id)->row();
		return $query->array()->num_rows();
	}
	function tampil_data_join_inbox($id) 
	{
		$sql = "SELECT b.*,u.*,k.* ,b.status as status_booking
		FROM booking b 
		JOIN user u ON u.id = b.id
		JOIN kamar k ON k.id_kamar = b.id_kamar
		WHERE u.id = ?";
		$query = $this->db->query($sql, $id);
		if ($query->num_rows() > 0) {
			$result = $query->result();
			// $query->free_result();
			return $result;
		} else {
			return array();
		}
	}
	function tampil_data_join_inbox_detail($where) 
	{

		// echo json_encode($where);
		$sql = "SELECT b.*,u.*,k.* ,b.status as status_booking
		FROM booking b 
		JOIN user u ON u.id = b.id
		JOIN kamar k ON k.id_kamar = b.id_kamar
		WHERE b.id_booking = ?";
		$query = $this->db->query($sql, $where);
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$query->free_result();
			return $result;
		} else {
			return array();
		}
	}	
	// function hapus_data_join_payment($id) 
	// {
	// 	$sql = "SELECT b.*,u.*,k.* ,b.status as status_booking
	// 	FROM booking b 
	// 	JOIN user u ON u.id = b.id
	// 	JOIN kamar k ON k.id_kamar = b.id_kamar
	// 	WHERE u.id = ?";
	// 	$query = $this->db->query($sql, $id);
	// 	if ($query->num_rows() > 0) {
	// 		$result = $query->result();
	// 		// $query->free_result();
	// 		return $result;
	// 	} else {
	// 		return array();
	// 	}
	// }

	function hapus_data_join_payment($where)
	{
		// echo json_encode($where['id_booking']);
		$sql = "SELECT *
		FROM booking 
		WHERE id_booking = ?";
		$query = $this->db->query($sql, $where['id_booking']);
		$data = $query->row_array();
		// echo json_encode($id_kamar);
		echo json_encode($data['id_kamar']);
		// var_dump($data);

		$this->db->where('id_booking', $where['id_booking']);
		$this->db->delete('booking');
		if ($this->db->affected_rows() > 0) {
			$this->db->set('status', $where['status_booking']);
			$this->db->where('id_kamar',$data['id_kamar']);
			$this->db->update('kamar');	
			if ($this->db->affected_rows() > 0) {
				return true;
			}else{
				return false;
			}
		}

	}

	function update_data_payment($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function userprofile($id)
	{
		return $this->db->get_where('user',['id' => $id])->row();
	}
	// function tampil_data_join_inbox($id){
	// 	$this->db->select('*, b.status as status_booking, b.id as id_booking,u.id as user_id');
	// 	$this->db->from('booking b');
	// 	$this->db->join('user u','u.id = b.id');
	// 	$this->db->join('kamar k','k.id_kamar = b.id_kamar');
	// 	$this->db->order_by('b.id_booking', 'asc');
	// 	$query=$this->db->get_where(['u.id' => $id])->row();
	// 	echo json_encode($query->result());
	// 	echo $query->num_rows();
	// 	echo print_r($query->result());die();
	// 	return $query->result();
	// }
}