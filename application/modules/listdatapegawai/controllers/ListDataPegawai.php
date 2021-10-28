<?php

class ListDataPegawai extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MListdatapegawai");
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataPegawai()
    {
        $data['title'] = "List Data Pegawai";
        $data['mainContent'] = "listdatapegawai/v_listdatapegawai";

        $data['getAllDataPegawai'] = $this->MListdatapegawai->getAllDataPegawai();

        $this->templates->templatesAdmin($data);
    }

    public function addListDataPegawai()
    {
        $data['title'] = "Tambah Data Pegawai";
        $data['mainContent'] = "listdatapegawai/v_addlistdatapegawai";

        $this->templates->templatesAdmin($data);
    }

    public function updateAddListDataPegawai()
    {
        $data['title'] = "Tambah Data Pegawai";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $this->form_validation->set_rules("txtnik", "NIK", "required|min_length[16]|max_length[16]");
        $this->form_validation->set_rules("txtnamapegawai", "Nama Pegawai", "required");
        $this->form_validation->set_rules("txtusername", "Username", "required");
        $this->form_validation->set_rules("ppassword", "Passowrd", "required");
        $this->form_validation->set_rules("ddjeniskelamin", "Jenis Kelamin", "required");
        $this->form_validation->set_rules("txtnamajabatan", "Nama Jabatan", "required");
        $this->form_validation->set_rules("dtanggalmasuk", "Tanggal Masuk", "required");
        $this->form_validation->set_rules("ddstatus", "Status", "required");
        $this->form_validation->set_rules("ddhakakses", "Hak Akses", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListDataPegawai();
        } else {
            $nik = $this->input->post("txtnik");
            $namaPegawai = $this->input->post("txtnamapegawai");
            $username = $this->input->post("txtusername");
            $password = md5($this->input->post('ppassword'));
            $jenisKelamin = $this->input->post("ddjeniskelamin");
            $namaJabatan = $this->input->post("txtnamajabatan");
            $tanggalMasuk = $this->input->post("dtanggalmasuk");
            $status = $this->input->post("ddstatus");
            $foto = $_FILES['ffoto']['name'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library("upload", $config);
                if (!$this->upload->do_upload('ffoto')) {
                    echo "Foto gagal diupload !";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $hakAkses = $this->input->post("ddhakakses");


            $dataPegawai = array(
                'nik' => $nik,
                'nama_pegawai' => $namaPegawai,
                'username' => $username,
                'password' => $password,
                'jenis_kelamin' => $jenisKelamin,
                'nama_jabatan' => $namaJabatan,
                'tanggal_masuk' => $tanggalMasuk,
                'status' => $status,
                'foto' => $foto,
                'hak_akses' => $hakAkses
            );

            if ($this->MListdatapegawai->insertDataPegawai($dataPegawai)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!");
            }
            redirect("admin/listdatapegawai");
        }
    }

    public function editListDataPegawai($idPegawai)
    {
        $data['title'] = "Edit Data Pegawai";
        $data['mainContent'] = "listdatapegawai/v_editlistdatapegawai";

        $data['getDatapegawai'] = $this->MListdatapegawai->getDataPegawai($idPegawai);

        $this->templates->templatesAdmin($data);
    }

    public function updateEditListDataPegawai()
    {
        $data['title'] = "Edit Data Pegawai";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $idPegawai = $this->input->post("txtidpegawai");

        $this->form_validation->set_rules("txtnik", "NIK", "required|min_length[16]|max_length[16]");
        $this->form_validation->set_rules("txtnamapegawai", "Nama Pegawai", "required");
        $this->form_validation->set_rules("txtusername", "Username", "required");
        $this->form_validation->set_rules("ppassword", "Passowrd", "required");
        $this->form_validation->set_rules("ddjeniskelamin", "Jenis Kelamin", "required");
        $this->form_validation->set_rules("txtnamajabatan", "Nama Jabatan", "required");
        $this->form_validation->set_rules("dtanggalmasuk", "Tanggal Masuk", "required");
        $this->form_validation->set_rules("ddstatus", "Status", "required");
        $this->form_validation->set_rules("ddhakakses", "Hak Akses", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListDataPegawai();
        } else {
            $nik = $this->input->post("txtnik");
            $namaPegawai = $this->input->post("txtnamapegawai");
            $username = $this->input->post("txtusername");
            $password = md5($this->input->post('ppassword'));
            $jenisKelamin = $this->input->post("ddjeniskelamin");
            $namaJabatan = $this->input->post("txtnamajabatan");
            $tanggalMasuk = $this->input->post("dtanggalmasuk");
            $status = $this->input->post("ddstatus");
            $foto = $_FILES['ffoto']['name'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library("upload", $config);
                if (!$this->upload->do_upload('ffoto')) {
                    echo "Foto gagal diupload !";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $hakAkses = $this->input->post("ddhakakses");

            $dataPegawai = array(
                'nik' => $nik,
                'nama_pegawai' => $namaPegawai,
                'username' => $username,
                'password' => $password,
                'jenis_kelamin' => $jenisKelamin,
                'nama_jabatan' => $namaJabatan,
                'tanggal_masuk' => $tanggalMasuk,
                'status' => $status,
                'foto' => $foto,
                'hak_akses' => $hakAkses
            );

            if ($this->MListdatapegawai->updateDataPegawai($idPegawai, $dataPegawai)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!");
            }
            redirect("admin/listdatapegawai");
        }
    }

    public function deleteListDataPegawai($idPegawai)
    {
        if (!empty($idPegawai)) {
            if ($this->MListdatapegawai->deleteDataPegawai($idPegawai)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!");
            } else {
                $this->session->set_flashdata("error", "Data gagal dihapus!");
            }
        }
        redirect("admin/listdatapegawai");
    }
}
