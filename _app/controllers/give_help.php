<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Give_help extends CI_Controller {

	//calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');	
		
		$n = time() + (60 * 60 * 24);
		$this->output->cache($n);
	}
	
	function gambling_addiction() {
		
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id);
		
		$this->load->view('site-header');
		$this->load->view('give_help/page-content-wrapper', $data);
		$this->load->view('give_help/sidebar-nav');
		$this->load->view('site-footer');
	}
		
		//nested functions for - Gambling Addiction
		function gambler_types() {
			
			$data['heading'] = 'Action &amp; Escape Gamblers';
			
			$this->load->view('site-header');
			$this->load->view('give_help/gambler-types', $data);
			$this->load->view('give_help/sidebar-nav');
			$this->load->view('site-footer');
		}
		
		function diagnosing_addiction() {
			
			$data['heading'] = 'Diagnosing Addiction';
			
			$this->load->view('site-header');
			$this->load->view('give_help/diagnosing-addiction', $data);
			$this->load->view('give_help/sidebar-nav');
			$this->load->view('site-footer');
		}
	
		function stages() {
			
			$data['heading'] = 'Stages of Addiction';
			
			$this->load->view('site-header');
			$this->load->view('give_help/stages', $data);
			$this->load->view('give_help/sidebar-nav');
			$this->load->view('site-footer');
		}
		//end nested functions
	
	function responsible_gambling() {
		
		$data['heading'] = 'Responsible Gambling';
		
		$this->load->view('site-header');
		$this->load->view('give_help/responsible', $data);
		$this->load->view('give_help/sidebar-nav');
		$this->load->view('site-footer');
	}
		//nested function for responsible_gambling
		function exclusion() {
			
			$data['heading'] = 'Self Exclusion';
			
			$this->load->view('site-header');
			$this->load->view('give_help/self-exclusion', $data);
			$this->load->view('give_help/sidebar-nav');
			$this->load->view('site-footer');
		}
		
		function gold_standard() {
			
			$data['heading'] = 'Gaming Gold Standard';
			
			$this->load->view('site-header');
			$this->load->view('give_help/gold-standard', $data);
			$this->load->view('give_help/sidebar-nav');
			$this->load->view('site-footer');
		}
		//end nested function
	
	function programs() {
		
		$id = $this->uri->segment(2);
		$data['page'] = $this->crud_model->get_page_id($id);
		$data['progs'] = $this->crud_model->get_all_progs();
		
		$this->load->view('site-header');
		$this->load->view('give_help/program-content-wrapper', $data);
		$this->load->view('give_help/program-row', $data);
		$this->load->view('give_help/sidebar-nav');
		$this->load->view('site-footer');
	}
	
	function training() {
		
		$data['heading'] = 'Training Information';
		
		$this->load->view('site-header');
		$this->load->view('give_help/training', $data);
		$this->load->view('give_help/sidebar-nav');
		$this->load->view('site-footer');
	}
	
		//nested functions for Training Information
		function professionals() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('give_help/page-content-wrapper', $data);
			$this->load->view('give_help/sidebar-nav');
			$this->load->view('site-footer');
		}
		
		function educators() {
			
			$id = $this->uri->segment(2);
			$data['page'] = $this->crud_model->get_page_id($id);
			
			$this->load->view('site-header');
			$this->load->view('give_help/page-content-wrapper', $data);
			$this->load->view('give_help/sidebar-nav');
			$this->load->view('site-footer');
		}
		//end nested functions	
	
	function law_legal() {
		
		$data['heading'] = 'Legal Information';
		
		$this->load->view('site-header');
		$this->load->view('give_help/law-legal', $data);
		$this->load->view('give_help/sidebar-nav');
		$this->load->view('site-footer');
	}

	function rgppp() {
		
		$data['heading'] = 'RGPPP Information';
		
		$this->load->view('site-header');
		$this->load->view('give_help/rgppp', $data);
		$this->load->view('give_help/sidebar-nav');
		$this->load->view('site-footer');
	}
	
}