<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources extends CI_Controller {

	//calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
	}
	
	function publications() {
		
		$data['pubs'] = $this->crud_model->get_all_pubs();
		$data['heading'] = 'Print Materials';
		
		$this->load->view('site-header');
		$this->load->view('resources/publications', $data);
		$this->load->view('resources/sidebar-nav');
		$this->load->view('site-footer');
	}
	
	function videos() {
		
		$id = $this->uri->segment(1);
		$data['vids'] = $this->crud_model->get_all_vids($id);
		$data['heading'] = 'Videos';
		
		$this->load->view('site-header');
		$this->load->view('resources/videos', $data);
		$this->load->view('resources/sidebar-nav');
		$this->load->view('site-footer');	
	}
	
	function toolkits() {
		
		$data['toolkits'] = $this->crud_model->get_all_toolkits();
		$data['heading'] = 'Toolkits';
		
		$this->load->view('site-header');
		$this->load->view('resources/toolkits', $data);
		$this->load->view('resources/toolkit-row', $data);
		$this->load->view('resources/sidebar-nav');
		$this->load->view('site-footer');
	}
	
	function research() {
		
		$data['research'] = $this->crud_model->get_all_research();
		$data['heading'] = 'Research Materials';
		
		$this->load->view('site-header');
		$this->load->view('resources/research', $data);
		$this->load->view('resources/sidebar-nav');
		$this->load->view('site-footer');
	}
	
	function faq() {
		
		$data['heading'] = 'Frequently Asked Questions';
		
		$this->load->view('site-header');
		$this->load->view('resources/faq', $data);
		$this->load->view('resources/sidebar-nav');
		$this->load->view('site-footer');	
	}	
	
}