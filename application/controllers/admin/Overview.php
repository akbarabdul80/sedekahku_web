<?php

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		if ($this->user_model->isNotLogin()) redirect(site_url('login'));

		$post_array = $this->session->userdata('user_logged');

		if($post_array->level != 'admin'){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$this->load->view("admin/overview");
	}


}
