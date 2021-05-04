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
            $username=$_POST['username'];
            $password=md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('username'=>$username, 'password'=>$password));
            $query = $this->db->get();

            $user = $query->row();

            if($user->email){
            $this->session->set_flashdata("success", "you are logged in");

            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;

            return redirect("user/profile", "refresh");

            } else {
            $this->session->set_flashdata("error", "no such account exicts in database");
            redirect("auth/login","refresh");
            }
        }

        $this->load->view('login');

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

                $data = array(
                    'username'=>$_POST['username'],
                    'email'=>$_POST['email'],
                    'password'=>md5($_POST['password']),
                    'gender'=>$_POST['gender'],
                    'created_date'=>date('Y-m-d'),
                    'phone'=>$_POST['phone']
                );
                $this->db->insert('users',$data);

                $this->session->set_flashdata("success1","Your account has been registered. You can login now");
                return redirect("auth/register", "refresh");
            }


        }

        //load view
        $this->load->view('register');
    }

    
}




?>