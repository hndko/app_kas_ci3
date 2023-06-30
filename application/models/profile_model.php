<?php
class profile_model extends CI_Model
{
    public function updateData()
    {
        $data = [
            'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap')),
            'username' => htmlspecialchars($this->input->post('username')),
        ];

        $this->db->where('user_id', $this->input->post('user_id'))->update('tb_users', $data);
    }

    public function updatePassword()
    {
        $data = [
            'password' => password_hash(htmlspecialchars($this->input->post('password')), PASSWORD_DEFAULT),
        ];

        $this->db->where('user_id', $this->input->post('user_id'))->update('tb_users', $data);
    }
}
