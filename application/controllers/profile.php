<?php
        class profile extends CI_Controller {
            function __construct(){
                parent::__construct();
                
                $this->load->model('profile_model', 'profile_model', TRUE);
            }
                public function index(){
                    if($this->session->userdata('id')==''){
                        $title = array('title' => 'Login');
                        $this->load->view('templates/header',$title);
                        $this->load->view('pages/login');
                        $this->load->view('templates/footer');
                    }else{
                        $title = array('title' => 'Mijn profiel');
                        $this->load->view('templates/header',$title);
                        $this->load->view('pages/profile');
                        $this->load->view('templates/footer');
                    }
                }
            
/*              public function getProfile(){   
                  $user = $this->session->get_userdata();
                  $profile = $this->profile_model->selectProfile($user['id']);
                  var_dump($profile);
              }*/
            
                public function update(){
                    $updateUserInfo = $this->profile_model->updateUser();
                }
            }