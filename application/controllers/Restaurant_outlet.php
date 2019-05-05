<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant_outlet extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		 $this->load->database();
		$this->load->model("Common_model"); 
		$this->load->library("session"); 
		$this->load->library('form_validation');   		
	}
		
	public function index()
	{
		$data = array();
		$restaurant_id = $this->session->userdata('restaurant_id');
		if(!isset($restaurant_id)):
			redirect('/login');
		   return TRUE; 
		endif;
		

		$data['outlet_list'] = $this->Common_model->select_info('t_restaurant_outlet_type',array('restaurant_id'=>$restaurant_id));
		
		
		$this->load->view('restaurant_outlet',$data);


	}

	public function delete($id){
		$result=$this->Common_model->delete_info('t_restaurant_outlet_type',array('id'=>$id));
		if($result==true){
			redirect('restaurant_outlet');
		}
		else{
			redirect('restaurant_outlet?id='."not found");
		}
	}

	public function add_outlet(){

			$restaurant_id = $this->session->userdata('restaurant_id');
			if(!isset($restaurant_id)):
				redirect('/login');
			   return TRUE; 
			endif;
			$outlet_name=$this->input->post('outlet_name');
			$active=$this->input->post('active');
			
			$result=$this->Common_model->insert_info('t_restaurant_outlet_type',array('type_of_outlet_name'=>$outlet_name,'active'=>$active,'restaurant_id'=>$restaurant_id));
			if($result==TRUE){
				//$this->load->view('admin/userlist');
				redirect('restaurant_outlet');
			}
		

	}



	
	public function update_outlet($id){
    	$data=array();
		$data['outlet_list']=$this->Common_model->select_info('t_restaurant_outlet_type',array('id'=>$id));
		if($data==TRUE){
			$this->load->view('update_outlet',$data);
		}
    	
    }

    public function update_outlet_detail(){

	    	$outlet_name=$this->input->post('outlet_name');
			$restaurant_id=$this->input->post('restaurant_id');
			$active=$this->input->post('active');
			$id=$this->input->post('id');

	    	$result=$this->Common_model->update_info('t_restaurant_outlet_type',array('type_of_outlet_name'=>$outlet_name,'active'=>$active),array('id'=>$id,'restaurant_id'=>$restaurant_id));
	    	if(result==TRUE){
	    		redirect('restaurant_outlet');
	    	}
	    	else{
	    		redirect('restaurant_outlet');
	    	}

    	

    }


	public function status_update($status,$id){
		$result=$this->Common_model->update_info('t_restaurant_outlet_type',array('active'=>$status),array('id'=>$id));
		if($result==TRUE){
			redirect('restaurant_outlet');
		}
	}




	public function logout() {
        $this->session->sess_destroy();
        redirect('login');
     }
	
	
}
