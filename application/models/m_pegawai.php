<?php

class M_pegawai Extends CI_Model{

    public function id_pegawai()
    {
        $this->db->select('RIGHT(pegawai.id_pegawai,3) as kode', FALSE);
        $this->db->order_by('id_pegawai', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pegawai');
        if ($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "PG".$kodemax;
        return  $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('id_pegawai', $id);
        return $this->db->get('pegawai')->row_array();
    }

    public function update($id_pegawai, $data)
    {
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->update('pegawai', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
    }

}