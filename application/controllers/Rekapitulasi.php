<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekapitulasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rekapitulasi_model', 'Rekapitulasi');
        $this->load->model('kasMasuk_model', 'kasMasuk');
        $this->load->model('kasKeluar_model', 'kasKeluar');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = [
            'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
            'title' => 'Rekapitulasi',
            'result' => $this->Rekapitulasi->getData(),
            'sumMasuk' => $this->kasMasuk->sumData(),
            'sumKeluar' => $this->kasKeluar->sumData(),
        ];

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('rekapitulasi/index', $data);
        $this->load->view('layout/footer');
    }
}
