<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index() {

        $data['titlepage'] = "Daftar Game";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->ModelGame->getGame()->result_array();

        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['id_role'] == 1) {
                $this->load->view('admin/gamelist', $data);
            } else {
                $this->load->view('user/gamelist', $data);
            }
        }
        
    }

    public function infoGame() {

        $data['titlepage'] = "Info Game";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->ModelGame->gameWhere(['id_game' => $this->uri->segment(3)])->result_array();

        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['id_role'] == 1) {
                $this->load->view('templates/navgame');
                $this->load->view('admin/infogame', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/navgame');
                $this->load->view('user/infogame', $data);
                $this->load->view('templates/footer');
            }
        }

    }

    public function gameplayGuides() {

        $data['titlepage'] = "Panduan Bermain";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->ModelGame->gameWhere(['id_game' => $this->uri->segment(3)])->result_array();

        $this->load->view('templates/navgame');
        $this->load->view('user/gameplayguides', $data);
        $this->load->view('templates/footer');

    }

    public function tambahGame() {

        $data['titlepage'] = 'Tambah Game';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['category'] = $this->ModelGame->getCategory()->result_array();

        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        $this->form_validation->set_rules(
            'nama_game',
            'Nama Game',
            'required|trim', [
                'required' => 'Kolom Nama Game tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'publisher_game',
            'Publisher Game',
            'required|trim', [
                'required' => 'Kolom Publisher tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'developer_game',
            'Developer Game',
            'required|trim', [
                'required' => 'Kolom Developer tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'harga_game',
            'Harga Game',
            'required|trim|numeric', [
                'required' => 'Kolom Harga tidak Boleh Kosong',
                'numeric' => 'Kolom Harga hanya boleh diisi angka'
        ]);

        $this->form_validation->set_rules(
            'tglrilis',
            'Tanggal Rilis',
            'required|trim', [
                'required' => 'Kolom Tanggal Rilis tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'url_game',
            'Url Game',
            'required|trim', [
                'required' => 'Kolom Tautan Game tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'gameplay_guides',
            'Panduan Bermain',
            'required|trim', [
                'required' => 'Kolom Panduan Bermain tidak Boleh Kosong'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/game_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|tif|svg|webp';
        $config['file_name'] = 'gameimg' . time();
        $this->load->library('upload', $config);
        if ($user) {
            if ($user['id_role'] == 1) {
                if ($this->form_validation->run() == false) {
                    $this->load->view('templates/navuser');
                    $this->load->view('admin/tambahgame', $data);
                    $this->load->view('templates/footer');
                } else {
                    if ($this->upload->do_upload('image')) {
                        $image = $this->upload->data();
                        unlink('assets/img/game_image/' . $this->input->post('old_pict', true));
                        $gambar = $image['file_name'];
                    } else {
                        $gambar = $this->input->post('old_pict', true);
                    }
        
                    $data = [
                        'nama_game' => $this->input->post('nama_game', true),
                        'id_category' => $this->input->post('id_category', true),
                        'publisher_game' => $this->input->post('publisher_game', true),
                        'developer_game' => $this->input->post('developer_game', true),
                        'harga_game' => $this->input->post('harga_game', true),
                        'tglrilis' => $this->input->post('tglrilis', true),
                        'url_game' => $this->input->post('url_game', true),
                        'gameplay_guides' => $this->input->post('gameplay_guides', true),
                        'gambar_game' => $gambar
                    ];
                    $this->ModelGame->simpanGame($data);
                    redirect('game');
                }
            } else {
                redirect('game');
            }
        }
        
    }

    public function ubahDataGame() {
        $data['titlepage'] = "Ubah Data Game";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->ModelGame->gameWhere(['id_game' => $this->uri->segment(3)])->result_array();
        $data['category'] = $this->ModelGame->getCategory()->result_array();

        $this->form_validation->set_rules(
            'nama_game',
            'Nama Game',
            'required|trim', [
                'required' => 'Kolom Nama Game tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'publisher_game',
            'Publisher Game',
            'required|trim', [
                'required' => 'Kolom Publisher tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'developer_game',
            'Developer Game',
            'required|trim', [
                'required' => 'Kolom Developer tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'id_category',
            'ID Category',
            'required|trim', [
                'required' => 'Kolom ID Category tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'harga_game',
            'Harga Game',
            'required|trim', [
                'required' => 'Kolom Harga tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'tglrilis',
            'Tanggal Rilis',
            'required|trim', [
                'required' => 'Kolom Tanggal Rilis tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'url_game',
            'Url Game',
            'required|trim', [
                'required' => 'Kolom Tautan Game tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules(
            'gameplay_guides',
            'Panduan Bermain',
            'required|trim', [
                'required' => 'Kolom Panduan Bermain tidak Boleh Kosong'
        ]);

        //Form validasi
        if ($this->form_validation->run() == false) 
        {

            $email = $this->session->userdata('email');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                if ($user['id_role'] == 1) {
                    $this->load->view('templates/navgame', $data);
                    $this->load->view('admin/ubah_game', $data);
                    $this->load->view('templates/footer');
                } else {
                    redirect('game');
                }
            }

        } else {
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) 
            {
                //Eksekusi script
                $config['upload_path'] = './assets/img/game_image/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|tif|svg|webp';
                $config['file_name'] = 'gameimg' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) 
                {
                    $gambar_lama = $data['game']['image'];

                    if ($gambar_lama != 'default.jpg') { unlink(FCPATH . 'assets/img/game_image/' . $gambar_lama); }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('gambar_game', $gambar_baru);
                }
            }

            $data = [
                'nama_game' => $this->input->post('nama_game', true),
                'publisher_game' => $this->input->post('publisher_game', true),
                'developer_game' => $this->input->post('developer_game', true),
                'harga_game' => $this->input->post('harga_game', true),
                'id_category' => $this->input->post('id_category', true),
                'tglrilis' => $this->input->post('tglrilis', true),
                'url_game' => $this->input->post('url_game', true),
                'gameplay_guides' => $this->input->post('gameplay_guides', true),
            ];
            $this->ModelGame->ubahGame($data, ['id_game' => $this->input->post('id_game')]);
            redirect('game');
        }
    }

    public function hapusGame() {

        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
            
        if ($user) {
            if ($user['id_role'] == 1) {
                $where = ['id_game' => $this->uri->segment(3)];
                $this->ModelGame->hapusGame($where);
                redirect('game');
            } else {
                redirect('game');
            }
        }

    }

}