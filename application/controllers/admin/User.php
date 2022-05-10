<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {

        $user = $this->user_model->listing();
        $data = array(  'title'         => 'User Data',
                        'user'          =>  $user, 
                        'content'       => 'backend/user/list');
        $this->load->view('backend/template/wrapper', $data, FALSE);
    }

    public function adduser(){
        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('first_name','First Name','required',
            array(  'required'      =>      'First Name Must be Filled'));
        
        $valid->set_rules('last_name','Last Name','required',
            array(  'required'      =>      'Last Name Must be Filled'));

        $valid->set_rules('username','Userame','required|is_unique[user.username]',
            array(  'required'      =>      'Username Must be Filled',
                    'is_unique'     =>      'Username <strong>'.$this->input->post('username').
                                                '</strong> already exists, fill it with another username'));

        $valid->set_rules('email','Email','required|valid_email',
            array(  'required'      =>      'Email Must be Filled',
                    'valid_email'   =>      'Email format is not correct'));

        $valid->set_rules('password','Password','required|min_length[8]',
            array(  'required'      =>      'Email Must be Filled',
                    'min_length'    =>      'Password must be 8 character'));
        
        if ($valid->run()=== FALSE){
            $data = array(  'title'         => 'Add User', 
                            'content'       => 'backend/user/adduser');
            $this->load->view('backend/template/wrapper', $data, FALSE);
        }

        else {
            $i = $this->input;
            $data = array(  'first_name'         =>  $i->post('first_name'),
                            'last_name'          =>  $i->post('last_name'),
                            'username'           =>  $i->post('username'),
                            'email'              =>  $i->post('email'),
                            'level_access'       =>  $i->post('level_access'),
                            'password'           =>  sha1($i->post('password')),
                            );
            $this->user_model->adduser($data);
            $this->session->set_flashdata('success', ' Data added successfully');
            redirect(base_url('admin/user'),'refresh');
        }

        
    }
}