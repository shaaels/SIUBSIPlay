<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UpdateLogs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['titlepage'] = "Game Update Logs";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['updatelogs'] = $this->ModelUpdateLogs->getUpdateLogs()->result_array();

        $this->load->view('templates/navgame');
        $this->load->view('user/gameupdatelogs', $data);
        $this->load->view('templates/footer');
    }

    public function tambahUpdateLogs()
    {
        $data['titlepage'] = 'Tambah Update Logs';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->ModelGame->getGame()->result_array();

        $this->form_validation->set_rules(
            'nama_gamelogs',
            'Nama Game Logs',
            'required|trim', [
                'required' => 'Kolom Nama Game Logs tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'tanggal_update',
            'Tanggal Update',
            'required|trim', [
                'required' => 'Kolom Tanggal Update tidak Boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/navuser');
            $this->load->view('user/tambahupdatelogs', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_gamelogs' => $this->input->post('nama_gamelogs', true),
                'judul_patch' => $this->input->post('judul_patch', true),
                'tautan_game' => $this->input->post('tautan_game', true),
                'tanggal_update' => $this->input->post('tanggal_update', true),
            ];
            $this->ModelUpdateLogs->simpanUpdateLogs($data);
            redirect('updatelogs');
        }
    }

    public function ubahUpdateLogs() {
        $data['titlepage'] = "Ubah Data Update Logs";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['updatelogs'] = $this->ModelUpdateLogs->updateLogsWhere(['id_logs' => $this->uri->segment(3)])->result_array();
        $data['game'] = $this->ModelGame->getGame()->result_array();

        $this->form_validation->set_rules(
            'nama_gamelogs',
            'Nama Game Logs',
            'required|trim', [
                'required' => 'Kolom Nama Game Logs tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'judul_patch',
            'Judul Patch',
            'required|trim', [
                'required' => 'Kolom Judul Patch tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'tanggal_update',
            'Tanggal Update',
            'required|trim', [
                'required' => 'Kolom Tanggal Update tidak Boleh Kosong'
        ]);

        //Form validasi
        if ($this->form_validation->run() == false) 
        {
            $this->load->view('templates/navuser', $data);
            $this->load->view('user/ubah_updatelogs', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_gamelogs' => $this->input->post('nama_gamelogs', true),
                'judul_patch' => $this->input->post('judul_patch', true),
                'tautan_game' => $this->input->post('tautan_game', true),
                'tanggal_update' => $this->input->post('tanggal_update', true),
            ];
            $this->ModelUpdateLogs->ubahUpdateLogs($data, ['id_logs' => $this->input->post('id_logs')]);
            redirect('updatelogs');
        }
    }

    public function hapusUpdateLogs()
    {
        $where = ['id_logs' => $this->uri->segment(3)];
        $this->ModelUpdateLogs->hapusUpdateLogs($where);
        redirect('updatelogs');
    }

    
}