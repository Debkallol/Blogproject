<?php


class Auth extends CI_Controller
{   

    public function logout(){
        unset($_SESSION);
        redirect("auth/login", "refresh");
    }


    public function login(){
       // echo 'login page';
       $this->form_validation->set_rules('username', 'Username', 'required');
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        if($this->form_validation->run()== true){
            //check user in database
            //load model
            $this->load->model('main_model');
            $this->main_model->check_login();
          
           
        
        }
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }


    public function register(){

        if(isset($_POST['register'])){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[11]');
            //if form validation is true
            if($this->form_validation->run() == TRUE) {
                echo 'form validated';
                //load model
                $this->load->model('main_model');
                $this->main_model->insert_data();
            }
        }
        //load view
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    

    
}




?>