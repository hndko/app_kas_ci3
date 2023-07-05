<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'account' => $this->db->get_where('tb_users', ['user_id' => $this->session->userdata('user_id')])->row(),
            'title' => 'Dashboard',
            'sumPenerimaanThisMonth' => $this->db->select_sum('pemasukan')->from('tb_kas')->where('MONTH(tanggal)', date('m'))->where('`pemasukan` IS NOT NULL')->get()->row(),
            'sumPenerimaanLastMonth' => $this->db->select_sum('pemasukan')->from('tb_kas')->where('MONTH(tanggal) = MONTH(CURDATE() - INTERVAL 1 MONTH)')->where('`pemasukan` IS NOT NULL')->get()->row(),
            'sumPenerimaan' => $this->db->select_sum('pemasukan')->from('tb_kas')->where('`pemasukan` IS NOT NULL')->get()->row(),
            'sumPengeluaranThisMonth' => $this->db->select_sum('pengeluaran')->from('tb_kas')->where('MONTH(tanggal)', date('m'))->where('`pengeluaran` IS NOT NULL')->get()->row(),
            'sumPengeluaranLastMonth' => $this->db->select_sum('pengeluaran')->from('tb_kas')->where('MONTH(tanggal) = MONTH(CURDATE() - INTERVAL 1 MONTH)')->where('`pengeluaran` IS NOT NULL')->get()->row(),
            'sumPengeluaran' => $this->db->select_sum('pengeluaran')->from('tb_kas')->where('`pengeluaran` IS NOT NULL')->get()->row(),
        ];

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('index');
        $this->load->view('layout/footer');
    }
}
