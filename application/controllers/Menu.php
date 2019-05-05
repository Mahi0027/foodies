<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_PARSE);

class Menu extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		$this->load->database();
		$this->load->model("Common_model");
		$this->load->model("Restaurant_model_item"); 
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
		$data=array();
		$data['menu_item']= $this->Restaurant_model_item->resto_categories($user_id);
		$data['categorylist'] = $this->Common_model->select_info('t_restaurant_category',array('restaurant_id'=>$user_id));
		$data['menu_category']=$this->Common_model->select_info('t_restaurant_menu_category',array('restaurant_id'=>$user_id));
		
		$this->load->view('menu_item',$data);
	}
	
	public function menu_item_data_insert()
	{			
					 $user_id = $this->session->userdata('restaurant_id');
					 $cat_id   =$this->input->post('cateogy_name');
			         $menu_item_name=$this->input->post('menu_item_name');
			         $item_price   =$this->input->post('item_price');			        
			         $mr_auber_price  =$this->input->post('mr_auber_price');
			         $description =$this->input->post('description');
			         $active=$this->input->post('active');
			          
			          $data=array('cat_id'=>$cat_id,
			         			'menu_item_name'=>$menu_item_name,
			         			'item_price'=>$item_price,      
			         	         'mr_auber_price'=>$mr_auber_price,
			         	         'description'=>$description,
			         	         'restaurant_id'=>$user_id,
			         	         'menu_valid'=>$active,
			         	         );
			          
					
			         $result=$this->Common_model->insert_info('t_restaurant_menu_category',$data,array('restaurant_id'=>$user_id));
		              redirect('Menu');
		              	
	}
	
	public function delete_menu_item_list_data()
	{
		$result=$this->Common_model->delete_info('t_restaurant_menu_category',array('restaurant_id'=>$user_id));
		if($result==true){
			redirect('menu_item');
		}
		
	}
	public function status_update($status,$id)
	{
		$result=$this->Common_model->update_info('t_restaurant_menu_category',array('menu_valid'=>$status),array('id'=>$id));
		if($result==TRUE){
			redirect('Menu');
		}	
	}

	public function former_menu_item_list($id)
	{
	
		$data=array();
		$menulist = $this->Common_model->select_info('t_restaurant_menu_category',array('id'=>$id));
		$data['menu_item_list']=$menulist[0];
		
		$this->load->view('update_menu_item_list',$data);
	}
	public function update_menu_item_list($id,$cat_id)
	{
	    $user_id = $this->session->userdata('restaurant_id');
		//$cat_id =$this->input->post('cat_id');
	    $menu_item_name=$this->input->post('menu_item_name');
	    $item_price   =$this->input->post('item_price');			        
        $mr_auber_price  =$this->input->post('mr_auber_price');
 	    $description =$this->input->post('description');
	    $active=$this->input->post('active');
			          
	    $data=array('cat_id'=>$cat_id,
			         'menu_item_name'=>$menu_item_name,
			         'item_price'=>$item_price,      
			         'mr_auber_price'=>$mr_auber_price,
			         'description'=>$description,
			         'restaurant_id'=>$user_id,
			         'menu_valid'=>$active,
			        );
			          
					
			         $result=$this->Common_model->update_info('t_restaurant_menu_category',$data,array('id'=>$id));
		              redirect('Menu');
	}

	public function delete($id){
		$result=$this->Common_model->delete_info('t_restaurant_menu_category',array('id'=>$id));
		if($result==true){
			redirect('Menu');
		}
		else{
			echo "failed"." ".$id;
		}
	}
}
