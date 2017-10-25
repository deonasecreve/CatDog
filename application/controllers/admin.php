<?php
class admin extends CI_Controller {
        
        public $status; 
        public $roles;
    
        function __construct(){
            parent::__construct();
            if ($this->session->role != 'admin' || !$this->session->role)
            {
                header('Location: '. site_url() .'/main/');
                $this->session->set_flashdata('flash_message', 'U heeft geen toegang tot deze pagina.');
                exit();
            }
            $this->load->model('admin_model', 'admin_model', TRUE);
            $this->load->model('user_model', 'user_model', TRUE);
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->status = $this->config->item('status'); 
            $this->roles = $this->config->item('roles');
        }

        public function index()
        {
            $title = array('title' => 'Home Admin');
            $this->load->view('templates/admin_header',$title);
            $this->load->view('admin_pages/index');
            $this->load->view('templates/admin_footer');
        }

        public function users()
        {
            $title = array('title' => 'Users');
            $this->load->view('templates/admin_header',$title);

            $users = $this->admin_model->getAllUsers();
            $data = array('users' => $users);
            $this->load->view('admin_pages/users', $data);

            $this->load->view('templates/admin_footer');
        }

        public function delete($id)
        {
            $this->admin_model->deleteUser($id);
            header('Location: '. site_url() .'/admin/users');
        }

        public function edit($id)
        {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');    
            $this->form_validation->set_rules('first_name', 'First_name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last_name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]'); 

            if ($this->form_validation->run() == FALSE)
            {
                $user = $this->user_model->getUserInfo($id);
                $array = json_decode(json_encode($user), True);
                $data = array('user' => $array);

                $title = array('title' => 'Edit Users');
                $this->load->view('templates/admin_header', $title);
                $this->load->view('admin_pages/edit', $data);
                $this->load->view('templates/admin_footer');
            }
            else
            {
                $this->load->library('password');
                $post = $this->input->post();  
                $cleanPost = $this->security->xss_clean($post);
                $hashed = $this->password->create_hash($cleanPost['password']);
                $cleanPost['password'] = $hashed;
                unset($cleanPost['passconf']);
                $userInfo = $this->user_model->updateUser($cleanPost);

                if(!$userInfo){
                    $this->session->set_flashdata('flash_message', 'The update was unsucessful');
                    redirect(site_url().'/admin/edit/'. $id);
                }
                else
                {
                    $this->session->set_flashdata('flash_good_message', 'Your profile is updated');
                    redirect(site_url().'/admin/users');
                }          
            }
        }
}