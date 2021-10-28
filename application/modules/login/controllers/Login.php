<?php

class Login extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model("MLogin");
    }

    public function index()
    {
        $data['title'] = "Form Login";
        $data['mainContent'] = "login/v_login";

        $this->templates->templatesLogin($data);
    }

    public function doLogin()
    {
        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $this->form_validation->set_rules("txtusername", "Username", "required");
        $this->form_validation->set_rules("ppassword", "Password", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $username = $this->input->post("txtusername");
            $password = $this->input->post("ppassword");

            $check = $this->MLogin->checkLogin($username, $password);

            if ($check === FALSE) {
                $this->session->set_flashdata("error", "Username atau password salah!");
                redirect('login');
            } else {
                $this->session->set_userdata('hak_akses', $check->hak_akses);
                $this->session->set_userdata('nama_pegawai', $check->nama_pegawai);
                $this->session->set_userdata('foto', $check->foto);
                $this->session->set_userdata('id_pegawai', $check->id_pegawai);
                $this->session->set_userdata('nik', $check->nik);

                switch ($check->hak_akses) {
                    case 1:
                        redirect("admin/dashboard");
                        break;
                    case 2:
                        redirect("pegawai/dashboard");
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
