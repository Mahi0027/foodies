<?php

/*
 *Common Model
 * insert update delete 
*/
class Restaurant_model_item extends CI_Model {
    
    function resto_categories($restaurant_id)
	{
		$this->db->select('*,rmc.id as category_id');
		$this->db->from('t_restaurant_menu_category as rmc');
		$this->db->join('t_restaurant_category as rc', 'rc.id = rmc.cat_id','left');
		$this->db->join('t_restaurant_outlet_type as rot', 'rot.id = rc.cat_id','left');
		
		$this->db->where('rc.restaurant_id',$restaurant_id); 
		$query = $this->db->get();
		//echo $this->db->last_query();
		return ($query->num_rows() > 0)?$query->result_array():FALSE;
	   
	}
	

	
        
}
?>