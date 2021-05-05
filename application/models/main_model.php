<?php

class main_model extends CI_Model
{
 public function __construct()
 {
     parent:: __construct();
 }

 public function fetch_data(){

    $this->db->select('*');
    $Article = $this->db->get('content_table');
    return $Article;


 }

 public function insert_data(){

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



 public function insert_blog_data(){
    $blogdata = array(
        'title'=>$_POST['title'],
        'content'=>$_POST['content']
        
    );
    $this->db->insert('content_table',$blogdata);

    $this->session->set_flashdata("success","Your blog posted now");
    return redirect("", "refresh");
 }



 public function check_login(){

    

    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where(array('username'=>$username, 'password'=>$password));
    $query = $this->db->get();
    $user = $query->row();

    if($user->email){
    $this->session->set_flashdata("success", "you are logged in");

   // $_SESSION['user_logged'] = TRUE;
   // $_SESSION['username'] = $user->username;

    $session_data = array(
        'username'=>$username
    );
    $this->session->set_userdata($session_data);
    return redirect("user/profile", "refresh");
    } 
    else 
    {
    $this->session->set_flashdata("error", "no such account exicts in database");
    redirect("auth/login","refresh");
    }
    
 }


}

?>