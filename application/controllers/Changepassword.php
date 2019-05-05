<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		 $this->load->database();
		$this->load->model("Common_model"); 
		$this->load->library("session");    		
	}
		
	public function index()
	{
		$data = array();
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/login');
		   return TRUE; 
		endif;

		
		$this->load->view('cangepassword',$data);
	}
	public function changepassword()
	{ 
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/login');
		   return TRUE; 
		endif;

		
		$result=$this->Common_model->select_password('t_restaurant',array('restaurant_id'=>$user_id));
		$currentpassword=$this->input->post('currentpassword');
		$newpassword=$this->input->post('newpassword');
		$confirmpassword=$this->input->post('confirmpassword');
		$data=array('password'=>$newpassword);
	
		if($result[0]['password']==$currentpassword){
			if($newpassword==$confirmpassword)
			{
			  $this->Common_model->update_info('t_restaurant',array('password'=>$newpassword),array('restaurant_id'=>$user_id));
			  //echo "your password has been changed";
			  $this->session->set_flashdata('message',"Your password has been changed") ;
			  $this->load->view('dashboard');
			  

		    }
		    else{
		    	//echo "please type the same password";
		    	$this->session->set_flashdata('message',"Please type the same password") ;
		    	$this->load->view('cangepassword',$data);
		    }
		}
		else{
			    //echo "your old password is wrong";
			$this->session->set_flashdata('message',"Your old password is wrong") ;
			    $this->load->view('cangepassword',$data);
			
		
		}

	}
	
	
	
}
