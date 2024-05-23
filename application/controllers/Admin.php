<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    
    public function index() {

        $data['titlepage'] = "Daftar Menu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['id_role'] == 1) {
                $this->load->view('admin/index', $data);
            } else {
                $this->load->view('user/index', $data);
            }
        }

    }

    public function daftarUser() {

        $data['titlepage'] = "Daftar User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->ModelUser->getUser()->result_array();

        $this->load->view('admin/userlist', $data);

    }

    public function ubahProfil() {
        $data['titlepage'] = "Ubah Data Pengguna";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->ModelUser->userWhere(['id_user' => $this->uri->segment(3)])->result_array();

        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|trim', [
                'required' => 'Nama tidak Boleh Kosong'
        ]);

        //Form validasi
        if ($this->form_validation->run() == false) 
        {
            $this->load->view('templates/navuser', $data);
            $this->load->view('admin/ubah_profil', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) 
            {
                //Eksekusi script
                $config['upload_path'] = './assets/img/profil/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|tif|svg|webp';
                $config['file_name'] = 'imguser' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) 
                {
                    $gambar_lama = $data['user']['image_user'];

                    if ($gambar_lama != 'default.jpg') { unlink(FCPATH . 'assets/img/profil/' . $gambar_lama); }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image_user', $gambar_baru);
                }
            }

            $this->db->set('nama_user', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            redirect('admin/daftarUser');
        }
    }

    public function hapusUser() {

        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
            
        if ($user) {
            if ($user['id_role'] == 1) {
                $where = ['id_user' => $this->uri->segment(3)];
                $this->ModelUser->deleteUser($where);
                redirect('admin/daftarUser');
            } else {
                redirect('user');
            }
        }

    }

}