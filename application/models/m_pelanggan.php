<?php

class M_pelanggan Extends CI_Model{

    public function id_pelanggan()
    {
        $this->db->select('RIGHT(pelanggan.id_pelanggan,3) as kode', FALSE);
        $this->db->order_by('id_pelanggan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pelanggan');
        if ($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "PL".$kodemax;
        return  $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('id_pelanggan', $id);
        return $this->db->get('pelanggan')->row_array();
    }

    public function update($id_pelanggan, $data)
    {
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->update('pelanggan', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
    }

}