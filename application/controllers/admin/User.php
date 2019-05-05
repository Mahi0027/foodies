<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

		$this->load->view('admin/dashboard/user_list');
	}

	public function user_data_table(){
		$data = array();

		$data['users']  = $this->Common_model->select_info('t_basic_details');
		$this->load->view('admin/user_data_table',$data);	
	}
	

	public function user_detail_show($id){
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;

		$data=array();
		$data['userdata']=$this->Common_model->select_info('t_basic_details',array('customer_id'=>$id));
		$this->load->view('admin/user_detail_show',$data);
	}

	public function user_add(){
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;
		$this->load->view('admin/user_add');
	}
	
	public function user_add_row(){
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;

		//form validation
		$this->form_validation->set_rules('first_name','first name','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('middle_name','middle name','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('last_name','last name','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('email','Email','required|valid_email',array('required'=>'you must provide your %s','valid_email'=>'you must provide your valid %s'));
		$this->form_validation->set_rules('password','password','required|is_unique[t_basic_details.password]',array('required'=>'you must provide your %s','is_unique'=>'your password is not unique'));
		$this->form_validation->set_rules('dob','date of birth','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('gender','gender','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('mobile_no','mobile number','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('refer_code','refer code','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('refer_by','refer by','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('marital_status','marital status','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('address','address','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('state','state','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('city','city','required',array('required'=>'you must provide your %s'));
		$this->form_validation->set_rules('pincode','pincode','required',array('required'=>'you must provide your %s'));

		if($this->form_validation->run()==TRUE){
			$user_id = $this->session->userdata('restaurant_id');
			if(!isset($user_id)):
				redirect('/admin/login');
			   return TRUE; 
			endif;
			date_default_timezone_set(" IST (UTC +5:30)");//timezone
			$first_name=$this->input->post('first_name');
			$middle_name=$this->input->post('middle_name');
			$last_name=$this->input->post('last_name');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$dob=$this->input->post('dob');
			$gender=$this->input->post('gender');
			$mobile_no=$this->input->post('mobile_no');
			$refer_code=$this->input->post('refer_code');
			$refer_by=$this->input->post('refer_by');
			$marital_status=$this->input->post('marital_status');
			$address=$this->input->post('address');
			$state=$this->input->post('state');
			$city=$this->input->post('city');
			$pincode=$this->input->post('pincode');
			$date=date("Y-m-d h:i:s a");

			$result=$this->Common_model->insert_info('t_basic_details',array('email_id'=>$email,'first_name'=>$first_name,'middle_name'=>$middle_name,'last_name'=>$last_name,'dob'=>$dob,'gender'=>$gender,'mobile_no'=>$mobile_no,'refer_code'=>$refer_code,'refer_by'=>$refer_by,'password'=>$password,'marital_status'=>$marital_status,'address'=>$address,'state'=>$state,'city'=>$city,'pincode'=>$pincode,'create_date'=>$date));
			if($result==TRUE){
				//$this->load->view('admin/userlist');
				redirect('admin/user/user_data_table');
			}
		}
		else{
			$this->load->view('admin/user_add');
		}




		//$this->load->view('admin/userlist');

	}

	public function status_update($status,$id){
		$result=$this->Common_model->update_info('t_basic_details',array('status'=>$status),array('customer_id'=>$id));
		if($result==TRUE){
			redirect('admin/user/user_data_table');
		}
	}

	//edit row
	public function user_edit_detail($id){
		$row=$id;
		$data=array();
		$data['users']=$this->Common_model->select_info('t_basic_details',array('customer_id'=>$row));
		if($data==TRUE){
			$this->load->view('admin/user_edit_detail',$data);
		}
	}

	public function user_edit_row(){
		$user_id = $this->session->userdata('restaurant_id');
		if(!isset($user_id)):
			redirect('/admin/login');
		   return TRUE; 
		endif;
		
    	date_default_timezone_set(" IST (UTC +5:30)");//timezone
    	$row=$this->input->post('customer_id');
		$first_name=$this->input->post('first_name');
		$middle_name=$this->input->post('middle_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$dob=$this->input->post('dob');
		$gender=$this->input->post('gender');
		$mobile_no=$this->input->post('mobile_no');
		$refer_code=$this->input->post('refer_code');
		$refer_by=$this->input->post('refer_by');
		$marital_status=$this->input->post('marital_status');
		$address=$this->input->post('address');
		$state=$this->input->post('state');
		$city=$this->input->post('city');
		$pincode=$this->input->post('pincode');
		$date=date("Y-m-d h:i:s a");
    
    	$result=$this->Common_model->update_info('t_basic_details',array('email_id'=>$email,'first_name'=>$first_name,'middle_name'=>$middle_name,'last_name'=>$last_name,'dob'=>$dob,'gender'=>$gender,'mobile_no'=>$mobile_no,'refer_code'=>$refer_code,'refer_by'=>$refer_by,'password'=>$password,'marital_status'=>$marital_status,'address'=>$address,'state'=>$state,'city'=>$city,'pincode'=>$pincode,'update_date'=>$date),array('customer_id'=>$row));
    	if(result==TRUE){
    		redirect('admin/user/user_data_table');
    	}
    	else{
    		redirect('admin/user/user_data_table');
    	}
    }

    //delete row
    public function user_delete($row){
		$result=$this->Common_model->delete_info('t_basic_details',array('customer_id'=>$row));
		if($result==true){
			redirect('admin/user/user_data_table/'.$row);
		}
		else{
			//redirect('admin/dashboard/userlist/.'$row);
		}
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
     }
}
