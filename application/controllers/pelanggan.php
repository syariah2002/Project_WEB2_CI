<?php

class Pelanggan Extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_pelanggan');
    }

    public function index()
    {
        $isi['content']  = 'pelanggan/v_pelanggan';
        $isi['judul']    = 'Daftar Data pelanggan';
        $isi['data']     = $this->db->get('pelanggan')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_pelanggan()
    {
        $isi['content']    = 'pelanggan/form_pelanggan';
        $isi['judul']      = 'Form Tambah pelanggan';
        $isi['id_pelanggan'] = $this->m_pelanggan->id_pelanggan();
        $this->load->view('v_dashboard', $isi);
    }
    
    public function simpan()
    {
        $data = array(
            'id_pelanggan'    => $this->input->post('id_pelanggan'),
            'nama_pelanggan'  => $this->input->post('nama_pelanggan'),
            'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
            'alamat'          => $this->input->post('alamat')
        );
        $query = $this->db->insert('pelanggan', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('pelanggan');
        }
    }

    public function edit($id)
    {
        $isi['content']    = 'pelanggan/edit_pelanggan';
        $isi['judul']      = 'Form Edit Pelanggan';
        $isi['data']       = $this->m_pelanggan->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_pelanggan = $this->input->post('id_pelanggan');
        $data = array (
            'id_pelanggan'    => $this->input->post('id_pelanggan'),
            'nama_pelanggan'  => $this->input->post('nama_pelanggan'),
            'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
            'alamat'          => $this->input->post('alamat')
        );
        $query = $this->m_pelanggan->update($id_pelanggan, $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Update');
            redirect('pelanggan');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_pelanggan->hapus($id);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('pelanggan');
        }
    }
}