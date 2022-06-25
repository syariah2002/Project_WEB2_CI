<?php

class M_obat Extends CI_Model{

    public function id_obat()
    {
        $this->db->select('RIGHT(obat.id_obat,3) as kode', FALSE);
        $this->db->order_by('id_obat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('obat');
        if ($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "MN".$kodemax;
        return  $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('id_obat', $id);
        return $this->db->get('obat')->row_array();
    }

    public function update($id_obat, $data)
    {
        $this->db->where('id_obat', $id_obat);
        $this->db->update('obat', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_obat', $id);
        $this->db->delete('obat');
    }

}