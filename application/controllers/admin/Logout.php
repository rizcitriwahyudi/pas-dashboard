<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('log_sess_userid'))) 
		{
			redirect('admin/login');
		}
	}

    public function index()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('alert_logout', 'Anda telah Logout dari SIABSEVA Web Apps, Silahkan Login Kembali untuk melanjutkan :)');
		redirect('admin/Login');
	}
}
