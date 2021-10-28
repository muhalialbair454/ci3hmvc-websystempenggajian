<?php

class SettingPotonganGaji extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MSettingpotongangaji");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listSettingPotonganGaji()
    {
        $data['title'] = "List Setting Potongan Gaji";
        $data['mainContent'] = "settingpotongangaji/v_listsettingpotongangaji";

        $data['getAllSettingPotonganGaji'] = $this->MSettingpotongangaji->getAllSettingPotonganGaji();

        $this->templates->templatesAdmin($data);
    }

    public function addListSettingPotonganGaji()
    {
        $data['title'] = "Tambah Setting Potongan Gaji";
        $data['mainContent'] = "settingpotongangaji/v_addlistsettingpotongangaji";

        $this->templates->templatesAdmin($data);
    }

    public function updateAddListSettingPotonganGaji()
    {
        $data['title'] = "Tambah Setting Potongan Gaji";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $this->form_validation->set_rules("txtjenispotongan", "Jenis Potongan", "required");
        $this->form_validation->set_rules("txtjumlahpotongan", "Jumlah Potongan", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListSettingPotonganGaji();
        } else {
            $jenisPotongan = $this->input->post("txtjenispotongan");
            $jumlahPotongan = $this->input->post("txtjumlahpotongan");

            $dataSettingPotonganGaji = array(
                'jenis_potongan' => $jenisPotongan,
                'jumlah_potongan' => $jumlahPotongan,
            );

            if ($this->MSettingpotongangaji->insertSettingPotonganGaji($dataSettingPotonganGaji)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!");
            }
            redirect('admin/settingpotongangaji');
        }
    }

    public function editListSettingPotonganGaji($idPotonganGaji)
    {
        $data['title'] = "Tambah Setting Potongan Gaji";
        $data['mainContent'] = "settingpotongangaji/v_editlistsettingpotongangaji";

        $data['getSettingPotonganGaji'] = $this->MSettingpotongangaji->getSettingPotonganGaji($idPotonganGaji);

        $this->templates->templatesAdmin($data);
    }

    public function updateEditListSettingPotonganGaji()
    {
        $data['title'] = "Tambah Setting Potongan Gaji";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $idPotonganGaji = $this->input->post("txtidpotongangaji");

        $this->form_validation->set_rules("txtjenispotongan", "Jenis Potongan", "required");
        $this->form_validation->set_rules("txtjumlahpotongan", "Jumlah Potongan", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->editListSettingPotonganGaji($idPotonganGaji);
        } else {
            $jenisPotongan = $this->input->post("txtjenispotongan");
            $jumlahPotongan = $this->input->post("txtjumlahpotongan");

            $dataSettingPotonganGaji = array(
                'jenis_potongan' => $jenisPotongan,
                'jumlah_potongan' => $jumlahPotongan,
            );

            if ($this->MSettingpotongangaji->updateSettingPotonganGaji($idPotonganGaji, $dataSettingPotonganGaji)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!");
            }
            redirect('admin/settingpotongangaji');
        }
    }

    public function deleteListSettingPotonganGaji($idPotonganGaji)
    {
        if (!empty($idPotonganGaji)) {
            if ($this->MSettingpotongangaji->deleteSettingPotonganGaji($idPotonganGaji)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!");
            } else {
                $this->session->set_flashdata("error", "Data gagal dihapus!");
            }
        }
        redirect("admin/settingpotongangaji");
    }
}
