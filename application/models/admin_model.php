<?php

class admin_model extends CI_Model {
    public $status; 
    public $roles;    
    function __construct(){
        // Call the Model constructor
        parent::__construct();        
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
    }

    public function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id !=', $this->session->id);
        $query = $this->db->get();
        $users = $query->result_array();
        return $users;
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}