<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_help extends CI_Controller {

	//calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
		
		$n = time() + (60 * 60 * 24);
		$this->output->cache($n);		
	}
	
	function individuals() {
		
		$parent = $this->uri->segment(1);
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id, $parent);
		
		$this->load->view('site-header');
		$this->load->view('get_help/page-content-wrapper', $data);
		$this->load->view('get_help/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
	function loved_ones() {
		
		$parent = $this->uri->segment(1);
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id, $parent);
		
		$this->load->view('site-header');
		$this->load->view('get_help/page-content-wrapper', $data);
		$this->load->view('get_help/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
	function helpline() {
		
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id);
		
		$this->load->view('site-header');
		$this->load->view('get_help/page-content-wrapper', $data);
		$this->load->view('get_help/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
	function recovery_path() {
		
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id);
		
		$this->load->view('site-header');
		$this->load->view('get_help/page-content-wrapper', $data);
		$this->load->view('get_help/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
	function success_stories() {
		
		$id = $this->uri->segment(1);
		$data['vids'] = $this->crud_model->get_vid_by_page($id);
		$data['heading'] = 'Success Stories';
		
		$this->load->view('site-header');
		$this->load->view('get_help/vid-content-wrapper', $data);
		$this->load->view('get_help/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
}