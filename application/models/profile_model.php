<?php
class profile_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        
    }
    //Get Profile for later usage (ADMIN)
/*    function selectProfile($id){
            $query = $this->db->get_where('users', array('id' => $id),1);
            return $query->result();
            }   */
    function updateUser(){
                $profileData = array(
                   'email' => $this->input->post('Email'),
                   'first_name' => $this->input->post('Firstname'), 
                   'last_name' => $this->input->post('Lastname'),
            );
        $this->db->where('id', $_SESSION['id']);
        $this->db->update('users', $profileData); 
        $success = $this->db->affected_rows();

        if(!$success){
            redirect(site_url().'/profile/index');
            echo 'fout';
        }else{
            $this->session->set_userdata($profileData);
            redirect(site_url().'/main/index');
        }
    }
}