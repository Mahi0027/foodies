<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		 $this->load->database();
		$this->load->model("Common_model"); 
		$this->load->library('form_validation');
		$this->load->library("session");    		
	}
		
	public function index()
	{
		
		$user_id = $this->session->userdata('restaurant_id');
		if(isset($user_id)):
			redirect('/dashboard');
		   return TRUE; 
		endif;
		$this->load->view('login');
	}
	
	public function ajax_signup()
	{
		
		$op=$status= $error= array();
		// Validation code
		$this->form_validation->set_rules('loginUsername', 'Username', 'trim|required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('loginPassword', 'Password', 'trim|required', array('required' => 'You must provide a %s.'));

		$data_array =  array('restaurant_owner_email'=>$this->input->post('loginUsername'),
								 'PASSWORD'=>$this->input->post('loginPassword'));
			 
	   $responce = $this->Common_model->select_info('t_restaurant',$data_array);
		//is_unique check the unique email value in users table
	   
	   		if ($this->form_validation->run() == TRUE):
				 $data_array =  array('restaurant_owner_email'=>$this->input->post('loginUsername'),
									 'PASSWORD'=>$this->input->post('loginPassword'));
				 
				   $responce = $this->Common_model->select_info('t_restaurant',$data_array);
				 	             	             
					if($responce ==  FALSE):
						$error['credentialerror'] = "Please check  your credentials";   
						$status['Status'] = "wrong";  
					
					elseif(count($responce) > 0):
						if($responce[0]['status']==1):
							$data_array =  array(
								'restaurant_id'=> $responce[0]['restaurant_id'],
								'restaurant_email'=>$responce[0]['restaurant_owner_email']
							);
							$this->session->set_userdata($data_array);
							$status['Status'] = "success";
							$url = base_url()."dashboard";
							$status['URL'] = $url;
						else:
							$error['credentialerror'] = "YourAccount is inactive, Please contact to admin";   
							$status['Status'] = "wrong";
						endif;
						
					
				 endif;
				 
			else :
				
				$error['username'] = form_error('loginUsername');
				$error['password'] = form_error('loginPassword');
				$status['Status'] = "fail";     
				
			endif;
			
			$op['errormsg'] =  isset($error) ? $error : " " ;
			$op['status']=$status;
			echo json_encode($op);
	   
	
	}
        
    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
     }
  }   

