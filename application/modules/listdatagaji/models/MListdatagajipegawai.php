<?php

class MListdatagajipegawai extends CI_Model
{
    public function getDataGaji($nik)
    {
        $query = $this->db->query("SELECT   tbl_data_pegawai.nama_pegawai,
                                            tbl_data_pegawai.nik,
                                            tbl_data_jabatan.gaji_pokok,
                                            tbl_data_jabatan.tunjangan_transport,
                                            tbl_data_jabatan.uang_makan,
                                            tbl_data_kehadiran.alpha,
                                            tbl_data_kehadiran.bulan,
                                            tbl_data_kehadiran.id_kehadiran
                                            FROM tbl_data_pegawai
                                            INNER JOIN tbl_data_kehadiran ON tbl_data_kehadiran.nik = tbl_data_pegawai.nik
                                            INNER JOIN tbl_data_jabatan ON tbl_data_jabatan.nama_jabatan = tbl_data_pegawai.nama_jabatan
                                            WHERE tbl_data_kehadiran.nik = '$nik'
                                            ORDER BY tbl_data_kehadiran.bulan DESC");

        return $query->result();
    }

    public function getDataSlipGaji($idPegawai)
    {
        $query = $this->db->query(" SELECT  tbl_data_pegawai.nik,
                                            tbl_data_pegawai.nama_pegawai,
                                            tbl_data_jabatan.nama_jabatan,
                                            tbl_data_jabatan.gaji_pokok,
                                            tbl_data_jabatan.tunjangan_transport,
                                            tbl_data_jabatan.uang_makan,
                                            tbl_data_kehadiran.alpha,
                                            tbl_data_kehadiran.bulan
                                    FROM tbl_data_pegawai
                                    INNER JOIN tbl_data_kehadiran ON tbl_data_kehadiran.nik = tbl_data_pegawai.nik
                                    INNER JOIN tbl_data_jabatan ON tbl_data_jabatan.nama_jabatan = tbl_data_pegawai.nama_jabatan
                                    WHERE tbl_data_kehadiran.id_kehadiran = '$idPegawai'");

        return $query->result();
    }
}
