<?php

class MListdatapegawai extends CI_Model
{
    public function getAllDataPegawai()
    {
        $this->db->select('*');
        $this->db->from('tbl_data_pegawai');
        $query = $this->db->get();

        return $query->result();
    }

    public function insertDataPegawai($dataPegawai = array())
    {
        if ($this->db->insert('tbl_data_pegawai', $dataPegawai)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getDataPegawai($idPegawai)
    {
        $this->db->select("*");
        $this->db->from("tbl_data_pegawai");
        $this->db->where("id_pegawai", $idPegawai);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateDataPegawai($idPegawai, $dataPegawai = array())
    {
        $this->db->where('id_pegawai', $idPegawai);
        return $this->db->update("tbl_data_pegawai", $dataPegawai);
    }

    public function deleteDataPegawai($idPegawai)
    {
        $this->db->where('id_pegawai', $idPegawai);
        return $this->db->delete("tbl_data_pegawai");
    }
}
