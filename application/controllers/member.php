<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
		$this->load->view('member/member_home');
		$this->load->view('include/footer');
	}
	
	
	public function memberadd()
	{
		$result['data'] = $this->member_m->get_branch_data();
		// echo '<pre>';print_r($result);die;
		$this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('member/memberadd', $result);
		$this->load->view('include/footer');
	}
	public function memberaddpro(){
		$result = $this->member_m->memberaddpro();
		if($result == 1){
			redirect('member/memberadd');
		}
		else{
			redirect('member/memberview');
		}
	}
	public function memberview(){
		$data['result'] = $this->member_m->memberview();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('member/memberview',$data);
		$this->load->view('include/footer');
	}
	public function memberupdate($id){
		$id = $this->uri->segment(3);
		$data['result'] = $this->member_m->memberupdate($id);
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('member/updatemember',$data);
		$this->load->view('include/footer');
		
	}
	public function updatememberpro(){
		$mem_id = $this->uri->segment(3);
		$result = $this->member_m->memberupdatepro($mem_id);
		
	}
	public function deletemember($id){
		$del_id = $this->uri->segment(3);
		$result = $this->member_m->deletemember($del_id);
		
	}
}
	