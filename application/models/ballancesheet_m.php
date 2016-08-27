<?php
class Ballancesheet_m extends CI_Model{
    
    
    //--//--------------------------updation---//--/////
    
    
    public function balance_pro(){
        $h_no =$this->input->post('h_no');
        $amount = $this->input->post('amount');
        $this->db->select('*');
        $this->db->where('c_code =', $h_no);
        $this->db->where('c_amount =', $amount);
        $this->db->from('cash');
        $query = $this->db->get();
        $num_rows = $query->num_rows();
        if($num_rows>0)
        {
            $data = array(
                'c_status' => 0
            );

            $this->db->where('c_code', $h_no);
            $this->db->where('c_amount', $amount);
            $this->db->update('cash', $data);
            return 1;
        }
 else {
     return 0;
 }
    }
}
?>
<?php

/* licence to hanif jadoon
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

