<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$this->load->view('customer/customer_home');
		$this->load->view('include/footer');
	}
	public function customeradd()
	{
		$data['result'] = $this->customer_m->customer_branch();
		$this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('customer/customeradd',$data);
		$this->load->view('include/footer');
	}

	function customer_addpro()
	{
		$b_id = $this->uri->segment(3);
		$result = $this->customer_m->customeraddpro();
		redirect('customer/customer_view/'.$b_id);
	}


	public function customeraddpro()
	{
		// $result = $this->customer_m->customeraddpro();
        // echo '<pre>';print_r($result);die;		
        $id = $this->input->post('s_branch');
        $data['result'] = $this->customer_m->customerpro($id);
        // echo '<pre>';print_r($data);die;
		$this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('customer/customer_view',$data);
		$this->load->view('include/footer');
	}

	public function customer_view()
	{
		$id = $this->uri->segment(3);
		$data['result'] = $this->customer_m->customerpro($id);
		// echo '<Pre>';print_r($data);die; 
		$this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('customer/customer_view',$data);
		$this->load->view('include/footer');
	}
	public function customer_search()
	{
		$data['result'] = $this->customer_m->customer_search();
		$this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('customer/customer_search',$data);
		$this->load->view('include/footer');
	}
	public function customerview($id){
	    $id = $this->uri->segment(3);
	    $data['result'] = $this->customer_m->customerview($id);
	    // echo '<pre>';print_r($data);die();
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('customer/customerview',$data);
		$this->load->view('include/footer');
	}
        public  function make_new_customer(){
            $result['result'] = $this->branch_m->branchview();
            // echo "<pre>";print_r($result);die;	
            $data['branch'] = $this->customer_m->get_branches();
            // echo '<pre>';print_r($data);die;
            $this->load->view('include/header');
		    $this->load->view('include/sidebar');
			$this->load->view('customer/make_new_customer',$data);
			$this->load->view('include/footer');
        }
        
	public function logout(){
            session_destroy();
        }


}
	