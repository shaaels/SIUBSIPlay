<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function getUser()
    {
        return $this->db->get('user');
    }

    public function userWhere($where)
    {
        return $this->db->get_where('user', $where);
    }

    public function saveUser($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function editUser($data = null, $where = null)
    {
        $this->db->update('user', $data, $where);
    }

    public function deleteUser($where = null)
    {
        $this->db->delete('user', $where);
    }

}