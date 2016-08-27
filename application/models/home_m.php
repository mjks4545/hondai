<?php

class Home_m extends CI_Model{
	public function loginpro(){
		$user_name = $this->input->post('user_name');
		$password  = $this->input->post('password');
		$role      = $this->input->post('role');
		$branch  = $this->input->post('branch');
		$this->db->select('*');
		$this->db->where('user_name',$user_name);
		$this->db->where('m_number',$password);
		$this->db->where('b_id',$branch);
		
		
		
		if($role == 'member'){	   
		    $query = $this->db->get('member');
		}
		
			  $num = $query->num_rows();
			if ($num > 0){
				$result = $query->result();
				if(empty($result)){
					return 0;
					
				}
				else{
					//echo '<pre>';
					//print_r( $result );
					//die;
					$user_name = $this->input->post('user_name');
					$session_array = array(
					'email'=>$user_name,
					'm_id'=>$result[0]->m_id,
					);
					
					$this->session->set_userdata('session_data',$session_array);
					return '1';
				}
			redirect('home/home_view');
			}
			else {
				redirect('home/');
			}
}

 public function search_nicpro(){
	   
	 $id = $this->input->post('number');
	 $this->db->where('cu_number', $id);
	 $query = $this->db->get('customer');	 
	 $result['customer'] = $query->result();
	 $query = $this->db->get('branch');	 
	 $result['branch'] = $query->result();
	// echo 
	// '<pre>';
	// print_r($result);die();
	 return $result;
	 
 }

 public function get_branches()
 	{
 		return $res = $this->db->get('branch')->result();
 	}



}
	
	
