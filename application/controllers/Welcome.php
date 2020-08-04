<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();


		if ($this->user_model->isNotLogin() == null){
			$post_array = $this->session->userdata('user_logged');

			if ($post_array->level == 'admin') {
				redirect(site_url('admin'));
			} elseif ($post_array->level == 'user') {
				redirect(site_url('user'));
			}
		}

	}

	public function index()
	{
		$this->load->view('welcome');
	}
}
