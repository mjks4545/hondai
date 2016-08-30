<?php

class Customer_m extends CI_Model{
	
	public function customeraddpro(){
		
//--------------------session id get and store in table------------------------------//---
		$ssss = $this->session->userdata('session_data');
		// echo '<pre>';print_r($ssss);die;
//-----------------------------------------------------------------------------------//---
	    $sender_name            = $this->input->post('s_name');
		$reciever_name          = $this->input->post('r_name');
		$sender_branch          = $this->input->post('s_branch');
		$receiver_branch        = $this->input->post('r_branch');
		$number                 = $this->input->post('number');
		$sender_city            = $this->input->post('s_city');
		$reciever_city          = $this->input->post('r_city');
		$sender_country         = $this->input->post('s_country');
		$reciever_country       = $this->input->post('r_country');
		$sender_streetaddress   = $this->input->post('s_streetaddress');
		$reciever_streetaddress = $this->input->post('r_streetaddress');
		$amount                 = $this->input->post('amount');
		$commission             = $this->input->post('commission');
		$c_symbol               = $this->input->post('c_symbol');
		$c_rate                 = $this->input->post('c_rate');
		$notes                  = $this->input->post('c_notes');
        $transaction            = $this->input->post('c_transaction');
        $c_code                 = $this->input->post('c_h_no');
		$date                   = date('Y-m-d');
		$year                   = date('Y');
		$month                  = date('M');
		//--------------------------------------------------------//
		$this->db->select('asset_amount,asset_id');
		$total_amount = $this->db->get('assets')->result();
		$t_amount = $total_amount[0]->asset_amount;
		$asset_id = $total_amount[0]->asset_id;

// --------------------- GET TOTAL AMOUNT --------------------------------//		
		// echo $transaction.'<br>';
		if($transaction == 1)
		{
			$t_c_amount = $amount+$t_amount+$commission;
			$asset_data = array(
					'asset_amount'=>$t_c_amount
				);
			$this->db->where('asset_id',$asset_id);
			$this->db->update('assets',$asset_data);				
		}
		else
		{
			$t_d_amount = $t_amount-$amount+$commission;
			$asset_data = array(
					'asset_amount'=>$t_d_amount
				);
			$this->db->where('asset_id',$asset_id);
			$this->db->update('assets',$asset_data);
		}
		
// ----------------------- INSERT SENDER DATA --------------------------- // 
		$sender_array = array(
			'cu_name'              => $sender_name,
			'cu_number'            => $number,
			'cu_role'              => 1,
			'cu_status'            => 1,
			'cu_city'              => $sender_city,
			'cu_country'           => $sender_country,
	        'cu_street_adress'     => $sender_streetaddress,
			'cu_dateadded'         => $date,
			'cu_year'              => $year,
			'cu_month'             => $month, 
			'c_type'               => 'S'
		);
		// echo '<pre>';print_r($sender_array);
		$insert_record = $this->db->insert('customer',$sender_array);
		$sender_id = $this->db->insert_id();

// -------------------------- SEND RECEIVER DATA ------------------------//
		$reciever_array = array(
			'cu_name'             => $reciever_name,
			'cu_number'           => $number,
			'cu_role'             => 1,
			'cu_status'           => 1,
			'cu_city'             => $reciever_city,
			'cu_country'          => $reciever_country,
	        'cu_street_adress'    => $reciever_streetaddress,
			'cu_dateadded'        => $date,
			'c_type'              => 'R',
			'cu_year'             => $year,
			'cu_month'            => $month
		);
		// echo '<pre>';print_r($reciever_array);
		$insert_record = $this->db->insert('customer',$reciever_array);
		$reciever_id = $this->db->insert_id();
		
		$cash_array = array(
	        'c_amount'     => $amount,
			'c_feecharges' => $commission,
			'm_id'         => $ssss['m_id'],
			'cu_id'        => $sender_id,
	        'r_id'         => $reciever_id,
			's_b_id'       => $sender_branch,
			'r_b_id'       => $receiver_branch,
			'c_dateadded'  => $date,
			'c_status'     => 1,
			'c_notes'      => $notes,
			'c_symbol'     => $c_symbol,
			'c_rate'       => $c_rate,
			'c_code'       => $c_code,
			'c_year'       => $year,
			'c_month'      => $month, 
	        'c_transaction'=> $transaction,
		);
		// echo '<pre>';print_r($cash_array);die;
		$insert_cash = $this->db->insert('cash',$cash_array);
		
	}
//-----------------------------------------------------------------------------------//
    public function customer_branch(){
	   $query = $this->db->get('branch');
	   $result = $query->result();
	   return $result;
   }
   
