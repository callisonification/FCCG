<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_CRUD extends CI_Controller {
	
	// calls the parents construct function when initialized
	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('user_model');
	}
	
	/*
	*
	* CRUD functions for news and updates 
	* functions return to _cms
	*
	*/
	
	// adds news and updates post to the db
	function add_post() {
		
		if(isset($_FILES))
		{
			//create vars from $_POST data
			$img = $_FILES['post_photo'];
			$title = $this->input->post('post_title');
			$body = htmlentities($_POST['post_body']);
			$author = $this->input->post('post_author');
			
			//store post data in array
			$post = array('img' => $img, 'title' => $title, 'body' => $body, 'author' => $author);
		}
		else
		{
			//create vars from $_POST data
			$title = $this->input->post('post_title');
			$body = htmlentities($_POST['post_body']);
			$author = $this->input->post('post_author');
			
			//store post data in array
			$post = array('title' => $title, 'body' => $body, 'author' => $author);
		}
		
		//call model and pass post data to method
		$this->crud_model->create_newsPost($post);
			
	}
	
	// allows for editing of news and update post
	function edit_post() {
		if(isset($_FILES))
		{
			//create vars from $_POST data
			$id = $this->input->post('news_id');
			$img = $_FILES['post_photo'];
			$title = $this->input->post('post_title');
			$body = htmlentities($_POST['post_body']);
			$author = $this->input->post('post_author');
			
			//store post data in array
			$post = array('id' => $id, 'img' => $img, 'title' => $title, 'body' => $body, 'author' => $author);
		}
		else
		{
			//create vars from $_POST data
			$id = $this->input->post('news_id');			
			$title = $this->input->post('post_title');
			$body = htmlentities($_POST['post_body']);
			$author = $this->input->post('post_author');
			
			//store post data in array
			$post = array('id' => $id, 'title' => $title, 'body' => $body, 'author' => $author);
		}
		
		//call model and pass post data to method
		$this->crud_model->edit_newsPost($post);
	}
	
	// deletes news and updates post based on id passed
	function delete_post() {
		
		//grab the id of the post being deleted
		//call model and pass data to method		
		$id = $this->uri->segment(3);
		$this->crud_model->delete_newsPost($id);	
	}
	
	/*
	*
	* CRUD functions for programs
	* functions return to _cms
	*
	*/
	
	function add_program() {
		
		if(isset($_FILES))
		{
			//create vars from $_POST data
			$img = $_FILES['program_photo'];
			$title = $this->input->post('program_title');
			$body = htmlentities($_POST['program_body']);
			$author = $this->input->post('post_author');
			
			//store post data in array
			$post = array('img' => $img, 'title' => $title, 'body' => $body, 'author' => $author);
		}
		else
		{
			//create vars from $_POST data
			$title = $this->input->post('program_title');
			$body = htmlentities($_POST['program_body']);
			$author = $this->input->post('post_author');
			
			//store post data in array
			$post = array('title' => $title, 'body' => $body, 'author' => $author);
		}
		
		//call model and pass post data to method
		$this->crud_model->create_newProgram($post);
			
	}
	
	function edit_prog() {
		
		if(isset($_FILES))
		{
			//create vars from $_POST data
			$img = $_FILES['program_photo'];
			$title = $this->input->post('program_title');
			$body = htmlentities($_POST['program_body']);
			$author = $this->input->post('post_author');
			$id = $this->input->post('prog_id');
			
			//store post data in array
			$post = array('id' => $id, 'img' => $img, 'title' => $title, 'body' => $body, 'author' => $author);
		}
		else
		{
			//create vars from $_POST data
			$title = $this->input->post('program_title');
			$body = htmlentities($_POST['program_body']);
			$author = $this->input->post('post_author');
			$id = $this->input->post('prog_id');
			
			//store post data in array
			$post = array('id' => $id, 'title' => $title, 'body' => $body, 'author' => $author);
		}
		
		//call model and pass post data to method
		$this->crud_model->edit_program($post);
		
	}
	
	// deletes news and updates post based on id passed
	function delete_prog() {
		
		//grab the id of the post being deleted
		//call model and pass data to method		
		$id = $this->uri->segment(3);	
		$this->crud_model->delete_prog($id);	
	}
	
	/*
	*
	* CRUD functions for publications
	* functions return to _cms
	*
	*/
	
	function add_pub() {
		
		if(isset($_FILES))
		{
			$img = $_FILES['pub_photo'];
			$type = $this->input->post('pubtype');
			$title = $this->input->post('pub_title');
			$author = $this->input->post('post_author');
			
			$post = array('img' => $img, 'pub_type' => $type, 'title' => $title, 'author' => $author);
		}
		else
		{
			$type = $this->input->post('pubtype');
			$title = $this->input->post('pub_title');
			$author = $this->input->post('post_author');
			
			$post = array('pub_type' => $type, 'title' => $title, 'author' => $author);
		}
		
		$this->crud_model->add_pub($post);
	}
	
	function edit_pub() {
		
		if(isset($_FILES))
		{
			$id = $this->input->post('pub_id');
			$img = $_FILES['pub_photo'];
			$type = $this->input->post('pubtype');
			$title = $this->input->post('pub_title');
			$author = $this->input->post('post_author');
			
			$post = array('id' => $id, 'img' => $img, 'pub_type' => $type, 'title' => $title, 'author' => $author);
		}
		else
		{
			$id = $this->input->post('pub_id');
			$type = $this->input->post('pubtype');
			$title = $this->input->post('pub_title');
			$author = $this->input->post('post_author');
			
			$post = array('id' => $id, 'pub_type' => $type, 'title' => $title, 'author' => $author);
		}
		
		$this->crud_model->edit_pub($post);
	}
	
	function delete_pub() {
		
		//grab the id of the post being deleted
		//call model and pass data to method		
		$id = $this->uri->segment(3);	
		$this->crud_model->delete_pub($id);	
	}
	
	/*
	*
	* CRUD functions for videos
	* functions return to _cms
	*
	*/
	
	function add_video() {
		
		if($_POST['parent'] == 'resources')
		{
			if(isset($_FILES))
			{
				$title = $this->input->post('video_title');
				$content = $this->input->post('video_content');
				$parent = $this->input->post('parent');
				$img = $_FILES['vid_photo'];
				$cat = $this->input->post('category');
				$author = $this->input->post('post_author');
				
				$post = array('title' => $title, 'content' => $content, 'parent' => $parent, 'img' => $img, 'cat' => $cat, 'author' => $author);
			}
			else
			{
				$title = $this->input->post('video_title');
				$content = $this->input->post('video_content');
				$parent = $this->input->post('parent');
				$cat = $this->input->post('category');
				$author = $this->input->post('post_author');
				
				$post = array('title' => $title, 'content' => $content, 'parent' => $parent, 'cat' => $cat, 'author' => $author);
			}
			
		}
		if($_POST['parent'] == 'problem_gambling' || $_POST['parent'] == 'get_help')
		{
			$title = $this->input->post('video_title');
			$iframe = $this->input->post('video_iframe');
			$parent = $this->input->post('parent');
			$author = $this->input->post('post_author');
			
			$post = array('title' => $title, 'iframe' => $iframe, 'author' => $author, 'parent' => $parent);
		}
		
		$this->crud_model->add_video($post);
	}

	function edit_video() {
		
		if($_POST['parent'] == 'resources')
		{
			if(isset($_FILES))
			{
				$id = $this->input->post('revid_id');
				$title = $this->input->post('video_title');
				$content = $this->input->post('video_content');
				$parent = $this->input->post('parent');
				$img = $_FILES['vid_photo'];
				$cat = $this->input->post('category');
				$author = $this->input->post('post_author');
				
				$post = array('id' => $id, 'title' => $title, 'content' => $content, 'parent' => $parent, 'img' => $img, 'cat' => $cat, 'author' => $author);
			}
			else
			{
				$id = $this->input->post('revid_id');
				$title = $this->input->post('video_title');
				$content = $this->input->post('video_content');
				$parent = $this->input->post('parent');
				$cat = $this->input->post('category');
				$author = $this->input->post('post_author');
				
				$post = array('id' => $id, 'title' => $title, 'content' => $content, 'parent' => $parent, 'cat' => $cat, 'author' => $author);
			}
			
		}
		if($_POST['parent'] == 'problem_gambling' || $_POST['parent'] == 'get_help')
		{
			$id = $this->input->post('vid_id');
			$title = $this->input->post('video_title');
			$iframe = $this->input->post('video_iframe');
			$parent = $this->input->post('parent');
			$author = $this->input->post('post_author');
			
			$post = array('id' => $id, 'title' => $title, 'iframe' => $iframe, 'author' => $author, 'parent' => $parent);
		}
		
		$this->crud_model->edit_video($post);
	}
	
	// deletes news and updates post based on id passed
	function delete_video() {
		
		//grab the id of the post being deleted
		//call model and pass data to method		
		$id = $this->uri->segment(3);	
		$this->crud_model->delete_video($id);	
	}
	
	/*
	*
	* CRUD functions for toolkits
	* functions return to _cms
	*
	*/
	
	function add_toolkit() {
		
		if(isset($_FILES))
		{
			$img = $_FILES['toolkit_photo'];
			$title = $this->input->post('toolkit_title');
			$content = htmlentities($_POST['toolkit_content']);
			$author = $this->input->post('post_author');
			
			$post = array('img' => $img, 'title' => $title, 'content' => $content, 'author' => $author);
		}
		else
		{
			$title = $this->input->post('toolkit_title');
			$content = htmlentities($_POST['toolkit_content']);
			$author = $this->input->post('post_author');
			
			$post = array('title' => $title, 'content' => $content, 'author' => $author);
		}
		
		$this->crud_model->add_toolkit($post);
		
	}
	
	function edit_toolkit() {
		
		if(isset($_FILES))
		{
			$id = $this->input->post('kit_id');
			$img = $_FILES['toolkit_photo'];
			$title = $this->input->post('toolkit_title');
			$content = htmlentities($_POST['toolkit_content']);
			$author = $this->input->post('post_author');
			
			$post = array('id' => $id, 'img' => $img, 'title' => $title, 'content' => $content, 'author' => $author);
		}
		else
		{
			$id = $this->input->post('kit_id');
			$title = $this->input->post('toolkit_title');
			$content = htmlentities($_POST['toolkit_content']);
			$author = $this->input->post('post_author');
			
			$post = array('id' => $id, 'title' => $title, 'content' => $content, 'author' => $author);
		}
		
		$this->crud_model->edit_toolkit($post);
	}
	
	function delete_toolkit() {
		
		//grab the id of the post being deleted
		//call model and pass data to method		
		$id = $this->uri->segment(3);	
		$this->crud_model->delete_toolkit($id);	
	}
	
	/*
	*
	* CRUD functions for research pdfs
	* functions return to _cms
	*
	*/
	
	function add_research() {
		
		$pdf = $_FILES['research_pdf'];
		$title = $this->input->post('research_title');
		$content = htmlentities($_POST['research_content']);
		$author = $this->input->post('post_author');
		
		$post = array('pdf' => $pdf, 'title' => $title, 'content' => $content, 'author' => $author);
		
		$this->crud_model->add_research($post);
		
	}
	
	function edit_research() {
		
		if(isset($_FILES))
		{
			$id = $this->input->post('research_id');
			$pdf = $_FILES['research_pdf'];
			$title = $this->input->post('research_title');
			$content = htmlentities($_POST['research_content']);
			$author = $this->input->post('post_author');
			
			$post = array('id' => $id, 'pdf' => $pdf, 'title' => $title, 'content' => $content, 'author' => $author);
		}
		else
		{
			$id = $this->input->post('research_id');
			$title = $this->input->post('research_title');
			$content = htmlentities($_POST['research_content']);
			$author = $this->input->post('post_author');
			
			$post = array('id' => $id, 'pdf' => $pdf, 'title' => $title, 'content' => $content, 'author' => $author);
		}
		
		$this->crud_model->edit_research($post);
	}
	
	function delete_research() {
		
		//grab the id of the post being deleted
		//call model and pass data to method		
		$id = $this->uri->segment(3);	
		$this->crud_model->delete_research($id);	
	}
	
	/*
	*
	* CRUD functions for page content
	* functions return to _cms
	*
	*/
		
	function edit_page() {
				
		if(isset($_FILES))
		{
			$id = $this->input->post('page_id');
			$title = $this->input->post('page_title');
			$heading = $this->input->post('page_heading');
			$intro = htmlentities($_POST['page_intro']);
			$content = htmlentities($_POST['page_content']);
			$footer= htmlentities($_POST['page_footer']);
			$img = $_FILES['page_photo'];
			
			$post = array('title' => $title, 'heading' => $heading, 'intro' => $intro, 'content' => $content, 'footer' => $footer, 'img' => $img);
		}
		else
		{
			$id = $this->input->post('page_id');
			$title = $this->input->post('page_title');
			$heading = $this->input->post('page_heading');
			$intro = htmlentities($_POST['page_intro']);
			$content = htmlentities($_POST['page_content']);
			$footer= htmlentities($_POST['page_footer']);
			
			$post = array('title' => $title, 'heading' => $heading, 'intro' => $intro, 'content' => $content, 'footer' => $footer);
		}
		
		$this->crud_model->edit_page_id($id, $post);
	}
	
	
	/*
	*
	* CRUD functions for user creation and handling
	* functions return to _cms
	*
	*/
	
	// create user function - allows for a new admin user to be created
	function create_user() {
		
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$uname = $this->input->post('username');
		$pword = $this->input->post('password');
		$perm = $this->input->post('perm');
		$status = $this->input->post('status');
		
		$post = array('fname' => $fname, 'lname' => $lname, 'uname' => $uname, 'pword' => $pword, 'perm' => $perm, 'status' => $status);
		
		$this->user_model->create_user($post);
			
	}// end create user function
	
	function edit_user() {
		
		$perm = $this->input->post('perm');
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		
		$post = array('perm' => $perm, 'status' => $status, 'id' => $id);
		
		$this->user_model->edit_user($post);
		
	}// end edit user function
	
}