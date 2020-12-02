<?php 
class M_kamar extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('kamar');
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	// function edit_data($where)
	// {
	// 	$sql="SELECT * from kamar where id_kamar = ? ";
	// 	$query=$this->db->query($sql,$where);
	// 	if ($query->num_rows() > 0) {
	// 		$result=$query->row();
	// 		return $result->result();
	// 	}else{
	// 		return array();
	// 	}
	// 	// return $query->result();
	// }
	function edit_data($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function tampil_data_join($id){
		$this->db->select('*');
		$this->db->from('kamar');
		$this->db->join('user');
		$query=$this->db->get_where('user',['id'=>$id]);
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