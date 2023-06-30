<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model', 'profile');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->form_validation->set_rules('user_id', 'User ID', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
                'title' => 'Profile'
            ];

            $this->load->view('layout/head', $data);
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('profile');
            $this->load->view('layout/footer');
        } else {
            $this->profile->updateData();
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
            redirect('profile');
        }
    }

    public function password()
    {
        $this->form_validation->set_rules('user_id', 'User ID', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
                'title' => 'Profile'
            ];

            $this->load->view('layout/head', $data);
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('profile');
            $this->load->view('layout/footer');
        } else {
            $this->profile->updatePassword();
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
            redirect('profile');
        }
    }
}
