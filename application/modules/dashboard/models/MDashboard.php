<?php

class MDashboard extends CI_Model
{

    public function getAmountOfDataPegawai()
    {
        $this->db->select("*");
        $this->db->from("tbl_data_pegawai");
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function getAmountOfDataAdmin($nama_jabatan)
    {
        $this->db->select("*");
        $this->db->from("tbl_data_pegawai");
        $this->db->where("nama_jabatan", $nama_jabatan);
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function getAmountOfDataJabatan()
    {
        $this->db->select("*");
        $this->db->from("tbl_data_jabatan");
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function getAmountOfDataKehadiran()
    {
        $this->db->select("*");
        $this->db->from("tbl_data_kehadiran");
        $query = $this->db->get();

        return $query->num_rows();
    }
}
