<?php

class MLaporanabsensi extends CI_Model
{

    public function getAllDataAbsensi($bulantahun)
    {
        $query = $this->db->query(" SELECT * 
                                    FROM tbl_data_kehadiran
                                    WHERE bulan = '$bulantahun'
                                    ORDER BY nama_pegawai ASC");
        return $query->result();
    }
}
