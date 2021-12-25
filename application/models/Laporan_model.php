<?php

class Laporan_model extends CI_Model
{
    public function getLaporan()
    {
        return $this->db->get('laporan')->result_array();
    }
    public function search($search)
    {
        $this->db->like('isi', $search);
        $this->db->or_like('tanggal', $search);
        $this->db->or_like('aspek', $search);

        return $this->db->get('laporan')->result_array();
    }
}
