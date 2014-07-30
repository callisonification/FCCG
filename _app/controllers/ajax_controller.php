<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Controller extends CI_Controller {
	
	// calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('email_model');
	}
	
	/*
	*
	* Get news article by id for editing/deleting 
	* functions return to _cms
	*
	*/
	
	function get_news_id() {
		
		$id = $_POST['id'];
		$data = $this->crud_model->get_news_id($id);
		$output = json_encode($data[0]);
				
		echo $output;
	}
	
	/*
	*
	* Get video by id for editing/deleting 
	* functions return to _cms
	*
	*/
	
	function get_vid_id() {
		
		$id = $_POST['id'];
		$data = $this->crud_model->get_vid_id($id);
		$output = json_encode($data[0]);
				
		echo $output;
	}
	
	/*
	*
	* Get program by id for editing/deleting 
	* functions return to _cms
	*
	*/
	
	function get_prog_id() {
		
		$id = $_POST['id'];
		$data = $this->crud_model->get_prog_id($id);
		$output = json_encode($data[0]);
				
		echo $output;
	}
	
	/*
	*
	* Get publication by id for editing/deleting 
	* functions return to _cms
	*
	*/
	
	function get_pub_id() {
		
		$id = $_POST['id'];
		$data = $this->crud_model->get_pub_id($id);
		$output = json_encode($data[0]);
				
		echo $output;
	}
	
	/*
	*
	* Get toolkit by id for editing/deleting 
	* functions return to _cms
	*
	*/
	
	function get_kit_id() {
		
		$id = $_POST['id'];
		$data = $this->crud_model->get_kit_id($id);
		$output = json_encode($data[0]);
				
		echo $output;
	}
	
	/*
	*
	* Get research by id for editing/deleting 
	* functions return to _cms
	*
	*/
	
	function get_research_id() {
		
		$id = $_POST['id'];
		$data = $this->crud_model->get_research_id($id);
		$output = json_encode($data[0]);
				
		echo $output;
	}
	
	/*
	*
	* quick message email function
	*
	*/
	
	function send_quick_mssg() {
		
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mssg = $this->input->post('mssg');
		
		$data = array('name' => $name, 'email' => $email, 'mssg' => $mssg);
		
		$this->email_model->quick_mssg($data);
	}
	
	/*
	*
	* default message email function
	*
	*/
	
	function send_mssg() {
				
		$name = $this->input->post('name');
		$org = $this->input->post('org');
		$addy1 = $this->input->post('addy1');
		$addy2 = $this->input->post('addy2');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$mssg = $this->input->post('mssg');
		
		$data = array('name' => $name, 'org' => $org, 'addy1' => $addy1, 'addy2' => $addy2, 'city' => $city, 'state' => $state, 'zip' => $zip, 'email' => $email, 'phone' => $phone, 'mssg' => $mssg);
		
		$this->email_model->default_mssg($data);
	}
	
	/*
	*
	* program request email function
	*
	*/
	
	function req_prog() {
				
		$name = $this->input->post('name');
		$addy1 = $this->input->post('addy1');
		$addy2 = $this->input->post('addy2');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$prog = $this->input->post('prog');
		
		$data = array('name' => $name, 'addy1' => $addy1, 'addy2' => $addy2, 'city' => $city, 'state' => $state, 'zip' => $zip, 'email' => $email, 'phone' => $phone, 'prog' => $prog);
				
		$this->email_model->req_prog($data);
	}
	
	/*
	*
	* membership request email function
	*
	*/
	
	function membership_req() {
				
		$name = $this->input->post('name');
		$title = $this->input->post('title');
		$org = $this->input->post('org');
		$addy1 = $this->input->post('addy1');
		$addy2 = $this->input->post('addy2');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$mType = $this->input->post('mType');
		$aType = $this->input->post('aType');
		$vol = $this->input->post('vol');
		
		$data = array('name' => $name, 'title' => $title, 'org' => $org, 'addy1' => $addy1, 'addy2' => $addy2, 'city' => $city, 'state' => $state, 'zip' => $zip, 'email' => $email, 'phone' => $phone, 'mType' => $mType, 'aType' => $aType, 'vol' => $vol);
				
		$this->email_model->member_req($data);
	}
	
	/*
	*
	* RGPPP request email function
	*
	*/
	
	function rgppp_req() {
				
		$name = $this->input->post('name');
		$pos = $this->input->post('pos');
		$fac = $this->input->post('fac');
		$facMan = $this->input->post('facMan');
		$addy1 = $this->input->post('addy1');
		$addy2 = $this->input->post('addy2');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$email = $this->input->post('email');
		$comm = $this->input->post('comm');
		
		$data = array('name' => $name, 'pos' => $pos, 'fac' => $fac, 'facMan' => $facMan, 'addy1' => $addy1, 'addy2' => $addy2, 'city' => $city, 'state' => $state, 'zip' => $zip, 'email' => $email, 'comm' => $comm);
				
		$this->email_model->rgppp_req($data);
	}
	
	//end ajax controller
	
}