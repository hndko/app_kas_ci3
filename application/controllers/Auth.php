<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->session->userdata('logged') != TRUE) {
            if ($this->form_validation->run() == false) {
                $data = [
                    'title' => 'Form Login'
                ];

                $this->load->view('layout/head', $data);
                $this->load->view('auth/login');
                $this->load->view('layout/footer');
            } else {
                $this->_login();
            }
        } else {
            redirect(base_url());
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = htmlspecialchars($this->input->post('password', true));

        $user = $this->db->get_where('tb_users', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'user_id' => $user['user_id'],
                    'logged' => TRUE
                ];

                $this->session->set_userdata($data);
                redirect(base_url());
            } else {
                $this->session->set_flashdata('danger', true);
                $this->session->set_flashdata('message', '<strong>Tidak Berhasil!</strong> Password Salah.');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('danger', true);
            $this->session->set_flashdata('message', '<strong>Tidak Berhasil!</strong> Username tidak terdaftar.');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Kamu berhasil keluar dari aplikasi.');
        redirect('login');
    }
}
