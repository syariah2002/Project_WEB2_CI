<?php

class M_penjualan Extends CI_Model{

    public function kode_transaksi()
    {
        $this->db->select('RIGHT(penjualan.kode_transaksi,3) as kode', FALSE);
        $this->db->order_by('kode_transaksi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('penjualan');
        if ($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "TS".$kodemax;
        return  $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('kode_transaksi', $id);
        return $this->db->get('penjualan')->row_array();
    }

    public function update($kode_transaksi, $data)
    {
        $this->db->where('kode_transaksi', $kode_transaksi);
        $this->db->update('penjualan', $data);
    }

    public function hapus($id)
    {
        $this->db->where('kode_transaksi', $id);
        $this->db->delete('penjualan');
    }

}