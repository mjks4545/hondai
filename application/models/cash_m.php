<?php

class Cash_m extends CI_Model{
	    public function cash_pay($id){
		    //$status = $this->input->post('c_status');
		   	$this->db->where('c_id',$id);
		  	$insert_atrray=  array(
	     		'c_status' => 0
			);
			$update_array = $this->db->update('cash',$insert_atrray);
	        redirect('customer/customer_view');
		}
}
	
	
