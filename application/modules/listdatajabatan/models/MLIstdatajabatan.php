<?php

class MListdatajabatan extends CI_Model
{
    public function getAllDataJabatan()
    {
        $this->db->select("*");
        $this->db->from("tbl_data_jabatan");
        $query = $this->db->get();

        return $query->result();
    }

    public function insertDataJabatan($dataJabata)
    {
        if ($this->db->insert("tbl_data_jabatan", $dataJabata)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getDataPegawai($idJabatan)
    {
        $this->db->select("*");
        $this->db->from("tbl_data_jabatan");
        $this->db->where("id_jabatan", $idJabatan);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateDataJabatan($idJabatan, $dataJabatan = array())
    {
        $this->db->where('id_jabatan', $idJabatan);
        return $this->db->update('tbl_data_jabatan', $dataJabatan);
    }

    public function deleteDataJabatan($idJabatan)
    {
        $this->db->where('id_jabatan', $idJabatan);
        return $this->db->delete("tbl_data_jabatan");
    }
}
