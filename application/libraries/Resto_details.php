<?php
/*
 * Resto_details
 */
class Resto_details {
 

    
    // --------------------------------------------------------------------
    /**
     * Constructor
     *
     */
    function __construct()
    {
        $this->ci =& get_instance();    // get a reference to CodeIgniter.
    }
    
 
    function resto($restaurant_id)
    {
       $query = $this->ci->db->query("select * from t_restaurant where restaurant_id=".$restaurant_id);
       $result = $query->result();
      return  $result[0];
       
    }
}
     
 ?>