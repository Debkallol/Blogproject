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
        $this->load->view('profile');
    }

    public function blog(){

        if(isset($_POST['blog'])){
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            
            //if form validation is true
            if($this->form_validation->run() == TRUE) {
                echo 'blog added';

                $blogdata = array(
                    'title'=>$_POST['title'],
                    'content'=>$_POST['content']
                    
                );
                $this->db->insert('content_table',$blogdata);

                $this->session->set_flashdata("success","Your blog posted now");
                return redirect("", "refresh");
            }


        }

        //load view
        $this->load->view('welcome_message');
    }
}

?>