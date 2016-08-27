<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balancesheet extends CI_Controller {
    
    
    //--//--------------default--------------//--//
    
    public function index(){
                $this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('balancesheet/balancesheet_view');
		$this->load->view('include/footer');
    }
    
    //--//-----------balance sheet record checking and insertion-------------//--//
    
    public function brecordcheck(){
        $this->load->model('ballancesheet_m');
        $data=$this->ballancesheet_m->balance_pro();
            if($data==1)
            {
                $msg['msg']="<div class='alert-success' style='text-align: center;'><h3>Amount has been successfully paid</h3></div>";
            }
            if ($data==0) {
             $msg['msg']="<div class='alert-danger' style='text-align: center;'><h3>Sorry Record Not Found</h3></div>";

            }
        $this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('balancesheet/balancesheet_view',$msg);
		$this->load->view('include/footer');
        
    }
    
}
?>
<?php

/* licence to hanif jadoon 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

