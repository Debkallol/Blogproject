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


}

?>