<?php

class LaporanAbsensi extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MLaporanabsensi");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function laporanAbsensi()
    {
        $data['title'] = "Cetak Laporan Absensi Pegawai";
        $data['mainContent'] = "laporanabsensi/v_laporanabsensi";

        $this->templates->templatesAdmin($data);
    }

    public function printLaporanAbsensi()
    {
        $data['title'] = "Cetak Laporan Absensi Pegawai";

        if ((isset($_GET['ddbulan']) && $_GET['ddbulan'] != '') && (isset($_GET['ddtahun']) && $_GET['ddtahun'] != '')) {
            $bulan = $_GET['ddbulan'];
            $tahun = $_GET['ddtahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }

        $data['getAllDataAbsensi'] = $this->MLaporanabsensi->getAllDataAbsensi($bulantahun);

        $this->load->view("v_printlaporanabsensi", $data);
    }
}
