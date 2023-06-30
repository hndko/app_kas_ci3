<?php
class kasMasuk_model extends CI_Model
{
    public function getData()
    {
        return $this->db->select('*')->from('tb_kas')->where('`pemasukan` IS NOT NULL')->order_by('tanggal', 'ASC')->order_by('pemasukan', 'ASC')->get()->result();
    }

    public function sumData()
    {
        return $this->db->select_sum('pemasukan')->from('tb_kas')->get()->row();
    }

    public function getDataByID($id)
    {
        return $this->db->get_where('tb_kas', ['kas_id' => $id])->row();
    }

    public function insertData()
    {
        $data = [
            'tanggal' => htmlspecialchars($this->input->post('tanggal')),
            'pemasukan' => htmlspecialchars($this->input->post('jumlah')),
            'keterangan' => htmlspecialchars($this->input->post('keterangan')),
        ];

        $this->db->insert('tb_kas', $data);
    }

    public function updateData($id)
    {
        $data = [
            'tanggal' => htmlspecialchars($this->input->post('tanggal')),
            'pemasukan' => htmlspecialchars($this->input->post('jumlah')),
            'keterangan' => htmlspecialchars($this->input->post('keterangan')),
        ];

        $this->db->where('kas_id', $id)->update('tb_kas', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('kas_id', $id)->delete('tb_kas');
    }
}
