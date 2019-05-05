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
		$this->load->view('admin/login');
	}
	
	public function ajax_signup()
	{
		
		$op=$status= $error= array();
		// Validation code
		$this->form_validation->set_rules('Username', 'Username', 'trim|required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('Password', 'Password', 'trim|required', array('required' => 'You must provide a %s.'));
		

			//is_unique check the unique email value in users table

			if ($this->form_validation->run() == TRUE):
				 $data_array =  array('email'=>$this->input->post('Username'),
									 'password'=>$this->input->post('Password'));
				 
				   $responce = $this->Common_model->select_info('admin_login',$data_array);
		           print_r($responce);
		                      
					if($responce ==  FALSE):

					$this->session->set_flashdata('message',"Please check  your credentials") ;  
					redirect('/admin/login/');
					
					elseif(count($responce) > 0):
						$data_array =  array(
								'restaurant_id'=> $responce[0]['restaurant_id'],
								'email'=>$responce[0]['email']
						);
						$this->session->set_userdata($data_array);
						
						redirect('/admin/dashboard/');
						
					
				 endif;
				 
			else :
				
				$error['username'] = form_error('loginUsername');
				$error['password'] = form_error('loginPassword');

				$this->session->set_flashdata('message',"Please enter username ans password") ;
				redirect('/admin/login/');  
				
			endif;
	
	}
        
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
     }
}
