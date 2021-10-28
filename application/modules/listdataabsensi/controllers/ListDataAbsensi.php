<?php

class listDataAbsensi extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MListdataabsensi");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataAbsensi()
    {
        $data['title'] = "List Data Absensi";
        $data['mainContent'] = "listDataAbsensi/v_listdataabsensi";

        if ((isset($_GET['ddbulan']) && $_GET['ddbulan'] != '') && (isset($_GET['ddtahun']) && $_GET['ddtahun'] != '')) {
            $bulan = $_GET['ddbulan'];
            $tahun = $_GET['ddtahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }

        $data["getAllDataAbsensi"] = $this->MListdataabsensi->getAllDataAbsensi($bulantahun);

        $this->templates->templatesAdmin($data);
    }

    public function addListDataAbsensi()
    {
        $data['title'] = "Input Data Kehadiran";
        $data['mainContent'] = "listdataabsensi/v_addlistdataabsensi";

        if ($this->input->post("submit", TRUE) == "submit") {

            $post = $this->input->post();
            foreach ($post['txtbulan'] as $key => $value) {
                if ($post['txtbulan'][$key] != "" || $post['nik'][$key] != "") {
                    $simpan[] = array(
                        'bulan' => $post['txtbulan'][$key],
                        'nik' => $post['nik'][$key],
                        'nama_pegawai' => $post['nama_pegawai'][$key],
                        'jenis_kelamin' => $post['jenis_kelamin'][$key],
                        'nama_jabatan' => $post['nama_jabatan'][$key],
                        'hadir' => $post['txthadir'][$key],
                        'sakit' => $post['txtsakit'][$key],
                        'alpha' => $post['txtalpha'][$key],
                    );
                }
            }

            if ($this->MListdataabsensi->insert_batch("tbl_data_kehadiran", $simpan)) {
                $this->session->set_flashdata("error", "Data gagal tambahkan!");
            } else {
                $this->session->set_flashdata("success", "Data berhasil tambahkan!");
            }
            redirect("admin/listdataabsensi");
        }

        if ((isset($_GET['ddbulan']) && $_GET['ddbulan'] != '') && (isset($_GET['ddtahun']) && $_GET['ddtahun'] != '')) {
            $bulan = $_GET['ddbulan'];
            $tahun = $_GET['ddtahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }

        $data['getDataAbsensi'] = $this->MListdataabsensi->getDataAbsensi($bulantahun);

        $this->templates->templatesAdmin($data);
    }
}
