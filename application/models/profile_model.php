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
    public function do_upload()
        {
                $config['upload_path']          = 'C:\wamp64\www\CatDog\uploads';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 2024;
                $config['max_height']           = 2268;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('profileImage'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('flash_message', 'fout');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->session->set_flashdata('flash_good_message', 'goed');
                }
        }
    function updateUser(){
                $profileData = array(
                   'email' => $this->input->post('Email'),
                   'first_name' => $this->input->post('Firstname'), 
                   'last_name' => $this->input->post('Lastname'),
                   'profile_image' => $_FILES['profileImage']['name'],
            );
        
        $this->db->where('id', $_SESSION['id']);
        $this->db->update('users', $profileData); 
        $success = $this->db->affected_rows();
        
        $this->do_upload();
        
        if(!$success){
            $this->session->set_flashdata('flash_message', 'U heeft niks gewijzigd');
            redirect(site_url().'/profile/index');
        }else{
            $this->session->set_flashdata('flash_good_message', 'U heeft uw profiel bewerkt');
            $this->session->set_userdata($profileData);
            redirect(site_url().'/main/index');
        }
    }
}