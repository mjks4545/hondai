<?php

class Member_m extends CI_Model{
	
	public function memberaddpro(){
		$m_name          = $this->input->post('name');
		$m_number        = $this->input->post('number');
		$m_role          = $this->input->post('role');
		$m_status        = $this->input->post('status');
		$m_city          = $this->input->post('city');
		$m_country       = $this->input->post('country');
		$m_streetaddress = $this->input->post('street_address');
		$b_id            = $this->input->post('branch');
		$date = date('d-m-y');
		$month = date('M');
		$year  = date('Y');
		$insert_array = array(
		'm_name'         => $m_name,
		'm_number'       => $m_number,
		'm_role'         => $m_role,
		'm_status'       => $m_status,
		'm_city'         => $m_city,
		'm_country'      => $m_country,
		'm_streetaddress'=> $m_streetaddress,
		'm_month'        => $month,
		'm_year'         => $year,
		'date_added'     => $date,
		'b_id'           => $b_id  
		);
		$insert_into_table = $this->db->insert('member',$insert_array);
	}
	public function memberview(){
		$this->db->select('*');
		$this->db->from('member');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function memberupdate($id){
		$this->db->select('*');
		$this->db->where('m_id',$id);
		$qry = $this->db->get('member');
		$result = $qry->result();
		return $result;
		
		
	}
	public function memberupdatepro($id){
	    $m_name          = $this->input->post('name');
		$m_number        = $this->input->post('number');
		$m_role          = $this->input->post('role');
		$m_status        = $this->input->post('status');
		$m_city          = $this->input->post('city');
		$m_country       = $this->input->post('country');
		$m_streetaddress = $this->input->post('street_address');
		$m_month         = $this->input->post('country');
		$m_year          = $this->input->post('city');
		$date = date('d-m-y');
		$insert_array = array(
		'm_name'         => $m_name,
		'm_number'       => $m_number,
		'm_role'         => $m_role,
		'm_status'       => $m_status,
		'm_city'         => $m_city,
		'm_country'      => $m_country,
		'm_streetaddress'=> $m_streetaddress,
		'm_month'        => $m_month,
		'm_year'         => $m_year,
		'date_added'     => $date
		);
		$this->db->where('m_id',$id);
		$insert_into_table = $this->db->update('member',$insert_array);	
		if($insert_into_table == '1')
		{
			redirect('member/memberview');
		}
		else 
		{
			return 0;
		}
		
	}
	public function deletemember($id)
	{
		$this->db->where('m_id',$id);
		$this->db->delete('member');
		redirect('member/memberview');
	}
	
	function get_branch_data()
	{
		$query = $this->db->get('branch');
		return $query->result();	
	}
}
	
	
