<?php

class MGantipassword extends CI_Model
{
    public function updateGantiPassword($idPegawai, $dataGantiPassword)
    {
        $this->db->where("id_pegawai", $idPegawai);
        return $this->db->update('tbl_data_pegawai', $dataGantiPassword);
    }
}
