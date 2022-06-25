<?php

class M_jenis_obat Extends CI_Model{

    public function id_jenis_obat()
    {
        $this->db->select('RIGHT(jenis_obat.id_jenis_obat,3) as kode', FALSE);
        $this->db->order_by('id_jenis_obat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('jenis_obat');
        if ($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "MT".$kodemax;
        return  $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('id_jenis_obat', $id);
        return $this->db->get('jenis_obat')->row_array();
    }

    public function update($id_jenis_obat, $data)
    {
        $this->db->where('id_jenis_obat', $id_jenis_obat);
        $this->db->update('jenis_obat', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_jenis_obat', $id);
        $this->db->delete('jenis_obat');
    }

}