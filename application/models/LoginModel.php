<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function cek_login()
	{
		$username 	  	= strtolower($this->input->post('username'));
		$password 		= sha1($this->input->post('password'));
		$param			= array('username' => $username, 'password' => $password);
		// print_r($password);die;

		$this->db->select('user.*');
		$this->db->from('user');
		$this->db->where($param);
		$cek = $this->db->get();

		if($cek->num_rows()==1)
		{
			$row = $cek->row();
			$log = array(
				'log_sess_userid' 		=> $row->user_id,
				'log_sess_username' 	=> $row->username,
				'log_sess_firstname' 	=> $row->first_name,
				'log_sess_lastname' 	=> $row->last_name,
				'log_sess_level' 		=> $row->level_access,
				// 'log_sess_last_login' 				=> $row->last_login,
				// 'log_sess_created_by' 				=> $row->created_by,
				// 'log_sess_created_date' 			=> $row->created_date,
				// 'log_sess_modified_by' 				=> $row->modified_by,
				// 'log_sess_modified_date'			=> $row->modified_date,
				// 'log_sess_nama_role'				=> $row->nama_role,
				// 'log_sess_nama_level'				=> $row->nama_level
			);

			// print_r($log);die;
			$this->session->set_userdata($log);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}


/* End of file LoginModel.php */
/* Location: ./application/models/admin/LoginModel.php */
/* Copyright © 2022 Sultan Tekno - Herdy Jr */