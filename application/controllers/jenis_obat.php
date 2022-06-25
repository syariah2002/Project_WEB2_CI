<?php

class Jenis_obat Extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_jenis_obat');
    }

    public function index()
    {
        $isi['content']  = 'jenis_obat/v_jenis_obat';
        $isi['judul']    = 'Daftar Data Jenis Obat';
        $isi['data']     = $this->db->get('jenis_obat')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_jenis_obat()
    {
        $isi['content']    = 'jenis_obat/form_jenis_obat';
        $isi['judul']      = 'Form Tambah Jenis Obat';
        $isi['id_jenis_obat'] = $this->m_jenis_obat->id_jenis_obat();
        $this->load->view('v_dashboard', $isi);
    }
    
    public function simpan()
    {
        $data = array(
            'id_jenis_obat'    => $this->input->post('id_jenis_obat'),
            'jenis_obat'  => $this->input->post('jenis_obat')
        );
        $query = $this->db->insert('jenis_obat', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('jenis_obat');
        }
    }

    public function edit($id)
    {
        $isi['content']    = 'jenis_obat/edit_jenis_obat';
        $isi['judul']      = 'Form Edit Jenis Obat';
        $isi['data']       = $this->m_jenis_obat->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_jenis_obat = $this->input->post('id_jenis_obat');
        $data = array (
            'id_jenis_obat'    => $this->input->post('id_jenis_obat'),
            'jenis_obat'       => $this->input->post('jenis_obat')
        );
        $query = $this->m_jenis_obat->update($id_jenis_obat, $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Update');
            redirect('jenis_obat');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_jenis_obat->hapus($id);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('jenis_obat');
        }
    }
}