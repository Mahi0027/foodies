<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

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
		$data['offers'] = $this->Common_model->select_info('offer',array('restaurant_id'=>$user_id));
		$this->load->view('offers',$data);
	}
	
	
}
