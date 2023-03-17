<?php
class UserModel extends CI_Model
{
    public function getdata()
    {
        $query = $this->db->get('users');
        if ($query) {
            return $query->result();
        }
    }
    public function insertdata($data)
    {
        $this->db->insert('users', $data);
    }
    public function deleteitem($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->delete('users');
        if ($query) {
            return true;

        } else {
            return false;

        }
    }
    public function edit_model($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('users');
        if ($query) {
            return $query->row();
        }
    }
    public function updatedata($data, $id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->update('users', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}



?>