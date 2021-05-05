<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['user_logged']))
        {
            $this->session->set_flashdata("error", "Please login first to view this page");
            redirect("auth/login", "refresh");
        } 
    }
    
    
    public function Profile()
    {   
        $this->load->view('header');
        $this->load->view('profile');
        $this->load->view('footer');
    }

    public function blog(){

        if(isset($_POST['blog'])){
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            
            //if form validation is true
            if($this->form_validation->run() == TRUE) {
                echo 'blog added';

                $this->load->model('main_model');
                $this->main_model->insert_blog_data();

            }


        }

        //load view
        $this->load->view('header');
        $this->load->view('welcome_message');
        $this->load->view('footer');
    }
}

?>