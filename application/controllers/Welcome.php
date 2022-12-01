<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
	     parent::__construct();
	     $this->load->database();
	     $this->load->helpers(array('form', 'url' ,'email_helper'));
	     $this->load->model('Admin_model');
	     $this->load->model('WebModel');
	     $this->load->library("pagination");

	 }

	public function index()
	{
		$this->load->view('login');
	}

	public function registration()
	{
		$this->load->view('registration');
	}

	public function create()
	{
		$this->load->view('school_add');
	}


	public function school_table()
	{
		if($this->session->userdata('email')=="" ){
               redirect('welcome');
             }else{

             	$config = array();
        $config["base_url"] = base_url() . "school-list";
        $config["total_rows"] = $this->WebModel->get_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 2;
$id=$this->session->userdata('id');
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['school_record'] = $this->WebModel->get_authors($config["per_page"], $page,$id);



            
		    $this->load->view('school_table',$data);
		  }  
	
	}
	
	
	
	public function school_edit()
	{
		if($this->session->userdata('email')=="" ){
               redirect('welcome');
             }else{
             	$id = $_GET['id'];
             $data['school_edit']=$this->WebModel->select_byid('school','id ',$id);
            
            	
            
		    $this->load->view('school_edit',$data);
		   
	}
	}
	
}
