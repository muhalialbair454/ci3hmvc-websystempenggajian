<?php

class DashboardPegawai extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MDashboardPegawai');
        if ($this->session->userdata('hak_akses') != '2') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function dashboardPegawai()
    {
        $data['title'] = "Dashboard";
        $data['mainContent'] = "dashboard/v_dashboardpegawai";

        $idPegawai = $this->session->userdata('id_pegawai');

        $data['getDataPegawai'] = $this->MDashboardPegawai->getDataPegawai($idPegawai);
        // var_dump($data['getDataPegawai']);
        // die;

        $this->templates->templatesPegawai($data);
    }
}
