<?php
class Admin_model extends CI_Model{ 	

public function __construct(){
	parent::__construct();
	}

public function SelectData($table = NULL, $field = NULL, $cond = NULL, $limit = NULL, $order = NULL)
   {
      $this->db->select($field);
      $this->db->from($table);
      $this->db->where($cond); 
      $query = $this->db->get();
      $data  =  $query->result();
      if($data){
         return $data;
      }else{
         return false;
      }
   }
  

    function add_member($member){
      
         $this->db->insert('member',$member);
         return true;
    
    } 
    function add_school($school){
      
         $this->db->insert('school',$school);
         return true;
    
    }
    

} 
