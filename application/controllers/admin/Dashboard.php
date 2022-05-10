<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('log_sess_userid'))) 
		{
			redirect('admin/Login');
		}
	}
    
	public function index()
	{	
		$data	=	array(	'title'			=>	'Main Dashboard',
							'content'		=>	'backend/dashboard/login_view');
		$this->load->view('backend/dashboard/index', FALSE);
	}
}
