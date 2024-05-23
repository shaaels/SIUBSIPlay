<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelGame extends CI_Model
{
    public function getGame()
    {
        return $this->db->get('game');
    }

    public function gameWhere($where)
    {
        return $this->db->get_where('game', $where);
    }

    public function simpanGame($data = null)
    {
        $this->db->insert('game', $data);
    }

    public function ubahGame($data = null, $where = null)
    {
        $this->db->update('game', $data, $where);
    }

    public function hapusGame($where = null)
    {
        $this->db->delete('game', $where);
    }

    public function rupiah($angka) {
        $hasil = 'Rp' . number_format($angka, 2, ",", ".");
        return $hasil;
    }

    // Kategori

    public function getCategory()
    {
        return $this->db->get('category');
    }

    public function categoryWhere($where)
    {
        return $this->db->get_where('category', $where);
    }

}