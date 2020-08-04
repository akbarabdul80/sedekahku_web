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

		if ($post_array->level != 'admin') {
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data['masjid'] = $this->masjid->getAllMasjid();
		$this->load->view("admin/masjid/tampil", $data);
	}


	public function add()
	{

		$this->form_validation->set_rules($this->masjid->rules());
		if ($this->form_validation->run()) {
			$this->masjid->add();
			$this->session->set_flashdata('success', 'Masjid berhasil ditambahkan');
			redirect(base_url('admin/masjid'));
		} else {
			$this->session->set_flashdata('error', 'Gagal menambahkan Masjid');
			redirect(base_url('admin/masjid'));
		}
	}

	public function update()
	{

		$this->form_validation->set_rules($this->masjid->rules());
		if ($this->form_validation->run()) {
			$this->masjid->update();
			$this->session->set_flashdata('success', 'Masjid berhasil diedit');
			redirect(base_url('admin/masjid'));
		} else {
			$this->session->set_flashdata('error', 'Gagal mengedit Masjid');
			redirect(base_url('admin/masjid'));
		}
	}

	public function delete($id)
	{
		$delete = $this->masjid->delete($id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Masjid berhasil dihapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus Masjid');
		}
		// redirect(base_url('admin/masjid'));
	}
}
