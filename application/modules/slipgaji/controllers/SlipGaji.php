<?php

class SlipGaji extends HMVC_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MSlipgaji");
        $this->load->model("../../settingpotongangaji/models/MSettingpotongangaji");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function slipGaji()
    {
        $data['title'] = "Filter Slip Gaji Pegawai";
        $data['mainContent'] = "slipgaji/v_slipgaji";;

        $data['getAllDataPegawai'] = $this->MSlipgaji->getAllDataPegawai();

        $this->templates->templatesAdmin($data);
    }

    public function printSLiptGaji()
    {
        $data['title'] = "Cetak Slip Gaji";

        $data['datasettingpotongangaji'] = $this->MSettingpotongangaji->getAllSettingPotonganGaji();

        $nama = $this->input->post('ddnamapegawai');
        $bulan = $this->input->post('ddbulan');
        $tahun = $this->input->post('ddtahun');
        $bulantahun = $bulan . $tahun;

        $data['dataslipgaji'] = $this->MSlipgaji->getDataSlipGaji($bulantahun, $nama);
        // var_dump($data['dataSlipGaji']);
        // die;

        $this->load->view('v_printslipgaji', $data);
    }
}
