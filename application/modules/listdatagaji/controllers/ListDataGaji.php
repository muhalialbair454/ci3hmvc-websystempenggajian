<?php

class ListDataGaji extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model("MListdatagaji");
        $this->load->model("../../settingpotongangaji/models/MSettingpotongangaji");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataGaji()
    {
        $data['title'] = "List Data Gaji";
        $data['mainContent'] = "listdatagaji/v_listdatagaji";

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


        $this->templates->templatesAdmin($data);
    }

    public function printListDataGaji()
    {
        $data['title'] = "Cetak List Data Gaji Pegawai";

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


        $this->load->view("v_printlistdatagaji", $data);
    }
}
