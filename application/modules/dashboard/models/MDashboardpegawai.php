<?php

class MDashboardpegawai extends CI_Model
{
    public function getDataPegawai($idPegawai)
    {
        $this->db->select("*");
        $this->db->from("tbl_data_pegawai");
        $this->db->where('id_pegawai', $idPegawai);
        $query = $this->db->get();

        return $query->result();
    }
}
