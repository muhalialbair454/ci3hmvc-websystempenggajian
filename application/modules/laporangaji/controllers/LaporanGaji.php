<?php

class LaporanGaji extends HMVC_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("../../settingpotongangaji/models/MSettingpotongangaji");
        $this->load->model("../../listdatagaji/models/MListdatagaji");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function laporanGaji()
    {
        $data['title'] = "Cetak Laporan Gaji Pegawai";
        $data['mainContent'] = "laporangaji/v_laporangaji";

        $this->templates->templatesAdmin($data);
    }

    public function printLaporanGaji()
    {
        $data['title'] = "Cetak Laporan Gaji Pegawai";

        if ((isset($_GET['ddbulan']) && $_GET['ddbulan'] != '') && (isset($_GET['ddtahun']) && $_GET['ddtahun'] != '')) {
            $bulan = $_GET['ddbulan'];
            $tahun = $_GET['ddtahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }

        $data["getAllDataGaji"] = $this->MListdatagaji->getAllDataGaji($bulantahun);

        $data['getAllSettingPotonganGaji'] = $this->MSettingpotongangaji->getAllSettingPotonganGaji();

        $this->load->view("../../listdatagaji/views/v_printlistdatagaji", $data);
    }
}
