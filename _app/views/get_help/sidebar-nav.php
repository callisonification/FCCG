<!-- sidebar navigation -->

<div class="nav-sidebar col-xs-12 col-md-3 pull-left">
  <aside class="pin-it">
    <ul class="nav nav-stacked hidden-sm hidden-xs">
      <li>
      	<? if($this->uri->segment(2) == 'individuals'):?>
      	<a href="<?=site_url('get_help/individuals');?>" class="active">Help for Individuals</a>
        <? else:?>
        <a href="<?=site_url('get_help/individuals');?>">Help for Individuals</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
      	<? if($this->uri->segment(2) == 'loved_ones'):?>
      	<a href="<?=site_url('get_help/loved_ones');?>" class="active">Help for Loved Ones</a>
        <? else:?>
        <a href="<?=site_url('get_help/loved_ones');?>">Help for Loved Ones</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
      	<? if($this->uri->segment(2) == 'helpline'):?>
      	<a href="<?=site_url('get_help/helpline');?>" class="active">Helpline Programs</a>
        <? else:?>
        <a href="<?=site_url('get_help/helpline');?>">Helpline Programs</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
      	<? if($this->uri->segment(2) == 'recovery_path'):?>
      	<a href="<?=site_url('get_help/recovery_path');?>" class="active">Recovery Path</a>
        <? else:?>
        <a href="<?=site_url('get_help/recovery_path');?>">Recovery Path</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
      	<? if($this->uri->segment(2) == 'success_stories'):?>
      	<a href="<?=site_url('get_help/success_stories');?>" class="active">Success Stories</a>
        <? else:?>
        <a href="<?=site_url('get_help/success_stories');?>">Success Stories</a>
        <? endif;?>
      </li>
      
    </ul>
    <div class="banner-space">
      <div class="ad col-xs-12"></div>
      <div class="ad col-xs-6"></div>
      <div class="ad col-xs-6"></div>
      <div class="ad col-xs-12"></div>
    </div>
  </aside>
</div>
</div>
