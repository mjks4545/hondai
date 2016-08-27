<?php

class Reports_m extends CI_Model{
	   
   public function reportspro(){


	$first_date  = $this->input->post('from_date');
	$second_date = $this->input->post('to_date');
	$this->db->where('c_dateadded >=', $first_date);
    $this->db->where('c_dateadded <=', $second_date);
        $query = $this->db->get('cash');
        $result = $query->result();
        print_r($result);die();

}


}
	
	
