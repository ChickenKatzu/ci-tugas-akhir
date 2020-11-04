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
		$this->db->select('*');
		$this->db->from('booking b');
		$this->db->join('user u','u.id = b.id');
		$this->db->join('kamar k','k.id_kamar = b.id_kamar');
		$this->db->order_by('b.id_booking', 'asc');
		$query=$this->db->get();
		// echo json_encode($query->result());
		// echo $query->num_rows();
		return $query->result();
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
}