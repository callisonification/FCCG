<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Problem_gambling extends CI_Controller {

	//calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
		
		$n = time() + (60 * 60 * 24);
		$this->output->cache($n);
	}
		
	function affected() {
		
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id);
		
		$this->load->view('site-header');
		$this->load->view('problem_gambling/page-content-wrapper', $data);
		$this->load->view('problem_gambling/sidebar-nav');
		$this->load->view('site-footer');			
	}
		//nested functions for - Who's Affected?
		function individuals() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('problem_gambling/page-content-wrapper', $data);
			$this->load->view('problem_gambling/sidebar-nav');
			$this->load->view('forms/quizzes-modal');
			$this->load->view('site-footer');			
		}
		
		function loved_ones() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('problem_gambling/page-content-wrapper', $data);
			$this->load->view('problem_gambling/sidebar-nav');
			$this->load->view('forms/quizzes-modal');
			$this->load->view('site-footer');			
		}
		
		function youth() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('problem_gambling/page-content-wrapper', $data);
			$this->load->view('problem_gambling/sidebar-nav');
			$this->load->view('forms/quizzes-modal');
			$this->load->view('site-footer');			
		}
		
		function students() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('problem_gambling/page-content-wrapper', $data);
			$this->load->view('problem_gambling/sidebar-nav');
			$this->load->view('forms/quizzes-modal');
			$this->load->view('site-footer');			
		}
		
		function seniors() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('problem_gambling/page-content-wrapper', $data);
			$this->load->view('problem_gambling/sidebar-nav');
			$this->load->view('forms/quizzes-modal');
			$this->load->view('site-footer');			
		}
		
		function others() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('problem_gambling/page-content-wrapper', $data);
			$this->load->view('problem_gambling/sidebar-nav');
			$this->load->view('site-footer');			
		}
		//end nested functions
	
	function recovery() {
		
		$id = $this->uri->segment(1);
		$data['vids'] = $this->crud_model->get_vid_by_page($id);
		$data['heading'] = 'Recovery Stories';
		
		$this->load->view('site-header');
		$this->load->view('problem_gambling/vid-content-wrapper', $data);
		$this->load->view('problem_gambling/sidebar-nav');
		$this->load->view('site-footer');
	}
}