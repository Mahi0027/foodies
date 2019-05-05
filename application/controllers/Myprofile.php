<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myprofile extends CI_Controller 
{

	 public function __construct()
	 {
		parent::__construct();
		 $this->load->database();
		$this->load->model("Common_model"); 
		$this->load->library("session");
		$this->load->library('upload');    		
	}
		
	public function index()
	{
		$data = array();
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/login');
		   return TRUE; 
		endif;
		$data['profile'] = $this->Common_model->select_info('t_restaurant',array('restaurant_id'=>$user_id));
		$this->load->view('myprofile',$data);
	}
		
	public function profile_data_insert()
	{			
				 if(!empty($_FILES['resto_picture']['name']))
		            {
		                $config['upload_path'] = 'uploads/resto_images/';
		                $config['allowed_types'] = 'jpg|jpeg|png|gif';
		                $config['file_name'] = $_FILES['resto_picture']['name'];
		                
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('resto_picture'))
		                {
		                    $uploadData = $this->upload->data();
		                    $picture = $uploadData['file_name'];
		                }
		                else
		               		    $picture = 'hey';
		              }

		            if(!empty($_FILES['resto_theme']['name']))
		            {
		                $config['upload_path'] = 'uploads/resto_images/';
		                $config['allowed_types'] = 'jpg|jpeg|png|gif';
		                $config['file_name'] = $_FILES['resto_theme']['name'];
		                
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('resto_theme'))
		                {
		                    $uploadData = $this->upload->data();
		                    $theme = $uploadData['file_name'];
		                }
		                else
		               		    $theme = 'hey';
		              }



		          
			        $restaurant_name=$this->input->post('restaurant_name');
			         $restaurant_location_city   =$this->input->post('restaurant_location_city');
			         $restaurant_owner_name =$this->input->post('restaurant_owner_name');			        
			         $restaurant_owner_mobile  =$this->input->post('restaurant_owner_mobile');
			         $restaurant_address  =$this->input->post('restaurant_address');
			         $restaurant_latitude  =$this->input->post('restaurant_latitude');
			         $restaurant_longitude  =$this->input->post('restaurant_latitude');
			         $restaurant_owner_adhaar_id  =$this->input->post('restaurant_owner_adhaar_id');
			         $restaurant_gst_tin_no  =$this->input->post('restaurant_gst_tin_no');
			         $restaurant_valid_check  =$this->input->post('restaurant_valid_check');
			         $restaurant_registration_date  =$this->input->post('restaurant_registration_date');
			      	
			         
			         $restaurant_food_type  =$this->input->post('restaurant_food_type');
			         $restaurant_dining_type  =$this->input->post('restaurant_dining_type');
			         $restaurant_outlet_type  =$this->input->post('restaurant_outlet_type');
			         $restaurant_cusine  =$this->input->post('restaurant_cusine');
			         $restaurant_fascilities  =$this->input->post('restaurant_fascilities');
			         $restaurant_timings  =$this->input->post('restaurant_timings');
			         $remarks_by_mr_auber  =$this->input->post('remarks_by_mr_auber');
			         $restaurant_id  =$this->input->post('restaurant_id');
			        
			         $data=array('restaurant_name'=>$restaurant_name,
			         			'restaurant_location_city'=>$restaurant_location_city,
			         			'restaurant_owner_name'=>$restaurant_owner_name,      
			         	         'restaurant_owner_mobile'=>$restaurant_owner_mobile,
			         	         'restaurant_address'=>$restaurant_address,
			         	         'restaurant_latitude'=>$restaurant_latitude,
			         	         'restaurant_longitude'=>$restaurant_longitude,
			         	         'restaurant_owner_adhaar_id'=>$restaurant_owner_adhaar_id,
			         	     	'restaurant_gst_tin_no'=>$restaurant_gst_tin_no,
			         	     	'restaurant_valid_check'=>$restaurant_valid_check,
			         	     	'restaurant_registration_date'=>$restaurant_registration_date,
			         	     		'restaurant_image_url' => $picture,
			         	     	'restaurant_theme_url'=>$theme,
			         	     	'restaurant_food_type'=>$restaurant_food_type,
			         	     	'restaurant_dining_type'=>$restaurant_dining_type,
			         	     	'restaurant_outlet_type'=>$restaurant_outlet_type,
			         	     	'restaurant_cusine'=>$restaurant_cusine,
			         	     	'restaurant_fascilities'=>$restaurant_fascilities,
			         	     	'restaurant_timings'=>$restaurant_timings,
			         	     	'remarks_by_mr_auber'=>$remarks_by_mr_auber,			         
			         	    	);
			        $user_id = $this->session->userdata('restaurant_id');
					
			         $result=$this->Common_model->update_info('t_restaurant',$data,array('restaurant_id'=>$user_id));
			         
		             if ($result=TRUE)
		                {
		              		redirect('myprofile');
		              	} 	
			      	   else
			      	   	 return FALSE;
			        
	}
	
}
