<?php

class Branch_m extends CI_Model{
	
    	// ---------------------------------------------------------------------

	public function branchaddpro(){
	    $name = $this->input->post('name');
	    $role = $this->input->post('branch_role');
	    $status = $this->input->post('status');
	    $city = $this->input->post('city');
	    $country = $this->input->post('country');
	    $street_address = $this->input->post('street_address');
	    $branch_month = $this->input->post('month');
	    $branch_year = $this->input->post('year');
	    $date = date('d/m/y');
	    $insert_branch = array(
		'b_name' => $name,
		'b_role' => $role,
		'b_status' => $status,
		'b_city' => $city,
		'b_country' => $country,
		'b_streetaddress' => $street_address,
		'b_month' => $branch_month,
		'b_year'  => $branch_year,
		'b_dateadded' => $date, 		
	    );
	    $insert_into_table = $this->db->insert('branch',$insert_branch);
	    if($insert_into_table == 1){
		    redirect('branch/branchview');
	    }
		
	}
	
	// ---------------------------------------------------------------------
	
	public function branchview(){
	    
	    $this->db->select('*');
	    $this->db->from('branch');
	    $query = $this->db->get();
	    $result['branch'] = $query->result();
	    $this->db->select('*');
	    $this->db->from('cash');
	    $query = $this->db->get();
	    $result['cash'] = $query->result();
	    return $result;
	    

	}
	
	// ---------------------------------------------------------------------
	
	public function branchupdate($id){
	    
	    $this->db->select('*');
	    $this->db->where('b_id',$id);
	    $qry = $this->db->get('branch');
	    $result = $qry->result();
	    return $result;
	    
	}
	
	// ---------------------------------------------------------------------

	public function branchupdatepro($id){
	    
	    $name = $this->input->post('name');
	    $role = $this->input->post('role');
	    $status = $this->input->post('status');
	    $city = $this->input->post('city');
	    $country = $this->input->post('country');
	    $street_address = $this->input->post('street_address');
	    $month = $this->input->post('month');
	    $year  = $this->input->post('year');
	    $date  = date('d/m/y');
	    $update_record = array(
	    'b_name' => $name,
	    'b_role' => $role,
	    'b_status'=> $status,
	    'b_city' => $city,
	    'b_country' => $country,
	    'b_streetaddress' => $street_address,
	    'b_month' => $month,
	    'b_year'  => $year,
	    'b_dateadded' => $date,


	    );
	    $this->db->where('b_id',$id);
	    $update_record_table = $this->db->update('branch',$update_record);
	    if($update_record_table==1){
		redirect('branch/branchview');
	    }
	    else{
		return 0;
	    }
	}
	
	// ---------------------------------------------------------------------
	
	public function branchdelete($id){
	    $this->db->where('b_id',$id);
	    $this->db->delete('branch');
	    redirect('branch/branchview');
	}
	
	// ---------------------------------------------------------------------
   
}
	
	
