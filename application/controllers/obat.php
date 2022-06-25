<?php

class Obat Extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_obat');
    }

    public function index()
    {
        $isi['content']  = 'obat/v_obat';
        $isi['judul']    = 'Daftar Data Obat';
        $isi['data']     = $this->db->get('obat')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_obat()
    {
        $isi['content']    = 'obat/form_obat';
        $isi['judul']      = 'Form Tambah Obat';
        $isi['id_obat']    = $this->m_obat->id_obat();
        $this->load->view('v_dashboard', $isi);
    }
    
    public function simpan()
    {
        $data = array(
            'id_obat'          => $this->input->post('id_obat'),
            'id_jenis_obat'    => $this->input->post('id_jenis_obat'),
            'nama_obat'        => $this->input->post('nama_obat'),
            'harga_obat'       => $this->input->post('harga_obat'),
            'stok'             => $this->input->post('stok')
        );
        $query = $this->db->insert('obat', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('obat');
        }
    }

    public function edit($id)
    {
        $isi['content']    = 'obat/edit_obat';
        $isi['judul']      = 'Form Edit Obat';
        $isi['data']       = $this->m_obat->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_obat = $this->input->post('id_obat');
        $data = array (
            'id_obat'          => $this->input->post('id_obat'),
            'id_jenis_obat'    => $this->input->post('id_jenis_obat'),
            'nama_obat'        => $this->input->post('nama_obat'),
            'harga_obat'       => $this->input->post('harga_obat'),
            'stok'             => $this->input->post('stok')
        );
        $query = $this->m_obat->update($id_obat, $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Update');
            redirect('obat');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_obat->hapus($id);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('obat');
        }
    }
}