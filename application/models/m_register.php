<?php 
class M_register extends CI_Model{
    function tampil_data()
    {
        return $this->db->get('user');
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
  
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    } 
    // function tampil_data_join()
    // {
    //     $this->db->select('id_kamar','nama_kamar','ukuran_kamar','harga_kamar','nama');
    //     $this->db->from('kamar');
    //     $this->db->join('user');
    //     $query=$this->db->get();
    // }
}