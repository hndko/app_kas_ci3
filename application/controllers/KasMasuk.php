<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KasMasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            redirect('login');
        }

        $this->load->model('kasMasuk_model', 'kasMasuk');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = [
            'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
            'title' => 'Penerimaan Kas',
            'result' => $this->kasMasuk->getData(),
            'sumData' => $this->kasMasuk->sumData()
        ];

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('kas-masuk/index', $data);
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
                'title' => 'Penerimaan Kas'
            ];

            $this->load->view('layout/head', $data);
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('kas-masuk/create');
            $this->load->view('layout/footer');
        } else {
            $this->kasMasuk->insertData();
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
            redirect('kas-masuk');
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
                'title' => 'Penerimaan Kas',
                'res' => $this->kasMasuk->getDataByID($id)
            ];

            $this->load->view('layout/head', $data);
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('kas-masuk/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->kasMasuk->updateData($id);
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
            redirect('kas-masuk');
        }
    }

    public function delete($id)
    {
        $this->kasMasuk->deleteData($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('kas-masuk');
    }
}
