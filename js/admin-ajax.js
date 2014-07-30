// 	JavaScript Document
//	Author : Chris Allison
//	Email 	: callisonification@gmail.com
//	Date : 6-19-14
//	version	: 1.0

$(document).ready(function(){
	
	//AJAX function to edit newsfeed post
	//calls admin-crud
	$('.news-edit').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#edit-news-modal .img-path small').html('Current Image: ');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_news_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//add data to input fields
				$('#edit-news-modal input[name="news_id"]').val(data.id);
				$('#edit-news-modal input[name="post_title"]').val(data.title);
				$('#edit-news-modal .img-path small').append(data.img_path);
				$(tinymce.get('post_body').getBody()).html($('<textarea/>').html(data.content).val());
	
				//show edit modal
				$('#edit-news-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end edit newsfeed handler
	
	//AJAX function to delete newsfeed post
	//calls admin-crud
	$('.news-dlt').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#dlt-news-modal .modal-body').html('');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_news_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//build html for modal
				var html = '<h5 class="text-center">Are you sure you want to delete?</h5>'+
						   '<br />'+
						   '<p class="text-center lead">'+data.title+'</p>';
						   
				var href = url+"admin_crud/delete_post/"+data.id;
				
				//apend html to modal 
				$('#dlt-news-modal .modal-body').append(html);
				$('#dlt-news-modal .modal-footer a').attr('href', href);
					
				//show edit modal
				$('#dlt-news-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end delete newsfeed handler
	
	//AJAX function to edit youtube videos
	//calls admin-crud
	$('.vid-edit').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_vid_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//add data to input fields
				$('#edit-vid-modal input[name="video_title"]').val(data.title);
				$('#edit-vid-modal input[name="video_iframe"]').val(data.iframe);
				$('#edit-vid-modal input[name="vid_id"]').val(data.id);

				//show edit modal
				$('#edit-vid-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end edit video handler
	
	//AJAX function to delete youtube videos
	//calls admin-crud
	$('.vid-dlt').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#dlt-vid-modal .modal-body').html('');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_vid_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//build html for modal
				var html = '<h5 class="text-center">Are you sure you want to delete?</h5>'+
						   '<br />'+
						   '<p class="text-center lead">'+data.title+'</p>';
						   
				var href = url+"admin_crud/delete_video/"+data.id;
				
				//apend html to modal 
				$('#dlt-vid-modal .modal-body').append(html);
				$('#dlt-vid-modal .modal-footer a').attr('href', href);
					
				//show edit modal
				$('#dlt-vid-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end delete video handler
	
	//AJAX function to edit programs
	//calls admin-crud
	$('.prog-edit').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#edit-prog-modal .img-path small').html('Current Image: ');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_prog_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//add data to input fields
				$('#edit-prog-modal .img-path small').append(data.img_path);
				$('#edit-prog-modal input[name="program_title"]').val(data.title);
				$('#edit-prog-modal input[name="prog_id"]').val(data.id);
				$(tinymce.get('post_body').getBody()).html($('<textarea/>').html(data.content).val());

				//show edit modal
				$('#edit-prog-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end edit program handler
	
	//AJAX function to delete programs
	//calls admin-crud
	$('.prog-dlt').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#dlt-prog-modal .modal-body').html('');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_prog_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//build html for modal
				var html = '<h5 class="text-center">Are you sure you want to delete?</h5>'+
						   '<br />'+
						   '<p class="text-center lead">'+data.title+'</p>';
						   
				var href = url+"admin_crud/delete_prog/"+data.id;
				
				//apend html to modal 
				$('#dlt-prog-modal .modal-body').append(html);
				$('#dlt-prog-modal .modal-footer a').attr('href', href);
					
				//show edit modal
				$('#dlt-prog-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end delete program handler
	
	//AJAX function to edit publication
	//calls admin-crud
	$('.pub-edit').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#edit-pub-modal .img-path small').html('Current Image: ');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_pub_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//add data to input fields
				$('#edit-pub-modal .img-path small').append(data.img_path);
				$('#edit-pub-modal input[name="pub_title"]').val(data.title);
				$('#edit-pub-modal select[name="pubtype"]').val(data.pub_type);
				$('#edit-pub-modal input[name="pub_id"]').val(data.id);

				//show edit modal
				$('#edit-pub-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end edit publication handler
	
	//AJAX function to delete publication
	//calls admin-crud
	$('.pub-dlt').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#dlt-pub-modal .modal-body').html('');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_pub_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//build html for modal
				var html = '<h5 class="text-center">Are you sure you want to delete?</h5>'+
						   '<br />'+
						   '<p class="text-center lead">'+data.title+'</p>';
						   
				var href = url+"admin_crud/delete_pub/"+data.id;
				
				//apend html to modal 
				$('#dlt-pub-modal .modal-body').append(html);
				$('#dlt-pub-modal .modal-footer a').attr('href', href);
					
				//show edit modal
				$('#dlt-pub-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end delete publication handler
	
	//AJAX function to edit resc video
	//calls admin-crud
	$('.revid-edit').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#edit-revid-modal .img-path small').html('Current Image: ');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_vid_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//add data to input fields
				$('#edit-revid-modal .img-path small').append(data.img_path);
				$('#edit-revid-modal input[name="video_title"]').val(data.title);
				$('#edit-revid-modal input[name="revid_id"]').val(data.id);
				$('#edit-revid-modal select[name="category"]').val(data.category);
				$(tinymce.get('revid_content').getBody()).html($('<textarea/>').html(data.content).val());

				//show edit modal
				$('#edit-revid-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end edit resc video handler
	
	//AJAX function to delete resc video
	//calls admin-crud
	$('.revid-dlt').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#dlt-revid-modal .modal-body').html('');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_vid_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//build html for modal
				var html = '<h5 class="text-center">Are you sure you want to delete?</h5>'+
						   '<br />'+
						   '<p class="text-center lead">'+data.title+'</p>';
						   
				var href = url+"admin_crud/delete_video/"+data.id;
				
				//apend html to modal 
				$('#dlt-revid-modal .modal-body').append(html);
				$('#dlt-revid-modal .modal-footer a').attr('href', href);
					
				//show edit modal
				$('#dlt-revid-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end delete resc video handler

	//AJAX function to edit toolkit
	//calls admin-crud
	$('.kit-edit').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#edit-kit-modal .img-path small').html('Current Image: ');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_kit_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//add data to input fields
				$('#edit-kit-modal .img-path small').append(data.img_path);
				$('#edit-kit-modal input[name="toolkit_title"]').val(data.title);
				$('#edit-kit-modal input[name="kit_id"]').val(data.id);
				$(tinymce.get('kit_content').getBody()).html($('<textarea/>').html(data.content).val());

				//show edit modal
				$('#edit-kit-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end edit toolkit handler
	
	//AJAX function to delete toolkit
	//calls admin-crud
	$('.kit-dlt').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#dlt-kit-modal .modal-body').html('');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_kit_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//build html for modal
				var html = '<h5 class="text-center">Are you sure you want to delete?</h5>'+
						   '<br />'+
						   '<p class="text-center lead">'+data.title+'</p>';
						   
				var href = url+"admin_crud/delete_toolkit/"+data.id;
				
				//apend html to modal 
				$('#dlt-kit-modal .modal-body').append(html);
				$('#dlt-kit-modal .modal-footer a').attr('href', href);
					
				//show edit modal
				$('#dlt-kit-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end delete toolkit handler
	
	//AJAX function to edit research
	//calls admin-crud
	$('.research-edit').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#edit-research-modal .img-path small').html('Current Image: ');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_research_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//add data to input fields
				$('#edit-research-modal input[name="research_title"]').val(data.title);
				$('#edit-research-modal input[name="research_id"]').val(data.id);
				$(tinymce.get('research_body').getBody()).html($('<textarea/>').html(data.content).val());

				//show edit modal
				$('#edit-research-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end edit research handler
	
	//AJAX function to delete research
	//calls admin-crud
	$('.research-dlt').on('click', function(){
		
		//get post id variable
		var id = $(this).attr('data-id');
		$('#dlt-research-modal .modal-body').html('');
			
		//AJAX			
		$.ajax({
			url	: url+"ajax_controller/get_research_id/",
			type : 'POST',
			data : { 'id' : id },
			dataType:"html",
			success : function(data) {
				
				//parse JSON objects
				data = JSON.parse(data);
				
				//build html for modal
				var html = '<h5 class="text-center">Are you sure you want to delete?</h5>'+
						   '<br />'+
						   '<p class="text-center lead">'+data.title+'</p>';
						   
				var href = url+"admin_crud/delete_research/"+data.id;
				
				//apend html to modal 
				$('#dlt-research-modal .modal-body').append(html);
				$('#dlt-research-modal .modal-footer a').attr('href', href);
					
				//show edit modal
				$('#dlt-research-modal').modal('show');
			},
			error : function(data) {
				alert('There was an error, please try again...')
			}
			
		});
				
		return false;
			
	});
	//end delete research handler	
	
//end doc.ready();
});