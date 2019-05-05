<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant_details extends CI_Controller {

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
		$data = array();

		$data['details']  = $this->Common_model->select_info('t_restaurant');
		$this->load->view('admin/restaurant_details',$data);
		
	}

	public function delete(){
		$row=$this->input->post('delete');
		$result=$this->Common_model->delete_info('t_restaurant',array('restaurant_id'=>$row));
		if($result==true){
			redirect('home/user?id='.$result);
		}
		else{
			redirect('home/user?id=not found');
		}
	}

	
	
        
    /*public function logout() {
        $this->session->sess_destroy();
        redirect('login');
     }
    */ 
}
