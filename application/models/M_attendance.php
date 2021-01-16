<?php 
/**
 * 
 */
class M_attendance extends CI_Model
{
	public function tampil_data_join(){
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

	public function tampil_data_user($idsession)
	{
		// $this->db->select('nama');
		// $this->db->from('user');
		// $this->db->where('id = ?');
		$sql="SELECT * from absen where absen.id_absen = ? ";
		$query=$this->db->query($sql,$idsession);
		if ($query->num_rows() > 0) {
			$result=$query->row();
			return $result;
		}else{
			return false;
		}
		// return $query->result();
	}

	public function absen3($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function absen($absendata,$table)
	{
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');
		$this->db->set('absen', $now);
		$this->db->set('user_log', 'logout');
		$this->db->insert('absen');
	}

	public function absen1($absendata, $table)
	{
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');
		$sql = "INSERT INTO absen ('date($now)','') 
		SELECT * FROM user 
		JOIN absen on absen.id_absen = user.id_absen
		JOIN user on user.id = absen.id";
		$query = $this->db->insert();
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
}
?>