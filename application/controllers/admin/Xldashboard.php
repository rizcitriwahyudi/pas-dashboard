<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xldashboard extends CI_Controller {

    // Index to Login First
	public function index()
	{   
        $data['page_title'] = 'XL Dashboard';
		$this->load->view('backend/dashboard/login_view', $data);
	}
}
