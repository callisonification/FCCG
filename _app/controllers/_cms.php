<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class _CMS extends CI_Controller {

	// calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('user_model');
	}
	
	function index() {
		
		if( $this->session->userdata('logged_in') != true )
		{
			redirect('_admin/');
			// if user is not logged in they are redirected back
			// to sign in page - no direct page access w/o login	
		}else{
			
			$this->news_updates();	
			// if user logged in correctly they are directed to the
			// cms landing page - direct page access granted to user
		}
		
	}// end index function for cms controller
	
	function news_updates() {
		
		// if there is flashdata (status reports) then create
		// data array for flashdata
		if( $this->session->flashdata('msg') )
		{
			$data['msg'] = $this->session->flashdata('msg');
			$data['type'] = $this->session->flashdata('type');			
		}
		
		// query db and grab all current news articles
		// sorted in asc order - stored in data array
		$data['news'] = $this->crud_model->read_all_news();
		$data['users'] = $this->user_model->get_all_users();
		
		$data['heading'] = 'News &amp; Updates';
				
		//load views and pass neccessary data where needed
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar-nav.php', $data);
		$this->load->view('admin/news-events.php', $data);
		$this->load->view('admin/footer.php');
		
	}// end news and updates page function
	
	function about_fccg() {
		
		// if there is flashdata (status reports) then create
		// data array for flashdata
		if( $this->session->flashdata('msg') )
		{
			$data['msg'] = $this->session->flashdata('msg');
			$data['type'] = $this->session->flashdata('type');			
		}
		
		//grab uri segment, used as search key
		//pull back all pages under that section
		//returned to content view
		$uri = $this->uri->segment(2);
		
		$data['pages'] = $this->crud_model->get_all_pages($uri);
		$data['users'] = $this->user_model->get_all_users();
		
		$data['heading'] = 'About FCCG';
		
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar-nav.php', $data);
		$this->load->view('admin/about-fccg.php', $data);
		$this->load->view('admin/footer.php');
		
	}// end about fccg page function
	
	function problem_gambling() {
		
		// if there is flashdata (status reports) then create
		// data array for flashdata
		if( $this->session->flashdata('msg') )
		{
			$data['msg'] = $this->session->flashdata('msg');
			$data['type'] = $this->session->flashdata('type');			
		}
		
		//grab uri segment, used as search key
		//pull back all pages under that section
		//returned to content view
		$uri = $this->uri->segment(2);
		
		$data['pages'] = $this->crud_model->get_all_pages($uri);
		$data['vids'] = $this->crud_model->get_all_vids($uri);
		$data['users'] = $this->user_model->get_all_users();
		
		$data['heading'] = 'About Problem Gambling';
		
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar-nav.php', $data);
		$this->load->view('admin/about-pg.php', $data);
		$this->load->view('admin/footer.php');
		
	}// end about prob gambling page function
	
	function get_help() {
		
		// if there is flashdata (status reports) then create
		// data array for flashdata
		if( $this->session->flashdata('msg') )
		{
			$data['msg'] = $this->session->flashdata('msg');
			$data['type'] = $this->session->flashdata('type');			
		}
		
		//grab uri segment, used as search key
		//pull back all pages under that section
		//returned to content view
		$uri = $this->uri->segment(2);
		
		$data['pages'] = $this->crud_model->get_all_pages($uri);
		$data['vids'] = $this->crud_model->get_all_vids($uri);
		$data['users'] = $this->user_model->get_all_users();
		
		$data['heading'] = 'Get Help';
		
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar-nav.php', $data);
		$this->load->view('admin/get-help.php', $data);
		$this->load->view('admin/footer.php');
		
	}// end get help page function
	
	function give_help() {
		
		// if there is flashdata (status reports) then create
		// data array for flashdata
		if( $this->session->flashdata('msg') )
		{
			$data['msg'] = $this->session->flashdata('msg');
			$data['type'] = $this->session->flashdata('type');			
		}
		
		//grab uri segment, used as search key
		//pull back all pages under that section
		//returned to content view
		$uri = $this->uri->segment(2);
		
		$data['pages'] = $this->crud_model->get_all_pages($uri);
		$data['progs'] = $this->crud_model->get_all_progs();
		$data['users'] = $this->user_model->get_all_users();
		
		$data['heading'] = 'Give Help';
		
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar-nav.php', $data);
		$this->load->view('admin/give-help.php', $data);
		$this->load->view('forms/new-prog-modal.php');
		$this->load->view('admin/footer.php');
		
	}// end give help page function
	
	function resources() {
		
		// if there is flashdata (status reports) then create
		// data array for flashdata
		if( $this->session->flashdata('msg') )
		{
			$data['msg'] = $this->session->flashdata('msg');
			$data['type'] = $this->session->flashdata('type');			
		}
		
		//grab uri segment, used as search key
		//pull back all pages under that section
		//returned to content view
		$uri = $this->uri->segment(2);
		
		$data['pages'] = $this->crud_model->get_all_pages($uri);
		$data['users'] = $this->user_model->get_all_users();
		$data['pubs'] = $this->crud_model->get_all_pubs();
		$data['vids'] = $this->crud_model->get_all_vids($uri);
		$data['toolkits'] = $this->crud_model->get_all_toolkits();
		$data['research'] = $this->crud_model->get_all_research();	
		
		$data['heading'] = 'Resources';
		
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar-nav.php', $data);
		$this->load->view('admin/resources.php', $data);
		$this->load->view('forms/resource-modals.php', $data);
		$this->load->view('admin/footer.php');
		
	}// end resources page fuction
	
	function help() {
		
		$data['heading'] = 'Help';
				
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar-nav.php', $data);
		$this->load->view('admin/help.php');
		$this->load->view('admin/footer.php');	
	}// end help page function
	
}// end cms controller