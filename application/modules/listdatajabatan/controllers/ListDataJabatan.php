<?php

class ListDatajabatan extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MListdatajabatan");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataJabatan()
    {
        $data['title'] = "List Data Jabatan";
        $data['mainContent'] = "listdatajabatan/v_listdatajabatan";

        $data['getAllDataJabatan'] = $this->MListdatajabatan->getAllDataJabatan();

        $this->templates->templatesAdmin($data);
    }

    public function addListDataJabatan()
    {
        $data['title'] = "Tambah Data Jabatan";
        $data['mainContent'] = "listdatajabatan/v_addlistdatajabatan";

        $this->templates->templatesAdmin($data);
    }

    public function updateAddListDataJabatan()
    {
        $data['title'] = "Tambah Data Pegawai";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $this->form_validation->set_rules("txtnamajabatan", "Nama Jabatan", "required");
        $this->form_validation->set_rules("txtgajipokok", "Gaji Pokok", "required");
        $this->form_validation->set_rules("txttunjangantransport", "Tunjangan Transport", "required");
        $this->form_validation->set_rules("txtuangmakan", "Uang Makan", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListDataJabatan();
        } else {
            $namaJabatan = $this->input->post("txtnamajabatan");
            $gajiPokok = $this->input->post("txtgajipokok");
            $tunjanganTransport = $this->input->post("txttunjangantransport");
            $uangMakan = $this->input->post("txtuangmakan");

            $dataJabata = array(
                'nama_jabatan' => $namaJabatan,
                'gaji_pokok' => $gajiPokok,
                'tunjangan_transport' => $tunjanganTransport,
                'uang_makan' => $uangMakan,
            );

            if ($this->MListdatajabatan->insertDataJabatan($dataJabata)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!");
            }
            redirect('admin/listdatajabatan');
        }
    }

    public function editListDataJabatan($idJabatan)
    {
        $data['title'] = "Edit Data Jabatan";
        $data['mainContent'] = "listdatajabatan/v_editlistdatajabatan";

        $data['getDataJabatan'] = $this->MListdatajabatan->getDataPegawai($idJabatan);

        $this->templates->templatesAdmin($data);
    }

    public function updateEditListDataJabatan()
    {
        $data['title'] = "Edit Data Jabatan";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $idJabatan = $this->input->post('txtidjabatan');

        $this->form_validation->set_rules("txtnamajabatan", "Nama Jabatan", "required");
        $this->form_validation->set_rules("txtgajipokok", "Gaji Pokok", "required");
        $this->form_validation->set_rules("txttunjangantransport", "Tunjangan Transport", "required");
        $this->form_validation->set_rules("txtuangmakan", "Uang TMakan", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->editListDataJabatan($idJabatan);
        } else {
            $namaJabatan = $this->input->post("txtnamajabatan");
            $gajiPokok = $this->input->post("txtgajipokok");
            $tunjanganTransport = $this->input->post("txttunjangantransport");
            $uangMakan = $this->input->post("txtuangmakan");

            $dataJabatan = array(
                'nama_jabatan' => $namaJabatan,
                'gaji_pokok' => $gajiPokok,
                'tunjangan_transport' => $tunjanganTransport,
                'uang_makan' => $uangMakan,
            );

            if ($this->MListdatajabatan->updateDataJabatan($idJabatan, $dataJabatan)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!");
            }
            redirect('admin/listdatajabatan');
        }
    }

    public function deleteListDataJabatan($idJabatan)
    {
        if (!empty($idJabatan)) {
            if ($this->MListdatajabatan->deleteDataJabatan($idJabatan)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!");
            } else {
                $this->session->set_flashdata("error", "Data gagal dihapus!");
            }
        }
        redirect('admin/listdatajabatan');
    }
}
