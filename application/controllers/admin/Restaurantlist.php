<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurantlist extends CI_Controller {

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
		$data =  array();
		
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;

		$data['restaurantlist'] = $this->Common_model->select_info('t_restaurant');
		$this->load->view('admin/restaurantlist',$data);
		
	}

	public function view_restaurant($id)
	{	
		$data = array();
		$data['restaurantlist']= $this->Common_model->select_info('t_restaurant',array('restaurant_id'=>$id));
		$this->load->view('admin/restaurant_complete_detail',$data);
		
	}

	public function delete($id){
		$result=$this->Common_model->delete_info('t_restaurant',array('restaurant_id'=>$id));
		if($result==true){
			redirect('admin/restaurantlist');
		}
		else{
			redirect('admin/restaurantlist?id='."not found");
		}
	}

	public function addrestaurant(){
		$restaurant_id = $this->session->userdata('restaurant_id');
		if(!isset($restaurant_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;
		$this->load->view('admin/add_restaurant');
	}
	public function add_restaurantdetails(){
		$restaurant_id = $this->session->userdata('restaurant_id');
		if(!isset($restaurant_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;

		//form validation
		$this->form_validation->set_rules('restaurant_name','restaurant name','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_owner_name','restaurant owner name','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_owner_mobile','restaurant owner mobile','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_owner_email','restaurant owner email','required|valid_email',array('required'=>'you must provide your %s','valid_email'=>'you must provide your valid %s'));
		$this->form_validation->set_rules('restaurant_address','restaurant address','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_latitude','restaurant latitude','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_longitude','restaurant longitude','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_owner_adhaar_id','restaurant owner adhaar id','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_gst_tin_no','restaurant gst tin no','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_valid_check','restaurant valid check','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_image_url','restaurant image','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_theme_url','restaurant theme','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_food_type','restaurant food type','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_dining_type','restaurant dining type','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_outlet_type','restaurant outlet type','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_cusine','restaurant cusine','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_outlet_type','restaurant outlet type','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('restaurant_fascilities','restaurant fascilities','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('remarks_by_mr_auber','remarks by mr auber','required',array('required'=>'you must provide %s'));

		if($this->form_validation->run()==TRUE){
			$restaurant_name=$this->input->post('restaurant_name');
			$restaurant_owner_name=$this->input->post('restaurant_owner_name');
			$restaurant_owner_mobile=$this->input->post('restaurant_owner_mobile');
			$restaurant_owner_email=$this->input->post('restaurant_owner_email');
			$password=$this->input->post('password');
			$restaurant_address=$this->input->post('restaurant_address');
			$restaurant_latitude=$this->input->post('restaurant_latitude');
			$restaurant_longitude=$this->input->post('restaurant_longitude');
			$restaurant_owner_adhaar_id=$this->input->post('restaurant_owner_adhaar_id');
			$restaurant_gst_tin_no=$this->input->post('restaurant_gst_tin_no');
			$restaurant_valid_check=$this->input->post('restaurant_valid_check');
			$restaurant_image_url=$this->input->post('restaurant_image_url');
			$restaurant_theme_url=$this->input->post('restaurant_theme_url');
			$restaurant_food_type=$this->input->post('restaurant_food_type');
			$restaurant_dining_type=$this->input->post('restaurant_dining_type');
			$restaurant_outlet_type=$this->input->post('restaurant_outlet_type');
			$restaurant_cusine=$this->input->post('restaurant_cusine');
			$restaurant_fascilities=$this->input->post('restaurant_fascilities');
			$restaurant_timings=$this->input->post('restaurant_timings');
			$remarks_by_mr_auber=$this->input->post('remarks_by_mr_auber');


			$result=$this->Common_model->insert_info('t_restaurant',array('restaurant_name'=>$restaurant_name,'restaurant_owner_name'=>$restaurant_owner_name,'restaurant_owner_mobile'=>$restaurant_owner_mobile,'restaurant_owner_email'=>$restaurant_owner_email,'password'=>$password,'restaurant_address'=>$restaurant_address,'restaurant_latitude'=>$restaurant_latitude,'restaurant_longitude'=>$restaurant_longitude,'restaurant_owner_adhaar_id'=>$restaurant_owner_adhaar_id,'restaurant_gst_tin_no'=>$restaurant_gst_tin_no,'restaurant_valid_check'=>$restaurant_valid_check,'restaurant_image_url'=>$restaurant_image_url,'restaurant_theme_url'=>$restaurant_theme_url,'restaurant_food_type'=>$restaurant_food_type,'restaurant_dining_type'=>$restaurant_dining_type,'restaurant_outlet_type'=>$restaurant_outlet_type,'restaurant_cusine'=>$restaurant_cusine,'restaurant_fascilities'=>$restaurant_fascilities,'restaurant_timings'=>$restaurant_timings,'remarks_by_mr_auber'=>$remarks_by_mr_auber));
			if($result==TRUE){
				//$this->load->view('admin/userlist');
				redirect('admin/Restaurantlist');
			}
		}
		else{
			$this->load->view('admin/add_restaurant');
		}

		
	}

	public function restaurant_update_details($id){
		$data=array();
		$data['restaurantlist']=$this->Common_model->select_info('t_restaurant',array('restaurant_id'=>$id));
		if($data==TRUE){
			$this->load->view('admin/update_restaurantdetails',$data);
		}
	}

	public function restaurant_update(){
    	$restaurant_name=$this->input->post('restaurant_name');
		$restaurant_owner_name=$this->input->post('restaurant_owner_name');
		$restaurant_owner_mobile=$this->input->post('restaurant_owner_mobile');
		$restaurant_owner_email=$this->input->post('restaurant_owner_email');
		$password=$this->input->post('password');
		$restaurant_address=$this->input->post('restaurant_address');
		$restaurant_latitude=$this->input->post('restaurant_latitude');
		$restaurant_longitude=$this->input->post('restaurant_longitude');
		$restaurant_owner_adhaar_id=$this->input->post('restaurant_owner_adhaar_id');
		$restaurant_gst_tin_no=$this->input->post('restaurant_gst_tin_no');
		$restaurant_valid_check=$this->input->post('restaurant_valid_check');
		$restaurant_image_url=$this->input->post('restaurant_image_url');
		$restaurant_theme_url=$this->input->post('restaurant_theme_url');
		$restaurant_food_type=$this->input->post('restaurant_food_type');
		$restaurant_dining_type=$this->input->post('restaurant_dining_type');
		$restaurant_outlet_type=$this->input->post('restaurant_outlet_type');
		$restaurant_cusine=$this->input->post('restaurant_cusine');
		$restaurant_fascilities=$this->input->post('restaurant_fascilities');
		$restaurant_timings=$this->input->post('restaurant_timings');
		$remarks_by_mr_auber=$this->input->post('remarks_by_mr_auber');
		$restaurant_id=$this->input->post('restaurant_id');

    	$result=$this->Common_model->update_info('t_restaurant',array('restaurant_name'=>$restaurant_name,'restaurant_owner_name'=>$restaurant_owner_name,'restaurant_owner_mobile'=>$restaurant_owner_mobile,'restaurant_owner_email'=>$restaurant_owner_email,'password'=>$password,'restaurant_address'=>$restaurant_address,'restaurant_latitude'=>$restaurant_latitude,'restaurant_longitude'=>$restaurant_longitude,'restaurant_owner_adhaar_id'=>$restaurant_owner_adhaar_id,'restaurant_gst_tin_no'=>$restaurant_gst_tin_no,'restaurant_valid_check'=>$restaurant_valid_check,'restaurant_image_url'=>$restaurant_image_url,'restaurant_theme_url'=>$restaurant_theme_url,'restaurant_food_type'=>$restaurant_food_type,'restaurant_dining_type'=>$restaurant_dining_type,'restaurant_outlet_type'=>$restaurant_outlet_type,'restaurant_cusine'=>$restaurant_cusine,'restaurant_fascilities'=>$restaurant_fascilities,'restaurant_timings'=>$restaurant_timings,'remarks_by_mr_auber'=>$remarks_by_mr_auber),array('restaurant_id'=>$restaurant_id));
    	if(result==TRUE){
    		redirect('admin/Restaurantlist'	);
    	}
    	else{
    		redirect('admin/Restaurantlist');
    	}
    }

    public function status_update($status,$id){
		$result=$this->Common_model->update_info('t_restaurant',array('status'=>$status),array('restaurant_id'=>$id));
		if($result==TRUE){
			redirect('admin/restaurantlist');
		}
	}
	
	
        
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
     } 
}
