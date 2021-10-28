<?php

class MListdatagaji extends CI_Model
{
    public function getAllDataGaji($bulantahun)
    {
        $query = $this->db->query("  SELECT  tbl_data_pegawai.nik,
                                    tbl_data_pegawai.nama_pegawai,
                                    tbl_data_pegawai.jenis_kelamin,
                                    tbl_data_jabatan.nama_jabatan,
                                    tbl_data_jabatan.gaji_pokok,
                                    tbl_data_jabatan.tunjangan_transport,
                                    tbl_data_jabatan.uang_makan,
                                    tbl_data_kehadiran.alpha
                                FROM tbl_data_pegawai
                                INNER JOIN tbl_data_kehadiran ON tbl_data_kehadiran.nik = tbl_data_pegawai.nik
                                INNER JOIN tbl_data_jabatan ON tbl_data_jabatan.nama_jabatan = tbl_data_pegawai.nama_jabatan
                                WHERE tbl_data_kehadiran.bulan = '$bulantahun'
                                ORDER BY tbl_data_pegawai.nama_pegawai ASC
                                ");

        return $query->result();
    }
}
