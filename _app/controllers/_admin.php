<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class _Admin extends CI_Controller {

	function __construct() {
		
		parent::__construct();	
		$this->load->model('user_model');
		
	} // end constructor function
	
	function index() {
		
		if( $this->session->userdata('logged_in') == true )
		{
			$this->cms_access(true);	
		}
		else
		{
			$err = $this->session->flashdata('err');
			
			if($err)
			{
				$data = array('error' => $err);
				$this->load->view('admin/login', $data);
			}
			else
			{
				$this->load->view('admin/login');
			}
		}
	
	}// end index function
	
	function cms_access($signed_in = false) {
	
		if( $signed_in == true || $this->session->userdata('logged_in') == true )
		{
			redirect('_cms/');	
		}
		else
		{
			$this->session->set_flashdata('err', 'Incorrect login, Please try again...');
			redirect('_admin/');
		}
		
	}// end cms function
	
	// login function for cms - checks login status and passed to
	// cms_access function
	function login() {
		
		$result = $this->user_model->login();
		$this->cms_access($result);
		
	}// end login function
	
	// logout function - destroys session and redirects
	function logout() {
		
		$this->user_model->logout();
		redirect('_admin/');	
		
	}// end logout function
	
	
}// end _admin controller