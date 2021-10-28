<?php

class Dashboard extends HMVC_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("dashboard/MDashboard");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function dashboard()
    {
        $data['title'] = "Dashboard";
        $data['mainContent'] = "dashboard/v_dashboard";

        $data['jumlahPegawai'] = $this->MDashboard->getAmountOfDataPegawai();

        $nama_jabatan = "Admin";
        $data['jumlahAdmin'] = $this->MDashboard->getAmountOfDataAdmin($nama_jabatan);

        $data['jumlahJabatan'] = $this->MDashboard->getAmountOfDataJabatan();

        $data['jumlahKehadiran'] = $this->MDashboard->getAmountOfDataKehadiran();


        $this->templates->templatesAdmin($data);
    }
}
