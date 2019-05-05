<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		 $this->load->database();
		$this->load->model("Common_model"); 
		$this->load->library('form_validation');
		$this->load->library("session");    		
	}
		
	public function index(){

		$data =  array();
		
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;

		$data['restaurantlist'] = $this->Common_model->select_info('t_restaurant');
		$this->load->view('admin/restaurantlist',$data);
	}

	public function reastoedit($id){
		$data = array();
		$resto = $this->Common_model->select_info('t_restaurant', array('restaurant_id'=>$id ));
		$data['restaurant'] = $resto[0];
		$this->load->view('admin/editrestaurant',$data);

	}
	
	
}