   public function customerpro($id){
	   //$this->db->select('*');
	   $this->db->from('cash');
   	   $this->db->where('s_b_id',$id);
   	   $this->db->or_where('r_b_id',$id);
   	   // $this->db->join('customer','customer.cu_id = cash.cu_id');
	   $query = $this->db->get();
	   $result = $query->result();
	   
	   $i = 0;
	   $array = [];
	   foreach( $result as $cash ){
		   
		   $this->db->where( 'cu_id',$cash->cu_id );
		   $query = $this->db->get('customer');
		   $array[$i]['sender'] = $query->result();

		   $this->db->where( 'cu_id',$cash->r_id );
		   $query = $this->db->get('customer');
		   $array[$i]['receiver'] = $query->result();
		   
		   $this->db->where( 'm_id',$cash->m_id );
		   $query = $this->db->get('member');
		   $array[$i]['member'] = $query->result();
		   
		   $this->db->where( 'b_id',$cash->s_b_id );
		   $this->db->or_where( 'b_id',$cash->r_b_id );
		   $query = $this->db->get('branch');
		   $array[$i]['branch'] = $query->result();
		   $array[$i]['cash']  = $result;
		   $i++;
		   
	   }
	   return $array;
	   
	   
	   
   }
   public function customer_search(){
  	$code = $this->input->post('c_code');
  	$this->db->where('c_code',$code);
  	$qry = $this->db->get('cash');
  	$result = $qry->result();
  	//print_r($result);die();
  	//return $result;
  	$i = 0;
	   $array = [];
	   foreach( $result as $cash ){
		   
		   $this->db->where( 'cu_id',$cash->cu_id );
		   $query = $this->db->get('customer');
		   $array[$i]['sender'] = $query->result();

		   $this->db->where( 'cu_id',$cash->r_id );
		   $query = $this->db->get('customer');
		   $array[$i]['receiver'] = $query->result();
		   
		   $this->db->where( 'm_id',$cash->m_id );
		   $query = $this->db->get('member');
		   $array[$i]['member'] = $query->result();
		   
		   $this->db->where( 'b_id',$cash->s_b_id );
		   $this->db->or_where( 'b_id',$cash->r_b_id );
		   $query = $this->db->get('branch');
		   $array[$i]['branch'] = $query->result();
		   $array[$i]['cash']  = $result;
		   $i++;
		   
	   }
	   return $array;

   }
   public function customerview($id){
  	//$code = $this->input->post('c_code');
  	$this->db->where('c_id',$id);
  	$qry = $this->db->get('cash');
  	$result = $qry->result();
  	// echo '<pre>';print_r($result);die();
  	//return $result;
  	$i = 0;
	   $array = [];
	   foreach( $result as $cash ){
		   
		   $this->db->where( 'cu_id',$cash->cu_id );
		   $query = $this->db->get('customer');
		   $array[$i]['sender'] = $query->result();

		   $this->db->where( 'cu_id',$cash->r_id );
		   $query = $this->db->get('customer');
		   $array[$i]['receiver'] = $query->result();
		   
		   $this->db->where( 'm_id',$cash->m_id );
		   $query = $this->db->get('member');
		   $array[$i]['member'] = $query->result();
		   
		   $this->db->where( 'b_id',$cash->s_b_id );
		   $this->db->or_where( 'b_id',$cash->r_b_id );
		   $query = $this->db->get('branch');
		   $array[$i]['branch'] = $query->result();
		   $array[$i]['cash']  = $result;
		   $i++;
		   
	   }

	   return $array;

   }
  
 public function get_branches()
 	{
 		return $res = $this->db->get('branch')->result();
 	}

  
}
	
	
