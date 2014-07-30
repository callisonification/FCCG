<!-- sidebar navigation -->

<div class="nav-sidebar col-xs-12 col-md-3 pull-left">
  <aside>
    <ul class="nav nav-stacked hidden-sm hidden-xs">
      <? if($this->uri->segment(2) == 'archive' || $this->uri->segment(2) == 'read_news' ):?>
      <li>
        <? if($this->uri->segment(2) == 'archive'):?>
        <a href="<?=site_url('fccg/archive');?>" class="active">FCCG News Archive</a>
        <? else:?>
        <a href="<?=site_url('fccg/archive');?>">FCCG News Archive</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <?php else: ?>
      <li> <a href="<?=site_url('about/history');?>" >About FCCG</a> </li>
      <li class="nav-divider"></li>
      <li> <a href="<?=site_url('problem_gambling/affected');?>" >About Problem Gambling</a> </li>
      <li class="nav-divider"></li>
      <li> <a href="<?=site_url('get_help/individuals');?>" >Get Help</a> </li>
      <li class="nav-divider"></li>
      <li> <a href="<?=site_url('give_help/gambling_addiction');?>" >Give Help</a> </li>
      <li class="nav-divider"></li>
      <li> <a href="<?=site_url('resources/publications');?>" >Resources</a> </li>
      <li class="nav-divider"></li>
      <?php endif; ?>
      <li> <a href="<?=base_url();?>" >Back to Home Page</a> </li>
    </ul>
    <div class="banner-space"> 
      <!-- ads here --> 
    </div>
  </aside>
</div>
</div>
