<!-- sidebar navigation -->

<div class="nav-sidebar col-xs-12 col-md-3 pull-left">
  <aside class="pin-it">
    <ul class="nav nav-stacked hidden-sm hidden-xs">
      <li>
        <? if($this->uri->segment(2) == 'publications'):?>
        <a href="<?=site_url('resources/publications');?>" class="active" data-child"">Print Materials</a>
        <? else:?>
        <a href="<?=site_url('resources/publications');?>">Print Materials</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
        <? if($this->uri->segment(2) == 'videos'):?>
        <a href="<?=site_url('resources/videos');?>" class="active">Videos</a>
        <? else:?>
        <a href="<?=site_url('resources/videos');?>">Videos</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
        <? if($this->uri->segment(2) == 'toolkits'):?>
        <a href="<?=site_url('resources/toolkits');?>" class="active">Toolkits</a>
        <? else:?>
        <a href="<?=site_url('resources/toolkits');?>">Toolkits</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
        <? if($this->uri->segment(2) == 'research'):?>
        <a href="<?=site_url('resources/research');?>" class="active">Research Materials</a>
        <? else:?>
        <a href="<?=site_url('resources/research');?>">Research Materials</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
        <? if($this->uri->segment(2) == 'faq'):?>
        <a href="<?=site_url('resources/faq');?>" class="active">Frequently Asked Questions</a>
        <? else:?>
        <a href="<?=site_url('resources/faq');?>">Frequently Asked Questions</a>
        <? endif;?>
      </li>      
    </ul>
    <div class="banner-space">
		<!-- ads here -->
    </div>
  </aside>
</div>
</div>
