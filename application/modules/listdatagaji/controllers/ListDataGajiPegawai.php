<?php

class ListDataGajiPegawai extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MListdatagajipegawai");
        $this->load->model("../../settingpotongangaji/models/MSettingpotongangaji");
        if ($this->session->userdata('hak_akses') != '2') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataGajiPegawai()
    {
        $data['title'] = "List Data Gaji";
        $data['mainContent'] = "listdatagaji/v_listdatagajipegawai";

        $nik = $this->session->userdata('nik'); // kalau pakai id, tambah id pegawai di tbl_data_jabatan/kehadiran
        // var_dump($nik);
        // die;

        $data['getAllSettingPotonganGaji'] = $this->MSettingpotongangaji->getAllSettingPotonganGaji();
        // var_dump($data['getAllSettingPotonganGaji']);
        // die;

        $data['getDataGaji'] = $this->MListdatagajipegawai->getDataGaji($nik);
        // var_dump($data['getDataPegawai']);
        // die;

        $this->templates->templatesPegawai($data);
    }

    public function printListDataGajiPegawai($idPegawai)
    {
        $data['title'] = "Cetak Slip Gaji";

        $data['getAllSettingPotonganGaji'] = $this->MSettingpotongangaji->getAllSettingPotonganGaji();
        // var_dump($data['getAllSettingPotonganGaji']);
        // die;

        $data['getDataSlipGaji'] = $this->MListdatagajipegawai->getDataSlipGaji($idPegawai);
        // var_dump($data['dataSlipGaji']);
        // die;

        $this->load->view("v_printlistdatagajipegawai", $data);
    }
}
