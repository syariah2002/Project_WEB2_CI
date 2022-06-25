<?php

class Penjualan Extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_penjualan');
    }

    public function index()
    {
        $isi['content']  = 'penjualan/v_penjualan';
        $isi['judul']    = 'Daftar Data penjualan';
        $isi['data']     = $this->db->get('penjualan')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_penjualan()
    {
        $isi['content']        = 'penjualan/form_penjualan';
        $isi['judul']          = 'Form Tambah Penjualan';
        $isi['kode_transaksi'] = $this->m_penjualan->kode_transaksi();
        $this->load->view('v_dashboard', $isi);
    }
    
    public function simpan()
    {
        $data = array(
            'kode_transaksi'  => $this->input->post('kode_transaksi'),
            'id_pelanggan'    => $this->input->post('id_pelanggan'),
            'id_jenis_obat'   => $this->input->post('id_jenis_obat'),
            'id_obat'         => $this->input->post('id_obat'),
            'id_pegawai'      => $this->input->post('id_pegawai'),
            'tanggal'         => $this->input->post('tanggal'),
            'jumlah_obat'     => $this->input->post('jumlah_obat'),
            'Total'           => $this->input->post('total')
        );
        $query = $this->db->insert('penjualan', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('penjualan');
        }
    }

    public function edit($id)
    {
        $isi['content']    = 'penjualan/edit_penjualan';
        $isi['judul']      = 'Form Edit Penjualan';
        $isi['data']       = $this->m_penjualan->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $kode_transaksi = $this->input->post('kode_transaksi');
        $data = array(
            'kode_transaksi'  => $this->input->post('kode_transaksi'),
            'id_pelanggan'    => $this->input->post('id_pelanggan'),
            'id_jenis_obat'   => $this->input->post('id_jenis_obat'),
            'id_obat'         => $this->input->post('id_obat'),
            'id_pegawai'      => $this->input->post('id_pegawai'),
            'tanggal'         => $this->input->post('tanggal'),
            'jumlah_obat'     => $this->input->post('jumlah_obat'),
            'Total'           => $this->input->post('total')
        );
        $query = $this->m_penjualan->update($kode_transaksi, $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Update');
            redirect('penjualan');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_penjualan->hapus($id);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('penjualan');
        }
    }
}