<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FCCG extends CI_Controller {

	//calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
	}
	
	//index function - loads landing page 
	function index() {
		
		$data['news'] = $this->crud_model->get_news_feed();
		
		$this->load->view('site-header');
		$this->load->view('landing/help-subnav');
		$this->load->view('landing/news-feed', $data);
		$this->load->view('landing/landing-aside');
		$this->load->view('forms/quizzes-modal');
		$this->load->view('site-footer');
	}
	
	function search() {
		
		$term = $this->db->escape($_POST['search']);
		$data['heading'] = $term;
		
		$data['results'] = $this->crud_model->search_db($term);
		
		$this->load->view('site-header');
		$this->load->view('fccg/search-results', $data);
		$this->load->view('fccg/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
	function archive() {
		
		$data['heading'] = 'News Archive';
		$data['news'] = $this->crud_model->read_all_news();
		
		$this->load->view('site-header');
		$this->load->view('fccg/archive-content-wrapper', $data);
		$this->load->view('fccg/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
	function read_news() {
		
		$id = $this->uri->segment(3);
		$data['news'] = $this->crud_model->get_news_id($id);
		
		$this->load->view('site-header');
		$this->load->view('fccg/page-content-wrapper', $data);
		$this->load->view('fccg/sidebar-nav');
		$this->load->view('site-footer');			
	}
	
}
