<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUpdateLogs extends CI_Model
{
    public function getUpdateLogs()
    {
        return $this->db->get('gameupdatelogs');
    }

    public function updateLogsWhere($where)
    {
        return $this->db->get_where('gameupdatelogs', $where);
    }

    public function simpanUpdateLogs($data = null)
    {
        $this->db->insert('gameupdatelogs', $data);
    }

    public function ubahUpdateLogs($data = null, $where = null)
    {
        $this->db->update('gameupdatelogs', $data, $where);
    }

    public function hapusUpdateLogs($where = null)
    {
        $this->db->delete('gameupdatelogs', $where);
    }

}