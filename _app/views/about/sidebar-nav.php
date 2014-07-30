<!-- sidebar navigation -->

<div class="nav-sidebar col-xs-12 col-md-3 pull-left">
  <aside>
    <ul class="nav nav-stacked hidden-sm hidden-xs">
      <li>
      	<? if($this->uri->segment(2) == 'history'):?>
      	<a href="<?=site_url('about/history');?>" class="active">History &amp; Mission</a>
        <? else:?>
        <a href="<?=site_url('about/history');?>">History &amp; Mission</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li>
      	<? if($this->uri->segment(2) == 'membership'):?>
      	<a href="<?=site_url('about/membership');?>" class="active">Memberships &amp; Donations</a>
        <? else:?>
        <a href="<?=site_url('about/membership');?>">Memberships &amp; Donations</a>
        <? endif;?>
      </li>
    </ul>
    <div class="banner-space">
		<!-- ads here -->
    </div>
  </aside>
</div>
</div>
