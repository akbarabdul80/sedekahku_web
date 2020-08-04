<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');

        // if ($this->user_model->isNotLogin() == null){
		// 	$post_array = $this->session->userdata('user_logged');

		// 	if ($post_array->level == 'admin') {
		// 		redirect(site_url('admin'));
		// 	} elseif ($post_array->level == 'user') {
		// 		redirect(site_url('user'));
		// 	}
		// }

    }

    public function index()
    {
        if ($this->input->post()) {

            if ($this->user_model->doLogin()) {
                if ($this->session->userdata('user_logged')->level == 'admin') {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('eror', 'Tolong cek Email dan Password anda!');
            }
        }

        $this->load->view('login.php');
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url(''));
    }
}
