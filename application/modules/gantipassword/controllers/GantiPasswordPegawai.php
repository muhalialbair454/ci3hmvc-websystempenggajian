<?php

class GantiPasswordPegawai extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MGantipasswordpegawai');
        if ($this->session->userdata('hak_akses') != '2') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function gantiPasswordPegawai()
    {
        $data['title'] = "Ganti Password";
        $data['mainContent'] = "gantipassword/v_gantipasswordpegawai";

        $this->templates->templatesPegawai($data);
    }

    public function updateGantiPasswordPegawai()
    {
        $data['title'] = "Ganti Password";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $this->form_validation->set_rules("ppasswordbaru1", "Password Baru", "required");
        $this->form_validation->set_rules("ppasswordbaru2", "Ulangi Password Baru", "required|matches[ppasswordbaru1]");

        if ($this->form_validation->run() === FALSE) {
            $this->gantiPasswordPegawai();
        } else {
            $passwordBaru1 = md5($this->input->post("ppasswordbaru1"));
            $passwordBaru2 = md5($this->input->post("ppasswordbaru2"));
            $idPegawai = $this->session->userdata('id_pegawai');

            $dataGantiPassword = array(
                'password' => $passwordBaru1,
            );


            if ($this->MGantipasswordpegawai->updateGantiPassword($idPegawai, $dataGantiPassword)) {
                $this->session->set_flashdata("success", "Password berhasil diubah !");
            } else {
                $this->session->set_flashdata("error", "Password gagal diubah !");
            }
            redirect('login');
        }
    }
}
