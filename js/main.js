// 	JavaScript Document
// 	author 	: Christopher Allison
//	email 	: callisonification@gmail.com
//	date	: 3/12/14
//	version	: 1.0

$(document).ready(function(){
	
	//===navbar brand animations
	//===brand is initially set to hidden
	$('.navbar-brand').css('display','none');
	
	//nivo-lightbox init
    $('a.nivo').nivoLightbox({
		effect: 'fade',
    	theme: 'default'	
	});
		
	//when the user scrolls past 80px the brand fades in
	//brand then acts as escape hatch for rest of site
	$(window).on('scroll', function(){
		var scrollTop = $(window).scrollTop();
		var limit = 2600;
						
		if( scrollTop <= 80 ) {
			$('.navbar-brand').fadeOut(500);
		}else if( scrollTop > 80 ) {
			$('.navbar-brand').fadeIn(500);
		}		
	});
	
	//===sub nav active check controller
	//===only shows submenu for active menu item
	//===hides submenu for all other pages
	$('.nav-stacked li.parent a').each(function(){
		var child = $(this).attr('data-child');
			
		if(  $(this).hasClass('active')  )
		{
			$(child).css('display', 'block');
		}
		else if( $(this).parent().next().children().children().children().hasClass('active') )
		{
			$(child).css('display', 'block');
			$(this).parent().children('a').children('span').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		}	
		else
		{
			$(child).css('display', 'none');
		}
		
	});

	//===sub-nav glyphicon click handler
	//===shows menu when click if inaactive
	//===hides menu when clicked if its the active menu
	$('.nav-stacked li a .glyphicon').on('click', function(){
		
		var child = $(this).parent('.nav-stacked li.parent a').attr('data-child');
		
		//condition to handle sub-nav toggle
		if($(this).hasClass('glyphicon-chevron-down'))
		{
			$(child).slideDown();
			$(this).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		}
		else if($(this).hasClass('glyphicon-chevron-up'))
		{
			$(child).slideUp();
			$(this).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		}
		
		//prevents default action - no page reload
		return false;
	});
	
	//===navbar hover actions
	$('.navbar-nav li').on('mouseenter', function(){
		$(this).addClass('open');	
	});
	$('.navbar-nav li').on('mouseleave', function(){
		$(this).removeClass('open');	
	});
						
	//===CTA banner actions
	//===set initial settings
	var billboard = $('.carousel');
	$(billboard).carousel({
		interval : false
	});
	
	//====Hide / Show carousel controls
	//====set variable / apply actions
	$('.carousel-control').css({'opacity' : 0.2});
	
	$('.carousel-control').on('mouseenter', function(){
		$(this).stop().animate({opacity: 1}, 300);	
	});
	$('.carousel-control').on('mouseleave', function(){
		$(this).stop().animate({opacity: 0.2}, 300);		
	});
	
	//===help subnav panel animations
	var panel = $('.help');
	var innerPanel = $('.help-inner-panel');
	
	var top = $('.help-inner-panel').height() - 25;
	var bttm = $('.help-inner-panel').css('margin-top');
	
	$(panel).on('mouseenter', function(){
		$(this).find(innerPanel).animate({marginTop:-top}, 200, 'swing');
		$(this).find('.popup').fadeOut(300);	
	});
	$(panel).on('mouseleave', function(){
		$(this).find(innerPanel).animate({marginTop:bttm}, 200, 'swing');
		$(this).find('.popup').fadeIn(300);
	});
	
	//===changes comm btns display text on hover
	//===on/off for each set of comm btns
	$('.iso.helpline').on('mouseenter', function(){
		$(this).children('.toggle').html('Available 24/7');
	});
	$('.iso.helpline').on('mouseleave', function(){
		$(this).children('.toggle').html('Helpline');
	});
	$('.iso.chat').on('mouseenter', function(){
		$(this).children('.toggle').html('Available Mon-Fri 8am-5pm');
	});
	$('.iso.chat').on('mouseleave', function(){
		$(this).children('.toggle').html('Live Chat');
	});
	$('.iso.email').on('mouseenter', function(){
		$(this).children('.toggle').html('Available 24/7');
	});
	$('.iso.email').on('mouseleave', function(){
		$(this).children('.toggle').html('E-mail');
	});
	$('.iso.textline').on('mouseenter', function(){
		$(this).children('.toggle').html('Available Mon-Fri 8am-5pm');
	});
	$('.iso.textline').on('mouseleave', function(){
		$(this).children('.toggle').html('Text Line');
	});
	
	//===social tab animation
	var socTab = $('.social-tab');
	
	$(socTab).on('mouseenter', function(){
		$(this).animate({right:0}, 200, 'swing');	
	});
	$(socTab).on('mouseleave', function(){
		$(this).animate({right:-80}, 200, 'swing');	
	});
	
	//===back to top button action
	$('.btt').on('click', function(){
		$('html, body').animate({scrollTop: 0}, 1000);
		
		//prevents default action - no page reload
		return false;
	});
	
	//===offcanvas menu options
	$('#left-menu').sidr({
		name : 'sidr-left',
		side : 'left',
		source : 'nav'
	});
	$('#right-menu').sidr({
		name : 'sidr-right',
		side : 'right',
		source : '.sidr-right'
	});
	
	//===fixed navbar doesnt allow access button to be pushed with body content
	//===assign click handlers so if user clicks screen sidr hides
	$(window).on('click', function(){
		$.sidr('close','sidr-left', function(){ return false; })	
	});
	$(window).on('click', function(){
		$.sidr('close','sidr-right', function(){ return false; })	
	});
	
	//===set local vars for program row actions
	//===initially sets all prog modules to a height of 120px
	var toggle = 'off';
	var content = $('.prog-link a').parent().parent().siblings('.prog-content');
	$(content).height(120);
	
	//when prog model button is clicked height is altered
	//height is set to adjust to the height of its respective content
	$('.prog-link a').on('click', function(){
		var content = $(this).parent().parent().siblings('.prog-content');
		var contentHeight = $(this).parent().parent().siblings('.prog-content').children('p').height();
		var height = $(content).height();
		var newHeight = contentHeight;
				
		if( toggle == 'off' )
		{
			$(content).animate({height:newHeight}, 400, 'swing');
			toggle = 'on';
			$(this).html('Read Less <span class="glyphicon glyphicon-chevron-up"></span>');
		}
		else if( toggle == 'on' )
		{
			$(content).animate({height:120}, 400, 'swing');
			toggle = 'off';
			$(this).html('Read More <span class="glyphicon glyphicon-chevron-down"></span>');
		}
		
		//prevents default action - no page reload		
		return false;
	});
	
	//===adds program to program request modal on click
	$('.prog-btn a').on('click', function(){
		var title = $(this).parent().siblings('.prog-title').text();
		$('input[name="prog-title"]').attr('value', title);
	});
	
	/*************************
	 *
	 * Start of Ajax calls - emails/programs/etc
	 *
	 *************************/
	 
	 //ajax handler for footer form - quick message
	 $('#footer-form .submit').on('click', function(e){
		
		//set ajax vars
		var name = $('#footer-form input[name="name"]');
		var email = $('#footer-form input[name="email"]');
		var mssg = $('#footer-form textarea[name="mssg"]');
		
		//checks for empty form fields and displays error message if any are detected
		//if no empty fields then AJAX request is sent normally
		if( $(name).val() == '' || $(email).val() == '' || $(mssg).val() == '' )
		{
			$('#footer-form .alert-danger').fadeIn(400);
			
		}else{
						
			$.ajax({
				type : 'POST',
				url : url+"ajax_controller/send_quick_mssg/",
				data : {
						name : $(name).val(),
						email : $(email).val(),
						mssg : $(mssg).val()
				},
				success : function(data){
					$(name).val('');
					$(email).val('');
					$(mssg).val('');
					$('#footer-form .alert-success').fadeIn(400);
				},
				error : function(){
					$('#footer-form .alert-danger').fadeIn(400);
				}
				
			});//end ajax call
		
		};//end condition
		
		return false;
 
	 });
	 //end footer-form ajax call
	 
	 //ajax handler for contact form - global contact form
	 $('#form-contact-modal .submit').on('click', function(e){
		
		//set ajax vars
		var name = $('#form-contact-modal input[name="name"]');
		var org = $('#form-contact-modal input[name="org"]');
		var addy1 = $('#form-contact-modal input[name="address1"]');
		var addy2 = $('#form-contact-modal input[name="address2"]');
		var city = $('#form-contact-modal input[name="city"]');
		var state = $('#form-contact-modal input[name="state"]');
		var zip = $('#form-contact-modal input[name="zip"]');
		var email = $('#form-contact-modal input[name="email"]');
		var phone = $('#form-contact-modal input[name="phone"]');
		var mssg = $('#form-contact-modal textarea[name="mssg"]');
		
		//checks for empty form fields and displays error message if any are detected
		//if no empty fields then AJAX request is sent normally
		if( $(name).val() == '' || $(addy1).val() == '' || $(city).val() == '' || $(state).val() == '' || 
		    $(zip).val() == '' || $(email).val() == '' || $(phone).val() == '' || $(mssg).val() == '' )
		{
			$('#form-contact-modal .alert-danger').fadeIn(400);
			
		}else{
						
			$.ajax({
				type : 'POST',
				url : url+"ajax_controller/send_mssg/",
				data : {
						name : $(name).val(),
						org : $(org).val(),
						addy1 : $(addy1).val(),
						addy2 : $(addy2).val(),
						city : $(city).val(),
						state : $(state).val(),
						zip : $(zip).val(),
						email : $(email).val(),
						phone : $(phone).val(),
						mssg : $(mssg).val()
				},
				success : function(data){
					$(name).val('');
					$(org).val('');
					$(addy1).val('');
					$(addy2).val('');
					$(city).val('');
					$(state).val('');
					$(zip).val('');
					$(email).val('');
					$(phone).val('');
					$(mssg).val('');
					
					$('#form-contact-modal .alert-success').fadeIn(400);
				},
				error : function(){
					$('#form-contact-modal .alert-danger').fadeIn(400);
				}
				
			});//end ajax call
		
		};//end condition
		
		return false;
 
	 });
	 //end global contact form ajax call
	 
	 //ajax handler for program request form
	 $('#prog-modal .submit').on('click', function(e){
		
		//set ajax vars
		var name = $('#prog-modal input[name="name"]');
		var addy1 = $('#prog-modal input[name="address1"]');
		var addy2 = $('#prog-modal input[name="address2"]');
		var city = $('#prog-modal input[name="city"]');
		var state = $('#prog-modal input[name="state"]');
		var zip = $('#prog-modal input[name="zip"]');
		var email = $('#prog-modal input[name="email"]');
		var phone = $('#prog-modal input[name="phone"]');
		var prog = $('#prog-modal input[name="prog-title"]');
		
		//checks for empty form fields and displays error message if any are detected
		//if no empty fields then AJAX request is sent normally
		if( $(name).val() == '' || $(addy1).val() == '' || $(city).val() == '' || $(state).val() == '' || 
		    $(zip).val() == '' || $(email).val() == '' || $(phone).val() == '' || $(prog).val() == '' )
		{
			$('#prog-modal .alert-danger').fadeIn(400);
			
		}else{
						
			$.ajax({
				type : 'POST',
				url : url+"ajax_controller/req_prog/",
				data : {
						name : $(name).val(),
						addy1 : $(addy1).val(),
						addy2 : $(addy2).val(),
						city : $(city).val(),
						state : $(state).val(),
						zip : $(zip).val(),
						email : $(email).val(),
						phone : $(phone).val(),
						prog : $(prog).val()
				},
				success : function(data){
					$(name).val('');
					$(addy1).val('');
					$(addy2).val('');
					$(city).val('');
					$(state).val('');
					$(zip).val('');
					$(email).val('');
					$(phone).val('');
					
					$('#prog-modal .alert-success').fadeIn(400);
				},
				error : function(){
					$('#prog-modal .alert-danger').fadeIn(400);
				}
				
			});//end ajax call
		
		};//end condition
		
		return false;
 
	 });
	 //end program request form ajax call
	 
	 //ajax handler for membership form
	 $('#membership-form-modal .submit').on('click', function(e){
		
		//set ajax vars
		var name = $('#membership-form-modal input[name="name"]');
		var title = $('#membership-form-modal input[name="title"]');
		var org = $('#membership-form-modal input[name="org"]');
		var addy1 = $('#membership-form-modal input[name="address1"]');
		var addy2 = $('#membership-form-modal input[name="address2"]');
		var city = $('#membership-form-modal input[name="city"]');
		var state = $('#membership-form-modal input[name="state"]');
		var zip = $('#membership-form-modal input[name="zip"]');
		var email = $('#membership-form-modal input[name="email"]');
		var phone = $('#membership-form-modal input[name="phone"]');
		var mType = $('#membership-form-modal select[name="member-type"]');
		var vol = $('#membership-form-modal input[name="volunteer"]:checked');
		var aType = $('#membership-form-modal select[name="assist-type"]');
		
		//checks for empty form fields and displays error message if any are detected
		//if no empty fields then AJAX request is sent normally
		if( $(name).val() == '' || $(addy1).val() == '' || $(city).val() == '' || $(state).val() == '' || 
		    $(zip).val() == '' || $(email).val() == '' || $(phone).val() == '' || $(mType).val() == '' )
		{
			$('#membership-form-modal .alert-danger').fadeIn(400);
			
		}else{
						
			$.ajax({
				type : 'POST',
				url : url+"ajax_controller/membership_req/",
				data : {
						name : $(name).val(),
						title : $(title).val(),
						org : $(org).val(),
						addy1 : $(addy1).val(),
						addy2 : $(addy2).val(),
						city : $(city).val(),
						state : $(state).val(),
						zip : $(zip).val(),
						email : $(email).val(),
						phone : $(phone).val(),
						mType : $(mType).val(),
						vol : $(vol).val(),
						aType : $(aType).val()
				},
				success : function(data){
					$(name).val('');
					$(title).val('');
					$(org).val('');
					$(addy1).val('');
					$(addy2).val('');
					$(city).val('');
					$(state).val('');
					$(zip).val('');
					$(email).val('');
					$(phone).val('');
					$(mType).prop('selectedIndex',0);
					$(aType).prop('selectedIndex',0);
					$(vol).attr('checked', false);
					
					$('#membership-form-modal .alert-success').fadeIn(400);
				},
				error : function(){
					$('#membership-form-modal .alert-danger').fadeIn(400);
				}
				
			});//end ajax call
		
		};//end condition
		
		return false;
 
	 });
	 //end membership form ajax call
	 
	 //ajax handler for RGPPP request form
	 $('#rgppp-modal .submit').on('click', function(e){
		
		//set ajax vars
		var name = $('#rgppp-modal input[name="name"]');
		var pos = $('#rgppp-modal input[name="pos"]');
		var fac = $('#rgppp-modal input[name="fac"]');
		var facMan = $('#rgppp-modal input[name="fac-man"]');
		var addy1 = $('#rgppp-modal input[name="address1"]');
		var addy2 = $('#rgppp-modal input[name="address2"]');
		var city = $('#rgppp-modal input[name="city"]');
		var state = $('#rgppp-modal input[name="state"]');
		var zip = $('#rgppp-modal input[name="zip"]');
		var email = $('#rgppp-modal input[name="email"]');
		var comm = $('#rgppp-modal textarea[name="comments"]');
		
		//checks for empty form fields and displays error message if any are detected
		//if no empty fields then AJAX request is sent normally
		if( $(name).val() == '' || $(pos).val() == '' || $(fac).val() == '' || $(facMan).val() == '' || $(addy1).val() == '' || 
			$(city).val() == '' || $(state).val() == '' || $(zip).val() == '' || $(email).val() == '' )
		{
			$('#rgppp-modal .alert-danger').fadeIn(400);
			return false;
			
		}else{
						
			$.ajax({
				type : 'POST',
				url : url+"ajax_controller/rgppp_req/",
				data : {
						name : $(name).val(),
						pos : $(pos).val(),
						fac : $(fac).val(),
						facMan : $(facMan).val(),
						addy1 : $(addy1).val(),
						addy2 : $(addy2).val(),
						city : $(city).val(),
						state : $(state).val(),
						zip : $(zip).val(),
						email : $(email).val(),
						comm : $(comm).val()
				},
				success : function(data){
					$(name).val('');
					$(pos).val('');
					$(fac).val('');
					$(facMan).val('');
					$(addy1).val('');
					$(addy2).val('');
					$(city).val('');
					$(state).val('');
					$(zip).val('');
					$(email).val('');
					$(comm).val('');
					
					$('#rgppp-modal .alert-success').fadeIn(400);
				},
				error : function(){
					$('#rgppp-modal .alert-danger').fadeIn(400);
				}
				
			});//end ajax call
		
		};//end condition
		
		return false;
 
	 });
	 //end RGPPP request form ajax call
	 
	 /*************************
	 *
	 * Start of quiz control functions
	 *
	 *************************/
	 
	 //individuals quiz click handler
	 $('#ind-quiz-modal .submit').on('click', function(e){
		 
		 //declare quiz vars
		 var rads = $('input[type=radio]:checked');
		 var total = 0;
		 var count = 0;
		 
		 //loop thru each and get value
		 $(rads).each(function(index, element) {
            total += parseInt($(this).val(), 10);
			count++;
        });
		
		//calculate score
		var score = Math.floor(count)		
		var scoreStr = '';
				
		if(score < 1) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be a low risk gambler.</p>'
						;
		}
		else if(score == 1) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be an at-risk gambler.</p>'
						;
		}
		else if(score >= 2 && score <= 3) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be a problem gambler.</p>'
		}
		else if(score >= 4) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be a compulsive gambler.</p>'
		}
		
		var html = '<h3 class="text-center text-info"><strong>You Answered Yes to '+score+' question(s).</strong></h3>'
				   + scoreStr
				   + '<br />'
				   +'<div class="table-responsive"><table class="table table-bordered"><tr><td>0</td><td>Low Risk/Social Gambler</td></tr><tr>'
				   +'<td>1</td><td>At-Risk Gambler</td></tr><tr><td>2-3</td><td>Problem Gambler</td></tr><tr><td>4+</td><td>Compulsive Gambler</td>'
				   +'</tr></table></div>'
				   + '<p class="text-center">If you would like more information or need assistance with a gambling problem,</p>' 
				   + '<p class="text-center">please contact our <strong>Helpline</strong> at:</p>'
				   + '<h4 class="text-center text-info">888-236-4848</h4>';
				
		$('#ind-quiz-modal .modal-body').empty();
		$('#ind-quiz-modal .modal-body').html(html);
						
		return false;
	 });
	 
	 //loved ones quiz click handler
	 $('#lo-quiz-modal .submit').on('click', function(e){
		 
		 //declare quiz vars
		 var rads = $('input[type=radio]:checked');
		 var total = 0;
		 var count = 0;
		 
		 //loop thru each and get value
		 $(rads).each(function(index, element) {
            total += parseInt($(this).val(), 10);
			count++;
        });
		
		//calculate score
		var score = Math.floor(count)		
		var scoreStr = '';
		
		console.log(score);
		
		if(score < 1) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be a low risk gambler.</p>'
						;
		}
		else if(score == 1) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be an at-risk gambler.</p>'
						;
		}
		else if(score >= 2 && score <= 3) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be a problem gambler.</p>'
		}
		else if(score >= 4) 
		{
			scoreStr = '<p class="text-center">Based upon your Assessment, you may be a compulsive gambler.</p>'
		}
		
		var html = '<h3 class="text-center text-info"><strong>You Answered Yes to '+score+' question(s).</strong></h3>'
				   + scoreStr
				   + '<br />'
				   +'<div class="table-responsive"><table class="table table-bordered"><tr><td>0</td><td>Low Risk/Social Gambler</td></tr><tr>'
				   +'<td>1</td><td>At-Risk Gambler</td></tr><tr><td>2-3</td><td>Problem Gambler</td></tr><tr><td>4+</td><td>Compulsive Gambler</td>'
				   +'</tr></table></div>'
				   + '<p class="text-center">If you would like more information or need assistance with a gambling problem,</p>' 
				   + '<p class="text-center">please contact our <strong>Helpline</strong> at:</p>'
				   + '<h4 class="text-center text-info">888-236-4848</h4>';
				
		$('#lo-quiz-modal .modal-body').empty();
		$('#lo-quiz-modal .modal-body').html(html);
						
		return false;
	 });
	
})
//end doc.ready();