<?php

class Laporan_model extends CI_Model
{
    public function getLaporan()
    {
        return $this->db->get('laporan')->result_array();
    }
    public function detail($id)
    {
        return $this->db->get_where('laporan', array('id' => $id))->row_array();
    }

    public function tambah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");

        $file = $_FILES['File'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/files';
            $config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('File')) {
                echo "Gagal Upload File";
            } else {
                $file = $this->upload->data('file_name');
            }
        }
        $data = [
            "isi" => $this->input->post('isi_laporan'),
            "aspek" => $this->input->post('aspek_laporan'),
            "tanggal" => $tanggal,
            "file" => $file
        ];

        $this->db->insert('laporan', $data);
    }

    public function search($search)
    {
        $this->db->like('isi', $search);
        $this->db->or_like('tanggal', $search);
        $this->db->or_like('aspek', $search);

        return $this->db->get('laporan')->result_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('laporan');
    }
    public function edit($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");

        $file = $_FILES['File'];
        if ($file = '') {
        } else {
            // $config['upload_path'] = './asset/file';
            $config['upload_path'] = './assets/files';
            $config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('File')) {
                echo "Gagal Upload File";
            } else {
                $file = $this->upload->data('file_name');
            }
        }
        $data = [
            "isi" => $this->input->post('isi_laporan'),
            "aspek" => $this->input->post('aspek_laporan'),
            "tanggal" => $tanggal,
            "file" => $file
        ];

        $this->db->insert('laporan', $data);
    }
}
