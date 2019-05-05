<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant_category extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		 $this->load->database();
		$this->load->model("Restaurant_model"); 
		$this->load->model("Common_model");
		$this->load->library("session");    		
	}
		
	public function index()
	{
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/login');
		   return TRUE; 
		endif;
		$data=array();

		$menucategory= $this->Restaurant_model->resto_categories($user_id);
		$data['categorylist'] = $menucategory;
		$data['outletlist']= $this->Common_model->select_info('t_restaurant_outlet_type',array('restaurant_id'=>$user_id));
		$this->load->view('restaurant_category',$data);
	}
	public function category_adds()
	{
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/login');
		   return TRUE; 
		endif;
		$category_name=$this->input->post('category_name');
		$outlet_name=$this->input->post('outlet_name');
		$cat_active=$this->input->post('active');
		$data=array(
				'cat_name'=>$category_name,
				'restaurant_id'=>$user_id,
				'cat_id'=>$outlet_name,
				'cat_active'=>$cat_active
			);
	
		$menucategory['categorylist']= $this->Common_model->insert_info('t_restaurant_category',$data);

          redirect('restaurant_category');
		
	}
	public function delete($id){
		$result=$this->Common_model->delete_info('t_restaurant_category',array('id'=>$id));
			
		if($result==true){
			redirect('restaurant_category');
		}
		else{
			redirect('restaurant_category');
		}
	}
	public function category_status_update($status,$id){

		$result=$this->Common_model->update_info('t_restaurant_category',array('cat_active'=>$status),array('id'=>$id));
		if($result==TRUE){
			redirect('restaurant_category');
		}
	}
	public function update_category($id){
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/login');
		   return TRUE; 
		endif;
    	$data=array();
		$restaurant_category=$this->Common_model->select_info('t_restaurant_category',array('id'=>$id));
		$data['category_list'] = $restaurant_category[0];
		$data['outletlist']= $this->Common_model->select_info('t_restaurant_outlet_type',array('restaurant_id'=>$user_id));
		if($data==TRUE){
			$this->load->view('edit_category',$data);
		}
    	
    }

    public function update_category_detail(){
    	$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/login');
		   return TRUE; 
		endif;
    	$data=array();

    	$outlet_name=$this->input->post('outlet_name');
    	$cat_name=$this->input->post('cat_name');
		//$restaurant_id=$this->input->post('restaurant_id');
		$id=$this->input->post('id');
		$active=$this->input->post('active');
        $result=array();
    	$result=$this->Common_model->update_info('t_restaurant_category',array('cat_id'=>$outlet_name,'cat_name'=>$cat_name,'cat_active'=>$active),array('id'=>$id,'restaurant_id'=>$user_id));
    	if($result==TRUE){
    		redirect('restaurant_category');
    	}
    	else{
    		echo "$id";
    	}
    	
    
    	
    }
	
	
}
