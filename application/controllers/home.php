<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	    $result['data'] = $this->branch_m->branchview();
	    $this->load->view('include/header_login');
	    $this->load->view('login',$result);
	    $this->load->view('include/footer_login');
	}
	public function loginpro(){
		$result = $this->home_m->loginpro();
		//$msg = $this->session->userdata('session_mad');
		//echo $msg['email'];
		if($result == 1){
			redirect('home/home_view');
		}
		//else{
			redirect('home/home_view');
		//}//
		
	}
	public function home_view(){
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('home/home_view');
		$this->load->view('include/footer');
	}
	public function search_nic(){
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('search_nic/search_nic');
		$this->load->view('include/footer');
	}
	public function Add_customer(){
		$data['branch'] = $this->home_m->get_branches();
		// echo '<pre>';print_r($data);die();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('customer/customeradd',$data);
		$this->load->view('include/footer');
	}
        public function  logout(){
            session_destroy();
        }
}
