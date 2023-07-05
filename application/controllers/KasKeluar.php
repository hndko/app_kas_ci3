<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KasKeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            redirect('login');
        }

        $this->load->model('kasKeluar_model', 'kasKeluar');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = [
            'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
            'title' => 'Pengeluaran Kas',
            'result' => $this->kasKeluar->getData(),
            'sumData' => $this->kasKeluar->sumData()
        ];

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('kas-keluar/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
                'title' => 'Pengeluaran Kas'
            ];

            $this->load->view('layout/head', $data);
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('kas-keluar/create');
            $this->load->view('layout/footer');
        } else {
            $this->kasKeluar->insertData();
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
            redirect('kas-keluar');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
                'title' => 'Pengeluaran Kas',
                'res' => $this->kasKeluar->getDataByID($id)
            ];

            $this->load->view('layout/head', $data);
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('kas-keluar/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->kasKeluar->updateData($id);
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
            redirect('kas-keluar');
        }
    }

    public function delete($id)
    {
        $this->kasKeluar->deleteData($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('kas-keluar');
    }
}
