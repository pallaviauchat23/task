<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
   
	function __construct()
	{
	     parent::__construct();
	     $this->load->database();
	     $this->load->helpers(array('form', 'url'));
	     $this->load->model('Admin_model');
         $this->load->model('WebModel');


	 }

     public function add_member(){
       try{
            
            $data = array(
                
                'name'=> $this->input->post("name"),
                'email'=> $this->input->post("email"),
                'password'=> md5($this->input->post("password")),
                
                
            );
            $data = $this->security->xss_clean($data);
             $res  = $this->Admin_model->add_member($data);
            //$this->db->insert('member', $data);
            if($this->db->affected_rows() > 0){
                //return true;
                
                redirect('welcome');
            }else{
                return false;
            }
        }catch(Exception $ex){
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }
        
       
      }
   

	public function login_validate()
    {
        $cond = array('email' => $this->input->post('email'),
                      'password' => md5($this->input->post('password')),
                     );   

        $result = $this->Admin_model->SelectData('member','*',$cond); 
      //echo '<pre>';print_r($result);exit();
     
        if(!empty($result))
        {
         
                $sess_array = array();

                foreach($result as $row)
                {
                    $session_data  = array( 'id' => $row->id,
                                            'name' => $row->name,
                                            'email' => $row->email, 
                                            
                                            );
                 
                    $this->session->set_userdata($session_data);

                  
                    redirect('school-list');
                } 
          
        }else{

            
            $this->session->set_flashdata('msg', 'Invalid User Email or Password');      
            redirect('welcome','refresh');
                   
        } 
    } 

     
    public function logout()
     {
         $this->session->sess_destroy();

        // session_destroy();
        //echo 'Rediecting.. Please Wait';
         redirect('welcome', 'refresh');
     }


    public function school_delete()
      {
        $id = $_GET['id'];
        $this->WebModel->delete_data('school','id',$id);
       
        redirect('school-list');
      }


     public function add(){
       try{
            
            $data = array(
                
                'name'=> $this->input->post("name"),
                'location'=> $this->input->post("location"),
                'reg_id'=> $this->session->userdata('id'),
                
                
            );
            $data = $this->security->xss_clean($data);
             $res  = $this->Admin_model->add_school($data);
           
            if($this->db->affected_rows() > 0){
                //return true;
                
                redirect('school-list');
            }else{
                return false;
            }
        }catch(Exception $ex){
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }
        
       
      }
        
        public function update_school()
     {

      try{
        $id = $_GET['id'];
       
            $data = array(
                
               'name'=> $_POST['name'],
               'location'=> $_POST['location'],
                
            );
        //echo '<pre>';print_r($data);exit();
     
            $data = $this->security->xss_clean($data);
             $res  =  $this->WebModel->update_data('school','id',$id,$data);
            if($this->db->affected_rows() > 0){
                //return true;
                redirect('school-list');
            }else{
                return false;
            }
          
        }catch(Exception $ex){
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }
        
     
     
      redirect('school-list');
    }

public function search(){
                 
             
                $result  =  $this->WebModel->search();
               // print_r($result);exit();
               if(count($result)>0){
               
                $data['search']=$result;
                $this->load->view('search',$data);
                  }else{
                     $this->session->set_flashdata('msg', 'School Name Not Available');      
            redirect('school-list','refresh');
                }
                  
    
}

}