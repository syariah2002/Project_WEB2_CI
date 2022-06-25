<?php

class Pegawai Extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_pegawai');
    }

    public function index()
    {
        $isi['content']  = 'pegawai/v_pegawai';
        $isi['judul']    = 'Daftar Data Pegawai';
        $isi['data']     = $this->db->get('pegawai')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_pegawai()
    {
        $isi['content']    = 'pegawai/form_pegawai';
        $isi['judul']      = 'Form Tambah Pegawai';
        $isi['id_pegawai'] = $this->m_pegawai->id_pegawai();
        $this->load->view('v_dashboard', $isi);
    }
    
    public function simpan()
    {
        $data = array(
            'id_pegawai'      => $this->input->post('id_pegawai'),
            'nama_pegawai'    => $this->input->post('nama_pegawai'),
            'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
            'alamat'          => $this->input->post('alamat'),
            'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
            'no_telp'         => $this->input->post('no_telp')
        );
        $query = $this->db->insert('pegawai', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('pegawai');
        }
    }

    public function edit($id)
    {
        $isi['content']    = 'pegawai/edit_pegawai';
        $isi['judul']      = 'Form Edit Pegawai';
        $isi['data']       = $this->m_pegawai->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $data = array (
            'id_pegawai'      => $this->input->post('id_pegawai'),
            'nama_pegawai'    => $this->input->post('nama_pegawai'),
            'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
            'alamat'          => $this->input->post('alamat'),
            'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
            'no_telp'         => $this->input->post('no_telp')
        );
        $query = $this->m_pegawai->update($id_pegawai, $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Update');
            redirect('pegawai');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_pegawai->hapus($id);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('pegawai');
        }
    }
}