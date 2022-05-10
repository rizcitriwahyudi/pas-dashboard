<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (!empty($this->session->userdata('log_sess_userid'))) 
		{
			redirect('admin/dashboard');
		}

		$this->load->model('LoginModel');
	}

	public function index()
	{	
        $data	=	array(	'title'			=>	'Main Login',
							'content'		=>	'backend/admin/login_view');
		$this->load->view('backend/login/index', FALSE);
	}

    public function login()
	{
		if(isset($_POST['login']))
		{
			$cheking = $this->LoginModel->cek_login();
			// print_r($cheking);die;
			if($cheking)
			{
				// echo '<pre>';
				// print_r($cheking);
				// die;
				// helper_log("Login");
				
				$this->session->set_flashdata('login_success', 'Login Success ! Selamat Datang Di Sistem Informasi Manajemen Graha Persada Indah Web Apps :)');
				redirect('admin/Dashboard');
			}
			else
			{
				$this->session->set_flashdata('login_failed', 'Login Failed, Check your Username and Password!!!');
				redirect('admin/Login');
			}
		}
		else
		{
			redirect('admin/Login');
		}
	}

    public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('alert_logout', 'Anda telah Logout dari SIABSEVA Web Apps, Silahkan Login Kembali untuk melanjutkan :)');
		redirect('admin/Login');
	}
}
