<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('branch/branch_home');
		$this->load->view('include/footer');
	}
	
	// ---------------------------------------------------------------------	
	
	public function branchadd()
	{
		$this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('branch/branchadd');
		$this->load->view('include/footer');
	}
	
	// ---------------------------------------------------------------------	

	public function branchaddpro(){
	    
	    $result = $this->branch_m->branchaddpro();
	    
	}
	
	// ---------------------------------------------------------------------	

	public function branchview(){
		$data['result'] = $this->branch_m->branchview();
		// echo '<pre>';print_r($data);die;
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('branch/branchview',$data);
		$this->load->view('include/footer');
	}
	
	// ---------------------------------------------------------------------	

	public function branchupdate($id){
		$b_id = $this->uri->segment(3);
		$data['result'] = $this->branch_m->branchupdate($b_id);
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('branch/branchupdate',$data);
		$this->load->view('include/footer');
	}
	
	// ---------------------------------------------------------------------	

	public function branchupdatepro(){
		$b_id = $this->uri->segment(3);
		$result = $this->branch_m->branchupdatepro($b_id);
	}
	
	// ---------------------------------------------------------------------	

	public function branchdelete(){
		$b_id   = $this->uri->segment(3);
		$result = $this->branch_m->branchdelete($b_id);
 	}
	
	// ---------------------------------------------------------------------	

}
	