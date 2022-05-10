<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    // Add User
    public function adduser($data){
        $this->db->insert('user',$data);
    }

    // Listing User
    public function listing(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('user_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
        
    }
}