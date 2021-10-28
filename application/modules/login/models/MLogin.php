<?php

class MLogin extends CI_Model
{

    public function checkLogin()
    {
        $username = set_value('txtusername');
        $password = set_value('ppassword');

        $result =  $this->db->where('username', $username)
            ->where("password", md5($password))
            ->limit(1)
            ->get('tbl_data_pegawai');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}
