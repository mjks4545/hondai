<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assets extends CI_Controller {

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
    
	public function assets_home()
	{
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('assets/assets_home');
		$this->load->view('include/footer');
	}
	
	// ---------------------------------------------------------------------	
	
	public function assetsadd()
	{
		$this->load->view('include/header');
	    $this->load->view('include/sidebar');
		$this->load->view('assets/assetsadd');
		$this->load->view('include/footer');
	}
	public function assetsaddpro()
	{
		$data['result'] = $this->assets_m->assetsaddpro();
	}

	public function assetsview()
	{
		$data['result'] = $this->assets_m->assetsview();
		//print_r($data);die();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('assets/assets_view',$data);
		$this->load->view('include/footer');
	}
	public function assets_update(){
		$assets_id = $this->uri->segment(3);
		$data['result'] = $this->assets_m->assets_update($assets_id);
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('assets/assets_update',$data);
		$this->load->view('include/footer');
	}
	public function assets_updatepro($id){
        $ass_id = $this->uri->segment(3);
		$result = $this->assets_m->assets_updatepro($ass_id);
	}
	// ---------------------------------------------------------------------	
	// ---------------------------------------------------------------------	

}
	