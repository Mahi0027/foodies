<?php

/*
 *Common Model
 * insert update delete 
*/
class Restaurant_model extends CI_Model {
    
    function resto_categories($restaurant_id)
	{
		$this->db->select('*,rc.id as restaurant_category_id');
		$this->db->from('t_restaurant_category as rc');
		$this->db->join('t_restaurant_outlet_type as rot', 'rot.id = rc.cat_id');
		$this->db->where('rc.restaurant_id',$restaurant_id); 
		$query = $this->db->get();
		return ($query->num_rows() > 0)?$query->result_array():FALSE;
	   
	}
	
	
	
        
}
?>