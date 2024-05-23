<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Kolom email harus terisi!',
            'valid_email' => 'Email yang anda masukkan tidak valid!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Kolom password harus terisi!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/login');
        } else {
            //validasi sukses
            $this->isLoginValid();
        }
    }

    public function pageBeranda() {
        $this->load->view('templates/nav');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    public function login() {
        $this->load->view('user/login');
    }

    private function isLoginValid() {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'id_role' => $user['id_role']
                ];
                $this->session->set_userdata($data);

                if ($user['id_role'] == 1) {
                    redirect('admin');
                    $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Anda login sebagai Admin!</div>');
                } else {
                    redirect('user');
                    $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Anda login sebagai User!</div>');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password yang anda masukkan salah!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!</div>');
            redirect('Auth');
        }
    }

    public function registrasi() {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[5]', [
            'required' => 'Kolom Username harus terisi!',
            'min_length' => 'Username yang anda masukkan terlalu pendek!',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email tersebut telah digunakan!',
            'required' => 'Kolom Email harus terisi!',
            'valid_email' => 'Harap masukkan email yang valid!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[retype_password]', [
            'required' => 'Kolom Password harus terisi!',
            'matches' => 'Password tidak sesuai!',
            'min_length' => 'Password yang anda masukkan terlalu pendek!',
        ]);
        $this->form_validation->set_rules('retype_password', 'Password', 'required|trim|matches[password]', [
            'required' => 'Kolom Re-type Password harus terisi!',
            'matches' => 'Password tidak sesuai!',
            'min_length' => 'Password yang anda masukkan terlalu pendek!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/registrasi');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'id_user' => '',
                'nama_user' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image_user' => 'default.jpg',
                'id_role' => 2,
                'regdate' => time(),
            ];

            $this->db->insert('user', $data);

            echo "<script>alert('Anda telah berhasil mendaftarkan akun, Silahkan Login jika ingin!'); window.location = '../Auth';</script>";
            // redirect('Auth');
        }
    }

    public function logout() {
        $this->session->unset_userdata('email');
        redirect('Auth');
    }

}
