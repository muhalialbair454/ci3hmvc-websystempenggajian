<?php

class MListdataabsensi extends CI_Model
{
    public function getAllDataAbsensi($bulantahun)
    {
        $query = $this->db->query("SELECT tbl_data_kehadiran.*, tbl_data_pegawai.nama_pegawai, tbl_data_pegawai.jenis_kelamin, tbl_data_pegawai.nama_jabatan
        FROM tbl_data_kehadiran
        INNER JOIN tbl_data_pegawai ON tbl_data_kehadiran.nik = tbl_data_pegawai.nik
        INNER JOIN tbl_data_jabatan ON tbl_data_pegawai.nama_jabatan = tbl_data_jabatan.nama_jabatan
        WHERE tbl_data_kehadiran.bulan = '$bulantahun'
        ORDER BY tbl_data_pegawai.nama_pegawai ASC");

        return $query->result();
    }

    public function getDataAbsensi($bulantahun)
    {
        $query = $this->db->query(" SELECT tbl_data_pegawai.*, tbl_data_jabatan.nama_jabatan
                                    FROM tbl_data_pegawai
                                    INNER JOIN tbl_data_jabatan ON tbl_data_pegawai.nama_jabatan = tbl_data_jabatan.nama_jabatan
                                    WHERE NOT EXISTS (SELECT * FROM tbl_data_kehadiran
                                                     WHERE bulan = '$bulantahun' AND tbl_data_pegawai.nik = tbl_data_kehadiran.nik)
                                                     ORDER BY tbl_data_pegawai.nama_pegawai ASC");
        return $query->result();
    }

    public function insert_batch($table = null, $data = array())
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->insert_batch($table, $data);
        }
    }
}
