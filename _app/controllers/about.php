<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	//calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
		
		$n = time() + (60 * 60 * 24);
		$this->output->cache($n);
	}
		
	function history() {
		
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id);
		
		$this->load->view('site-header');
		$this->load->view('about/page-content-wrapper', $data);
		$this->load->view('about/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
	function membership() {
		
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id);
		
		$this->load->view('site-header');
		$this->load->view('about/page-content-wrapper', $data);
		$this->load->view('about/sidebar-nav');
		$this->load->view('forms/membership-form');
		$this->load->view('site-footer');			
	}
	
}