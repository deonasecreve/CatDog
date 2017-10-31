<?php
class API extends CI_Controller {
        
    public function login()
    {
        $this->load->model('User_model', 'user_model', TRUE);
        $post = array($_POST['email'], $_POST['password']);
        $userInfo = $this->user_model->checkLoginAPI($_POST['email'], $_POST['password']);
        if ($userInfo)
        {
        	echo json_encode(true);
        }
        else
        {
        	echo json_encode(false);
        }
    }
}