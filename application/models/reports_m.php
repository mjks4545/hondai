<?php

class Reports_m extends CI_Model{
	   
   public function reportspro(){


        $first_date = $this->input->post('from_date');
        $second_date = $this->input->post('to_date');
//        $this->db->where('c_dateadded >=', $first_date);
//        $this->db->where('c_dateadded <=', $second_date);
//        $this->db->get('cash');
        $query = $this->db->query("SELECT cash.c_amount,branch.b_name ,cash.s_b_id sender_id , cash.r_b_id receiver_id FROM cash JOIN branch ON cash.r_b_id=branch.b_id WHERE cash.c_dateadded >='$first_date' AND cash.c_dateadded <='$second_date'");
//        $this->db->join('branch','cash.s_b_id=branch.b_id');
        $this->db->select('b_name,c_amount,c_transaction, s_b_id, r_b_id, c_dateadded');
        $this->db->where('c_dateadded >=', $first_date);
        $this->db->where('c_dateadded <=', $second_date);
        $this->db->from('cash');
        $this->db->join('branch', 'branch.b_id = cash.s_b_id');
        $query = $this->db->get();
        $result = $query->result_array();
        
//        $i = 0;
//	   foreach( $result as $cash ){
//		   
//		   $this->db->where( 'b_id',$cash['s_b_id']);
//		   $query = $this->db->get('branch');
//		   $array['sender'] = $query->result_array();
//
//		   $this->db->where( 'b_id',$cash['r_b_id'] );
//		   $query = $this->db->get('branch');
//		   $array['receiver'] = $query->result_array();
//		   $i++;
//		   
//	   }
          for($i=0;$i<count($result);$i++)
          {
                   $this->db->where('b_id',$result[$i]['s_b_id']);
		   $query = $this->db->get('branch');
		   $array['sender'][$i] = $query->result_array();
                   $this->db->where( 'b_id',$result[$i]['r_b_id']);
		   $query = $this->db->get('branch');
		   $array['receiver'][$i] = $query->result_array();
          }
        $overall['result'] = $result;
        $overall['sendandreceiver'] =$array;
        return $overall;
        
        //return $result;

}
//--//daily reports----------------////
public function daily_reports(){
        $first_date = $this->input->post('from_date');
        $this->db->select('b_id,c_id,b_name,c_amount,c_transaction, s_b_id, r_b_id, c_dateadded');
        $this->db->where('cash.c_dateadded =', $first_date);
        $this->db->or_where('cash.c_dateupdated =',$first_date);
        $this->db->from('cash');
        $this->db->join('branch', 'branch.b_id = cash.s_b_id');
        $query = $this->db->get();
        $num_rows = $query->num_rows();
        if($num_rows>0){
        $result = $query->result_array();
        // echo '<pre>';print_r($result);die;
        for($i=0;$i<count($result);$i++)
      {
        // echo $result[$i]['s_b_id'];
       $this->db->where('b_id',$result[$i]['s_b_id']);
		   $query = $this->db->get('branch');
		   $array['sender'][$i] = $query->result_array();
       
       $this->db->where( 'b_id',$result[$i]['r_b_id']);
		   $query = $this->db->get('branch');
		   $array['receiver'][$i] = $query->result_array();
      }
        $overall['result'] = $result;
        $overall['sendandreceiver'] = $array;
        return $overall;
        }
 else {
     
 }
    }

    public function assets_report(){
      //$this->db->select('*');
      $this->db->select('asset_amount, SUM(asset_amount) As sum', FALSE);
      ///$this->db->group_by("asset_amount");
      $this->db->from('assets');
      $query =  $this->db->get();
      $result['assets'] = $query->result();


      $this->db->select('c_transaction, SUM(c_transaction) As sum' , FALSE);
      $this->db->where('c_transaction', 1);
      $qry =  $this->db->get('cash');
      $result['credit'] = $qry->result();

      $this->db->select('c_transaction, SUM(c_transaction) As sum', FALSE);
      $this->db->where('c_transaction', 0 );
      $qry =  $this->db->get('cash');
      $result['debit'] = $qry->result();

      //echo '<pre>';
      //print_r($result);die();
      return $result;



    }

}
	
	
