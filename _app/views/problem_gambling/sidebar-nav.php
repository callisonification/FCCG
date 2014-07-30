<!-- sidebar navigation -->

<div class="nav-sidebar col-xs-12 col-md-3 pull-left">
  <aside>
    <ul class="nav nav-stacked hidden-sm hidden-xs">
      <li class="parent">
        <? if($this->uri->segment(2) == 'affected'):?>
        <a href="<?=site_url('problem_gambling/affected');?>" class="active" data-child=".wa-options">Who's Affected? 
          <span class="glyphicon glyphicon-chevron-up pull-right">&nbsp;</span>
        </a>
        <? else:?>
        <a href="<?=site_url('problem_gambling/affected');?>" data-child=".wa-options">Who's Affected? 
          <span class="glyphicon glyphicon-chevron-down pull-right">&nbsp;</span>
        </a>
        <? endif;?>
      </li>
      <div class="container">
        <ul class="nav nav-stacked wa-options inline-subnav">
          <? if($this->uri->segment(2) == 'individuals'):?>
              <li><a href="<?=site_url('problem_gambling/individuals');?>" class="active">Individuals</a></li>
          <? else:?>
              <li><a href="<?=site_url('problem_gambling/individuals');?>">Individuals</a></li>
          <? endif;?>
              <li class="nav-divider"></li>
          <? if($this->uri->segment(2) == 'loved_ones'):?>
              <li><a href="<?=site_url('problem_gambling/loved_ones');?>" class="active">Loved Ones</a></li>
          <? else:?>
              <li><a href="<?=site_url('problem_gambling/loved_ones');?>">Loved Ones</a></li>
          <? endif;?>
              <li class="nav-divider"></li>
          <? if($this->uri->segment(2) == 'youth'):?>
              <li><a href="<?=site_url('problem_gambling/youth');?>" class="active">Youth</a></li>
          <? else:?>
              <li><a href="<?=site_url('problem_gambling/youth');?>">Youth</a></li>
          <? endif;?>
              <li class="nav-divider"></li>
          <? if($this->uri->segment(2) == 'students'):?>
              <li><a href="<?=site_url('problem_gambling/students');?>" class="active">College Students</a></li>
          <? else:?>
              <li><a href="<?=site_url('problem_gambling/students');?>">College Students</a></li>
          <? endif;?>
              <li class="nav-divider"></li>
          <? if($this->uri->segment(2) == 'seniors'):?>
              <li><a href="<?=site_url('problem_gambling/seniors');?>" class="active">Seniors</a></li>
          <? else:?>
              <li><a href="<?=site_url('problem_gambling/seniors');?>">Seniors</a></li>
          <? endif;?>
              <li class="nav-divider"></li>
          <? if($this->uri->segment(2) == 'others'):?>
              <li><a href="<?=site_url('problem_gambling/others');?>" class="active">Others</a></li>
          <? else:?>
              <li><a href="<?=site_url('problem_gambling/others');?>">Others</a></li>
          <? endif;?>
        </ul>
      </div>
      <li class="nav-divider"></li>
      <li>
        <? if($this->uri->segment(2) == 'recovery'):?>
        <a href="<?=site_url('problem_gambling/recovery');?>" class="active" data-child=".wa-options">Recovery Stories</a>
        <? else:?>
        <a href="<?=site_url('problem_gambling/recovery');?>">Recovery Stories</a>
        <? endif;?>
      </li>
    </ul>
    <div class="banner-space">
		<!-- ads here -->
    </div>
  </aside>
</div>
</div>
