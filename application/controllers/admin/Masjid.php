<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masjid extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("masjid_model", 'masjid');

		if ($this->user_model->isNotLogin()) redirect(site_url('login'));

		$post_array = $this->session->userdata('user_logged');

		if($post_array->level != 'admin'){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data['masjid'] = $this->masjid->getAll();
		$this->load->view("admin/masjid/tampil", $data);
	}


}
