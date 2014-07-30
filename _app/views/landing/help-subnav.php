<!-- /container -->
<div class="container cta-billboard">
  <div class="inner container col-md-8 pull-left hidden-sm hidden-xs">
    <div class="carousel slide hidden-sm" data-ride="carousel"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target=".carousel" data-slide-to="0" class="active"></li>
        <li data-target=".carousel" data-slide-to="1"></li>
        <li data-target=".carousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner hidden-sm">
        <div class="item active one"> 
          <img src="<?=site_url('assets/site_photos/car-new.jpg');?>" alt="Take our self-assessment quiz" />
          <div class="carousel-caption">
            <p>
              <a href="#" class="btn cta-btn norad col-md-4 col-md-offset-4" data-toggle="modal" data-target="#ind-quiz-modal">Take Quiz</a>
            </p>
          </div>
          <!-- /end carousel caption --> 
        </div>
        <!-- /end item -->
        <div class="item two"> <img src="<?=site_url('assets/site_photos/car-resources.jpg');?>" alt="View Our Resources" />
          <div class="carousel-caption">
            <p><a href="<?=site_url('resources/publications')?>" class="btn cta-btn norad col-md-4 col-md-offset-4">View Resources</a></p>
          </div>
          <!-- /end carousel caption --> 
        </div>
        <!-- /end item --> 
        <div class="item three"> <img src="<?=site_url('assets/site_photos/car-training.jpg');?>" alt="View Training Information" />
          <div class="carousel-caption">
            <p><a href="<?=site_url('give_help/training')?>" class="btn cta-btn norad col-md-4 col-md-offset-4">View Training</a></p>
          </div>
          <!-- /end carousel caption --> 
        </div>
        <!-- /end item --> 
      </div>
      <!-- /end carousel inner --> 
      <!-- Controls --> 
      <a class="left carousel-control" href=".carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href=".carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    <!-- /end carousel --> 
  </div>
  <!-- /end inner container -->
  <div class="container">
    <div class="help-subnav row">
      <div class="get-help help col-xs-12 col-sm-6 col-md-4"> 
        <img src="<?=site_url('assets/site_photos/landing3.jpg');?>" alt="Get Help" class="img-responsive" />
        <div class="help-inner-panel col-xs-12">
          <h3>Get Help <span class="glyphicon glyphicon-chevron-up pull-right popup"></span></h3>
          <p>Do you or someone you know suffer from difficulties due to a gambling problem? Do you need advice or professional help regarding problem gambling?</p>
          <a href="<?=site_url('get_help/individuals');?>" class="btn btn-block btn-info">Get Help Now</a> </div>
      </div>
      <div class="give-help help col-xs-12 col-sm-6 col-md-4"> 
        <img src="<?=site_url('assets/site_photos/landing1.jpg');?>" alt="Give Help" class="img-responsive" />
        <div class="help-inner-panel col-xs-12">
          <h3>Give Help <span class="glyphicon glyphicon-chevron-up pull-right popup"></span></h3>
          <p>Do you want to offer professional services to individuals adversely affected by gambling, or would you like more information on trainings and certification?</p>
          <a href="<?=site_url('give_help/gambling_addiction');?>" class="btn btn-block btn-info">Give Help Now</a> </div>
      </div>
    </div>
    <!-- /end help-subnav -->
  </div>
</div>
