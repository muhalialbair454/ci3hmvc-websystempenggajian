<?php

class MSlipgaji extends CI_Model
{

    public function getAllDataPegawai()
    {
        $this->db->select("*");
        $this->db->from("tbl_data_pegawai");
        $query = $this->db->get();

        return $query->result();
    }

    public function getDataSlipGaji($bulantahun, $nama)
    {
        $query = $this->db->query(" SELECT  tbl_data_pegawai.nik,
                                            tbl_data_pegawai.nama_pegawai,
                                            tbl_data_jabatan.nama_jabatan,
                                            tbl_data_jabatan.gaji_pokok,
                                            tbl_data_jabatan.tunjangan_transport,
                                            tbl_data_jabatan.uang_makan,
                                            tbl_data_kehadiran.alpha
                                    FROM tbl_data_pegawai
                                    INNER JOIN tbl_data_kehadiran ON tbl_data_kehadiran.nik = tbl_data_pegawai.nik
                                    INNER JOIN tbl_data_jabatan ON tbl_data_jabatan.nama_jabatan = tbl_data_pegawai.nama_jabatan
                                    WHERE tbl_data_kehadiran.bulan = '$bulantahun' AND tbl_data_kehadiran.nama_pegawai = '$nama'
                                    ");

        return $query->result();
    }
}
