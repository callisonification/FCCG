<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The Florida Council on Compulsive Gambling (FCCG) is committed to increasing public awareness about problem and compulsive gambling. The FCCG provides services and support to residents in need of assistance, as well as to professionals and others servicing this population. The organization is governed by a volunteer Board of Directors and is one of more than 35 affiliates of the National Council on Problem Gambling.">
<meta name="author" content="Christopher Allison">
<meta name="google-translate-customization" content="2623524fd51e6b26-94ae3a04c0fe4378-gbe4f4c035a0cc0c6-14"></meta>
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>The Florida Council on Compulsive Gambling</title>

<!-- Twitter widget code -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- Google Analytics code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52198611-1', 'gamblinghelp.org');
  ga('send', 'pageview');
</script>

<!-- Load CSS -->
<link href="<?=base_url('css/main.css');?>" rel="stylesheet">
<link href="<?=base_url('css/media.css');?>" rel="stylesheet">
<link href="<?=base_url('css/plugins/nivo-lightbox.css');?>" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?=base_url('js/plugins/html5shiv.js');?>"></script>
      <script src="<?=base_url('js/plugins/respond.min.js');?>"></script>
<![endif]-->

</head>
	
<body>

<header> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header visible-xs">
        <p class="pull-left"> <a id="left-menu" href="#left-menu"> <span class="glyphicon glyphicon-align-justify"></span> </a> </p>
        <p class="pull-right"> <a id="right-menu" href="#right-menu"> <span class="glyphicon glyphicon-th-large"></span> </a> </p>
        <div class="sidr-right hidden">
          <ul>
            <li><a href="tel:+1800229933">Call Us</a></li>
            <li><a href="#" data-toggle="modal" data-target="#form-contact-modal" data-toggle="modal" data-target="#contact-form-modal">Email Us</a></li>
            <li><a href="http://webapp.icarol.com/pub/Messaging/StatusBadge.aspx?OrgNum=54632" target="_blank">Live Chat</a></li>
            <li class="nav-divider"><br />
            </li>
            <li><a href="https://www.facebook.com/gamblinghelp" target="_blank" title="Like us on Facebook!">Facebook</a></li>
            <li><a href="https://twitter.com/FLCouncil" target="_blank" title="Follow us on Twitter!">Twitter</a></li>
            <li><a href="https://www.youtube.com/channel/UCAPVUhfQG9oppoiEg2VlJgg" target="_blank" title="Watch us on YouTube!">YouTube</a></li>
            <li><a href="http://www.pinterest.com/888admitit/" target="_blank" title="Follow us on Pinterest!">Pintrest</a></li>
          </ul>
        </div>
      </div>
      <div class="navbar-header hidden-sm hidden-xs"> <a class="navbar-brand" href="<?=base_url();?>">FCCG</a> </div>
      <nav class="navbar-collapse navbar-right collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown"> 
            <?php if($this->uri->segment(1) == 'about'): ?>
          	<a href="#" class="dropdown-toggle active" data-toggle="dropdown">About FCCG <i class="caret"></i></a>
            <?php else: ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About FCCG <i class="caret"></i></a>
            <ul class="dropdown-menu norad">
              <li><a href="<?=site_url('about/history');?>">History &amp; Mission</a></li>
              <li><a href="<?=site_url('about/membership');?>">Membership &amp; Donations</a></li>
            </ul>
            <?php endif; ?>
          </li>
          <li class="dropdown"> 
            <?php if($this->uri->segment(1) == 'problem_gambling'): ?>
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">About Problem Gambling <i class="caret"></i></a>
            <?php else: ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Problem Gambling <i class="caret"></i></a>
            <ul class="dropdown-menu norad">
              <li><a href="<?=site_url('problem_gambling/affected');?>">Who's Affected?</a></li>            
              <li><a href="<?=site_url('problem_gambling/recovery');?>">Recovery Stories</a></li>
            </ul>
            <?php endif; ?>
          </li>
          <?php if( $this->uri->segment(1) == 'get_help' ): ?>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Get Help <i class="caret"></i></a>
            <ul class="dropdown-menu norad">
              <li><a href="<?=site_url('get_help/individuals');?>">Help for Individuals</a></li>
              <li><a href="<?=site_url('get_help/loved_ones');?>">Help for Loved Ones</a></li>
              <li><a href="<?=site_url('get_help/helpline');?>">Helpline Programs</a></li>
              <li><a href="<?=site_url('get_help/recovery_path');?>">Recovery Path</a></li>
              <li><a href="<?=site_url('get_help/success_stories');?>">Success Stories</a></li>
            </ul>
          </li>
          <?php endif; ?>
          <?php if( $this->uri->segment(1) == 'give_help' ): ?>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Give Help <i class="caret"></i></a>
            <ul class="dropdown-menu norad">
              <li><a href="<?=site_url('give_help/gambling_addiction');?>">About Gambling Addiction</a></li>
              <li><a href="<?=site_url('give_help/responsible_gambling');?>">Responsible Gambling</a></li>
              <li><a href="<?=site_url('give_help/programs');?>">Programs Information</a></li>
              <li><a href="<?=site_url('give_help/training');?>">Training Information</a></li>
              <li><a href="<?=site_url('give_help/law_legal');?>">Legal Information</a></li>
              <li><a href="<?=site_url('give_help/rgppp');?>">RGPPP Information</a></li>
            </ul>
          </li>
          <?php endif; ?>
          <li class="dropdown"> 
            <?php if( $this->uri->segment(1) == 'resources' ): ?>
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Resources <i class="caret"></i></a>
            <?php else: ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <i class="caret"></i></a>
            <ul class="dropdown-menu norad">
              <li><a href="<?=site_url('resources/publications');?>">Print Materials</a></li>
              <li><a href="<?=site_url('resources/videos');?>">Videos</a></li>
              <li><a href="<?=site_url('resources/toolkits');?>">Toolkits</a></li>
              <li><a href="<?=site_url('resources/research');?>">Research Materials</a></li>
              <li><a href="<?=site_url('resources/faq');?>">Frequently Asked Questions</a></li>
            </ul>
            <?php endif; ?>
          </li>
          <li><a href="<?=site_url('forum/');?>" target="new _blank">FCCG Forums</a></li>
          <li class="dropdown"> 
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span></a>
            <form class="dropdown-menu form-menu norad" method="post" action="<?=site_url('fccg/search');?>">
              <input type="text" class="form-control" name="search" placeholder="Search..." />
            </form>
          </li>
        </ul>
      </nav>
      <!--/.nav-collapse --> 
    </div>
  </div>
  <!-- /end navbar -->
  <!-- Google Translate widget -->
  <div class="container">
  	<div id="google_translate_element" class="translate pull-right"></div><script type="text/javascript"> function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true, gaId: 'UA-52198611-1'}, 'google_translate_element'); }
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </div><span class="clearfix"></span>
  <!-- end Google Translate -->
  <!-- Brand Banner -->
  <div class="brand-banner">
    <div class="container">
      <h1 class="pull-left hidden-xs">
          <a href="<?=base_url();?>">
              <img src="<?=site_url('assets/logos/new-logo.png');?>" class="img-circle" width="90" alt="Florida Council on Compulsive Gambling"/>
              Florida Council on Compulsive Gambling
          </a>
      </h1>
      <h1 class="pull-left visible-xs">
          <a href="<?=base_url();?>">
              <img src="<?=site_url('assets/logos/new-logo.png');?>" class="img-circle" width="80" alt="Florida Council on Compulsive Gambling"/> 
              FCCG
          </a>
      </h1>
      <div class="banner-contact pull-right">
        <p><small class="pull-right"><strong>24 Hour Helpline</strong></small></p>
        	<span class="clearfix"></span>
        <p><small class="pull-right">Confidential and Multilingual</small></p>
        	<span class="clearfix"></span>
        <h3>888-ADMIT-IT</h3>
        	<span class="clearfix"></span>
        <p><small class="pull-right"><strong>(236-4848)</strong></small></p>
        	<span class="clearfix"></span>
      </div>
      <span class="clearfix"></span>
    </div>
  </div>
  <!-- /end brand banner --> 
</header>
<div class="container">
  <hr class="divider" />
</div>