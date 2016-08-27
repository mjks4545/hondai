<?php

class Assets_m extends CI_Model{
	    

	    public function assetsaddpro(){
	    	$asset_amount = $this->input->post('asset_amount');
	    	$date         = date('d-m-y');
	    	$insert_asset =  array(
	    		'asset_amount'     => $asset_amount,
	    		'asset_dateadded'  => $date,
	    		 );
	    	
	    	$insert_asset_table = $this->db->insert('assets',$insert_asset);

	    }
	    public function assetsview(){
	    	$this->db->select('*');
	    	$this->db->from('assets');
	    	$query = $this->db->get();
	    	$result = $query->result_array();
	    	//print_r($result);die();
	    	return $result;

	    }
	    public function assets_update($id){
	    	$this->db->select('*');
	    	$this->db->from('assets');
	    	$this->db->where('asset_id',$id);
	    	$query = $this->db->get();
	    	$result = $query->result_array();
	    	//print_r($result);die();
	    	return $result;
	    }
	    public function assets_updatepro($id){
	    	$asset_amount = $this->input->post('asset_amount');
	    	$insert_asset =  array(
	    		'asset_amount'     => $asset_amount,
	    		 );
	    	$this->db->where('asset_id',$id);
	    	$insert_asset_table = $this->db->update('assets',$insert_asset);
	    	redirect('assets/assetsview');
	    }
}
	
	
