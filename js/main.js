$(document).ready(function(){$(".navbar-brand").css("display","none"),$("a.nivo").nivoLightbox({effect:"fade",theme:"default"}),$(window).on("scroll",function(){var e=$(window).scrollTop();80>=e?$(".navbar-brand").fadeOut(500):e>80&&$(".navbar-brand").fadeIn(500)}),$(".nav-stacked li.parent a").each(function(){var e=$(this).attr("data-child");$(this).hasClass("active")?$(e).css("display","block"):$(this).parent().next().children().children().children().hasClass("active")?($(e).css("display","block"),$(this).parent().children("a").children("span").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up")):$(e).css("display","none")}),$(".nav-stacked li a .glyphicon").on("click",function(){var e=$(this).parent(".nav-stacked li.parent a").attr("data-child");return $(this).hasClass("glyphicon-chevron-down")?($(e).slideDown(),$(this).removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up")):$(this).hasClass("glyphicon-chevron-up")&&($(e).slideUp(),$(this).removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down")),!1}),$(".navbar-nav li").on("mouseenter",function(){$(this).addClass("open")}),$(".navbar-nav li").on("mouseleave",function(){$(this).removeClass("open")});var e=$(".carousel");$(e).carousel({interval:!1}),$(".carousel-control").css({opacity:.2}),$(".carousel-control").on("mouseenter",function(){$(this).stop().animate({opacity:1},300)}),$(".carousel-control").on("mouseleave",function(){$(this).stop().animate({opacity:.2},300)});var a=$(".help"),t=$(".help-inner-panel"),n=$(".help img").height()+20,o=$(".help-inner-panel").css("margin-top");$(a).on("mouseenter",function(){$(this).find(t).animate({marginTop:-n},200,"swing"),$(this).find(".popup").fadeOut(300)}),$(a).on("mouseleave",function(){$(this).find(t).animate({marginTop:o},200,"swing"),$(this).find(".popup").fadeIn(300)}),$(".iso.helpline").on("mouseenter",function(){$(this).children(".toggle").html("Available 24/7")}),$(".iso.helpline").on("mouseleave",function(){$(this).children(".toggle").html("Helpline")}),$(".iso.chat").on("mouseenter",function(){$(this).children(".toggle").html("Available Mon-Fri 8am-5pm")}),$(".iso.chat").on("mouseleave",function(){$(this).children(".toggle").html("Live Chat")}),$(".iso.email").on("mouseenter",function(){$(this).children(".toggle").html("Available 24/7")}),$(".iso.email").on("mouseleave",function(){$(this).children(".toggle").html("E-mail")}),$(".iso.textline").on("mouseenter",function(){$(this).children(".toggle").html("Available Mon-Fri 8am-5pm")}),$(".iso.textline").on("mouseleave",function(){$(this).children(".toggle").html("Text Line")});var l=$(".social-tab");$(l).on("mouseenter",function(){$(this).animate({right:0},200,"swing")}),$(l).on("mouseleave",function(){$(this).animate({right:-80},200,"swing")}),$(".btt").on("click",function(){return $("html, body").animate({scrollTop:0},1e3),!1}),$("#left-menu").sidr({name:"sidr-left",side:"left",source:"nav"}),$("#right-menu").sidr({name:"sidr-right",side:"right",source:".sidr-right"}),$(window).on("click",function(){$.sidr("close","sidr-left",function(){return!1})}),$(window).on("click",function(){$.sidr("close","sidr-right",function(){return!1})});var r="off",s=$(".prog-link a").parent().parent().siblings(".prog-content");if($(s).height(120),$(".prog-link a").on("click",function(){var e=$(this).parent().parent().siblings(".prog-content"),a=$(this).parent().parent().siblings(".prog-content").children("p").height(),t=($(e).height(),a);return"off"==r?($(e).animate({height:t},400,"swing"),r="on",$(this).html('Read Less <span class="glyphicon glyphicon-chevron-up"></span>')):"on"==r&&($(e).animate({height:120},400,"swing"),r="off",$(this).html('Read More <span class="glyphicon glyphicon-chevron-down"></span>')),!1}),$(".prog-btn a").on("click",function(){var e=$(this).parent().siblings(".prog-title").text();$('input[name="prog-title"]').attr("value",e)}),$("#footer-form .submit").on("click",function(){var e=$('#footer-form input[name="name"]'),a=$('#footer-form input[name="email"]'),t=$('#footer-form textarea[name="mssg"]');return""==$(e).val()||""==$(a).val()||""==$(t).val()?$("#footer-form .alert-danger").fadeIn(400):$.ajax({type:"POST",url:url+"ajax_controller/send_quick_mssg/",data:{name:$(e).val(),email:$(a).val(),mssg:$(t).val()},success:function(){$(e).val(""),$(a).val(""),$(t).val(""),$("#footer-form .alert-success").fadeIn(400)},error:function(){$("#footer-form .alert-danger").fadeIn(400)}}),!1}),$("#form-contact-modal .submit").on("click",function(){var e=$('#form-contact-modal input[name="name"]'),a=$('#form-contact-modal input[name="org"]'),t=$('#form-contact-modal input[name="address1"]'),n=$('#form-contact-modal input[name="address2"]'),o=$('#form-contact-modal input[name="city"]'),l=$('#form-contact-modal input[name="state"]'),r=$('#form-contact-modal input[name="zip"]'),s=$('#form-contact-modal input[name="email"]'),i=$('#form-contact-modal input[name="phone"]'),m=$('#form-contact-modal textarea[name="mssg"]');return""==$(e).val()||""==$(t).val()||""==$(o).val()||""==$(l).val()||""==$(r).val()||""==$(s).val()||""==$(i).val()||""==$(m).val()?$("#form-contact-modal .alert-danger").fadeIn(400):$.ajax({type:"POST",url:url+"ajax_controller/send_mssg/",data:{name:$(e).val(),org:$(a).val(),addy1:$(t).val(),addy2:$(n).val(),city:$(o).val(),state:$(l).val(),zip:$(r).val(),email:$(s).val(),phone:$(i).val(),mssg:$(m).val()},success:function(){$(e).val(""),$(a).val(""),$(t).val(""),$(n).val(""),$(o).val(""),$(l).val(""),$(r).val(""),$(s).val(""),$(i).val(""),$(m).val(""),$("#form-contact-modal .alert-success").fadeIn(400)},error:function(){$("#form-contact-modal .alert-danger").fadeIn(400)}}),!1}),$("#prog-modal .submit").on("click",function(){var e=$('#prog-modal input[name="name"]'),a=$('#prog-modal input[name="address1"]'),t=$('#prog-modal input[name="address2"]'),n=$('#prog-modal input[name="city"]'),o=$('#prog-modal input[name="state"]'),l=$('#prog-modal input[name="zip"]'),r=$('#prog-modal input[name="email"]'),s=$('#prog-modal input[name="phone"]'),i=$('#prog-modal input[name="prog-title"]');return""==$(e).val()||""==$(a).val()||""==$(n).val()||""==$(o).val()||""==$(l).val()||""==$(r).val()||""==$(s).val()||""==$(i).val()?$("#prog-modal .alert-danger").fadeIn(400):$.ajax({type:"POST",url:url+"ajax_controller/req_prog/",data:{name:$(e).val(),addy1:$(a).val(),addy2:$(t).val(),city:$(n).val(),state:$(o).val(),zip:$(l).val(),email:$(r).val(),phone:$(s).val(),prog:$(i).val()},success:function(){$(e).val(""),$(a).val(""),$(t).val(""),$(n).val(""),$(o).val(""),$(l).val(""),$(r).val(""),$(s).val(""),$("#prog-modal .alert-success").fadeIn(400)},error:function(){$("#prog-modal .alert-danger").fadeIn(400)}}),!1}),$("#membership-form-modal .submit").on("click",function(){var e=$('#membership-form-modal input[name="name"]'),a=$('#membership-form-modal input[name="title"]'),t=$('#membership-form-modal input[name="org"]'),n=$('#membership-form-modal input[name="address1"]'),o=$('#membership-form-modal input[name="address2"]'),l=$('#membership-form-modal input[name="city"]'),r=$('#membership-form-modal input[name="state"]'),s=$('#membership-form-modal input[name="zip"]'),i=$('#membership-form-modal input[name="email"]'),m=$('#membership-form-modal input[name="phone"]'),d=$('#membership-form-modal select[name="member-type"]'),c=$('#membership-form-modal input[name="volunteer"]:checked'),p=$('#membership-form-modal select[name="assist-type"]');return""==$(e).val()||""==$(n).val()||""==$(l).val()||""==$(r).val()||""==$(s).val()||""==$(i).val()||""==$(m).val()||""==$(d).val()?$("#membership-form-modal .alert-danger").fadeIn(400):$.ajax({type:"POST",url:url+"ajax_controller/membership_req/",data:{name:$(e).val(),title:$(a).val(),org:$(t).val(),addy1:$(n).val(),addy2:$(o).val(),city:$(l).val(),state:$(r).val(),zip:$(s).val(),email:$(i).val(),phone:$(m).val(),mType:$(d).val(),vol:$(c).val(),aType:$(p).val()},success:function(){$(e).val(""),$(a).val(""),$(t).val(""),$(n).val(""),$(o).val(""),$(l).val(""),$(r).val(""),$(s).val(""),$(i).val(""),$(m).val(""),$(d).prop("selectedIndex",0),$(p).prop("selectedIndex",0),$(c).attr("checked",!1),$("#membership-form-modal .alert-success").fadeIn(400)},error:function(){$("#membership-form-modal .alert-danger").fadeIn(400)}}),!1}),$("#rgppp-modal .submit").on("click",function(){var e=$('#rgppp-modal input[name="name"]'),a=$('#rgppp-modal input[name="pos"]'),t=$('#rgppp-modal input[name="fac"]'),n=$('#rgppp-modal input[name="fac-man"]'),o=$('#rgppp-modal input[name="address1"]'),l=$('#rgppp-modal input[name="address2"]'),r=$('#rgppp-modal input[name="city"]'),s=$('#rgppp-modal input[name="state"]'),i=$('#rgppp-modal input[name="zip"]'),m=$('#rgppp-modal input[name="email"]'),d=$('#rgppp-modal textarea[name="comments"]');return""==$(e).val()||""==$(a).val()||""==$(t).val()||""==$(n).val()||""==$(o).val()||""==$(r).val()||""==$(s).val()||""==$(i).val()||""==$(m).val()?($("#rgppp-modal .alert-danger").fadeIn(400),!1):($.ajax({type:"POST",url:url+"ajax_controller/rgppp_req/",data:{name:$(e).val(),pos:$(a).val(),fac:$(t).val(),facMan:$(n).val(),addy1:$(o).val(),addy2:$(l).val(),city:$(r).val(),state:$(s).val(),zip:$(i).val(),email:$(m).val(),comm:$(d).val()},success:function(){$(e).val(""),$(a).val(""),$(t).val(""),$(n).val(""),$(o).val(""),$(l).val(""),$(r).val(""),$(s).val(""),$(i).val(""),$(m).val(""),$(d).val(""),$("#rgppp-modal .alert-success").fadeIn(400)},error:function(){$("#rgppp-modal .alert-danger").fadeIn(400)}}),!1)}),$("#ind-quiz-modal .submit").on("click",function(){var e=$("input[type=radio]:checked"),a=0,t=0;$(e).each(function(){a+=parseInt($(this).val(),10),10==$(this).val()&&t++});var n=Math.floor(t),o="";1>n?o='<p class="text-center">Based upon your Assessment, you may be a low risk gambler.</p>':1==n?o='<p class="text-center">Based upon your Assessment, you may be an at-risk gambler.</p>':n>=2&&3>=n?o='<p class="text-center">Based upon your Assessment, you may be a problem gambler.</p>':n>=4&&(o='<p class="text-center">Based upon your Assessment, you may be a compulsive gambler.</p>');var l='<h3 class="text-center text-info"><strong>You Answered Yes to '+n+" question(s).</strong></h3>"+o+'<br /><div class="table-responsive"><table class="table table-bordered"><tr><td>0</td><td>Low Risk/Social Gambler</td></tr><tr><td>1</td><td>At-Risk Gambler</td></tr><tr><td>2-3</td><td>Problem Gambler</td></tr><tr><td>4+</td><td>Compulsive Gambler</td></tr></table></div><p class="text-center">If you would like more information or need assistance with a gambling problem,</p><p class="text-center">please contact our <strong>Helpline</strong> at:</p><h4 class="text-center text-info">888-236-4848</h4>';return $("#ind-quiz-modal .modal-body").empty(),$("#ind-quiz-modal .modal-body").html(l),!1}),$("#lo-quiz-modal .submit").on("click",function(){var e=$("input[type=radio]:checked"),a=0,t=0;$(e).each(function(){a+=parseInt($(this).val(),10),10==$(this).val()&&t++});var n=Math.floor(t),o="";1>n?o='<p class="text-center">Based upon your Assessment, you may be a low risk gambler.</p>':1==n?o='<p class="text-center">Based upon your Assessment, you may be an at-risk gambler.</p>':n>=2&&3>=n?o='<p class="text-center">Based upon your Assessment, you may be a problem gambler.</p>':n>=4&&(o='<p class="text-center">Based upon your Assessment, you may be a compulsive gambler.</p>');var l='<h3 class="text-center text-info"><strong>You Answered Yes to '+n+" question(s).</strong></h3>"+o+'<br /><div class="table-responsive"><table class="table table-bordered"><tr><td>0</td><td>Low Risk/Social Gambler</td></tr><tr><td>1</td><td>At-Risk Gambler</td></tr><tr><td>2-3</td><td>Problem Gambler</td></tr><tr><td>4+</td><td>Compulsive Gambler</td></tr></table></div><p class="text-center">If you would like more information or need assistance with a gambling problem,</p><p class="text-center">please contact our <strong>Helpline</strong> at:</p><h4 class="text-center text-info">888-236-4848</h4>';return $("#lo-quiz-modal .modal-body").empty(),$("#lo-quiz-modal .modal-body").html(l),!1}),$("#teen-quiz-modal input[type=radio]").on("change",function(){0==$(this).val()&&($("#teen-quiz-modal .part-one").addClass("hidden"),$("#teen-quiz-modal .part-two").removeClass("hidden"))}),$("#teen-quiz-modal .submit").on("click",function(){var e=$("input[type=radio]:checked"),a=0,t=0;$(e).each(function(){a+=parseInt($(this).val(),10),10==$(this).val()&&t++});var n=Math.floor(t),o="";1>n?o='<p class="text-center">Based upon your Assessment, you may be a low risk gambler.</p>':1==n?o='<p class="text-center">Based upon your Assessment, you may be an at-risk gambler.</p>':n>=2&&3>=n?o='<p class="text-center">Based upon your Assessment, you may be a problem gambler.</p>':n>=4&&(o='<p class="text-center">Based upon your Assessment, you may be a compulsive gambler.</p>');var l='<h3 class="text-center text-info"><strong>You Answered Yes to '+n+" question(s).</strong></h3>"+o+'<br /><div class="table-responsive"><table class="table table-bordered"><tr><td>0</td><td>Low Risk/Social Gambler</td></tr><tr><td>1</td><td>At-Risk Gambler</td></tr><tr><td>2-3</td><td>Problem Gambler</td></tr><tr><td>4+</td><td>Compulsive Gambler</td></tr></table></div><p class="text-center">If you would like more information or need assistance with a gambling problem,</p><p class="text-center">please contact our <strong>Helpline</strong> at:</p><h4 class="text-center text-info">888-236-4848</h4>';if(8==n&&$("#teen-quiz-modal .part-two").hasClass("hidden"))var l='<h3 class="text-center text-info"><strong>You Answered Yes to '+n+' question(s).</strong></h3><p class="well well-sm">Having all “yes” responses indicates that you are a low-risk gambler. In other words, you recognize gambling as a leisure time activity, and don’t spend more money on gambling than you would on, say, going to the movies. You never spend money you don’t have on gambling, you never expect to win, losing doesn’t get you down, and you have other hobbies besides gambling.</p><p class="text-center">If you would like more information or need assistance with a gambling problem,</p><p class="text-center">please contact our <strong>Helpline</strong> at:</p><h4 class="text-center text-info">888-236-4848</h4>';return $("#teen-quiz-modal .modal-body").empty(),$("#teen-quiz-modal .modal-body").html(l),!1}),navigator.userAgent.match(/IEMobile\/10\.0/)){var i=document.createElement("style");i.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}")),document.querySelector("head").appendChild(i)}});