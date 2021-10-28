<?php

class MSettingpotongangaji extends CI_Model
{
    public function getAllSettingPotonganGaji()
    {
        $this->db->select("*");
        $this->db->from("tbl_potongan_gaji");
        $query = $this->db->get();

        return $query->result();
    }

    public function insertSettingPotonganGaji($dataSettingPotonganGaji = array())
    {
        if ($this->db->insert("tbl_potongan_gaji", $dataSettingPotonganGaji)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getSettingPotonganGaji($idPotonganGaji)
    {
        $this->db->select("*");
        $this->db->from("tbl_potongan_gaji");
        $this->db->where('id_potongangaji', $idPotonganGaji);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateSettingPotonganGaji($idPotonganGaji, $dataSettingPotonganGaji)
    {
        $this->db->where("id_potongangaji", $idPotonganGaji);
        return $this->db->update("tbl_potongan_gaji", $dataSettingPotonganGaji);
    }

    public function deleteSettingPotonganGaji($idPotonganGaji)
    {
        $this->db->where("id_potongangaji", $idPotonganGaji);
        return $this->db->delete("tbl_potongan_gaji");
    }
}
