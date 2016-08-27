<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function reports_home(){
    $this->load->view('include/header');
    $this->load->view('include/sidebar');
    $this->load->view('reports/reports_home');
    $this->load->view('include/footer');	
}
     public function reports_view(){
	//$result = $this->reports_m->reports_view();
	$this->load->view('include/header');
	$this->load->view('include/sidebar');
	$this->load->view('reports/reports_view');
	$this->load->view('include/footer');



}
public function reports_monthly_pro(){
	$data['result'] = $this->reports_m->reportspro();
        
        $this->load->view('include/header');
	$this->load->view('include/sidebar');
	$this->load->view('reports/reports_display',$data);
	$this->load->view('include/footer');
}
public function reports_daily_pro(){
        $data['result'] = $this->reports_m->daily_reports();
        // echo '<pre>';print_r($data);die;
        $this->load->view('include/header');
	      $this->load->view('include/sidebar');
	      $this->load->view('reports/reports_display',$data);
	      $this->load->view('include/footer');
}
public  function reports_monthly(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/report_monthly');
        $this->load->view('include/footer');
    }
public function  reports_daily(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/report_daily');
        $this->load->view('include/footer');   
}

public function reports_display(){
    $this->load->view('include/header');
	$this->load->view('include/sidebar');
	$this->load->view('reports/reports_display');
	$this->load->view('include/footer');
}
public function assets_report(){
   $data = $this->reports_m->assets_report();
   // echo '<pre>'; print_r($data);die();
   $this->load->view('include/header');
   $this->load->view('include/sidebar');
   $this->load->view('reports/assets_report',$data);
   $this->load->view('include/footer');
}



}
	