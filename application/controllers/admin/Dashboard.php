<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;
		$this->load->view('admin/dashboard');
	}
	
	public function ajax_signup()
	{
		
		$op=$status= $error= array();
		// Validation code
		$this->form_validation->set_rules('Username', 'Username', 'trim|required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('Password', 'Password', 'trim|required', array('required' => 'You must provide a %s.'));
		
		//is_unique check the unique email value in users table
	
		if ($this->form_validation->run() == TRUE):
			 $data_array =  array('restaurant_owner_email'=>$this->input->post('Username'),
								 'password'=>$this->input->post('Password'));
			 
			   $responce = $this->Common_model->select_info('t_restaurant',$data_array);
	             	             
				if($responce ==  FALSE):

				$this->session->set_flashdata('message',"Please check  your credentials") ;  
				redirect('/admin/login/');
				
				elseif(count($responce) > 0):
					$data_array =  array(
							'restaurant_id'=> $responce[0]['restaurant_id'],
							'restaurant_email'=>$responce[0]['restaurant_owner_email']
					);
					$this->session->set_userdata($data_array);
					
					redirect('/admin/dashboard/');
					
				
			 endif;
			 
		else :
			
			$error['username'] = form_error('loginUsername');
			$error['password'] = form_error('loginPassword');

			$this->session->set_flashdata('message',"Please enter username and password") ;
			redirect('/admin/login/');  
			
		endif;
		
		
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function restaurant_complete_detail($id)
    {
    	$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;

		$data=array();
		$data['userdata']=$this->Common_model->select_info('t_restaurant',array('restaurant_id'=>$id));
    	$this->load->view('admin/restaurant_complete_detail',$data);
    }
}
