<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function insert($params)
    {
        return $this->db->insert('users',$params);
    }

    public function update($params)
    {
        return $this->db->update('users',$params,$where);
    }

    public function delete($where)
    {
        return $this->db->insert('users',$where);
    }

}

/* End of file UserModel.php */
