<?php
class Rekapitulasi_model extends CI_Model
{
    public function getData()
    {
        return $this->db->select('*')->from('tb_kas')->order_by('kas_id', 'ASC')->get()->result();
    }

    public function sumData()
    {
        return $this->db->select_sum('pemasukan')->from('tb_kas')->get()->row();
    }
}
