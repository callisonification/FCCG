<!-- sidebar navigation -->

<div class="nav-sidebar col-xs-12 col-md-3 pull-left">
  <aside>
    <ul class="nav nav-stacked hidden-sm hidden-xs">
      <li class="parent">
        <? if($this->uri->segment(2) == 'gambling_addiction'):?>
        <a href="<?=site_url('give_help/gambling_addiction');?>" class="active" data-child=".aga">About Gambling Addiction
          <span class="glyphicon glyphicon-chevron-up pull-right">&nbsp;</span>        
        </a>
        <? else:?>
        <a href="<?=site_url('give_help/gambling_addiction');?>" data-child=".aga">About Gambling Addiction
          <span class="glyphicon glyphicon-chevron-down pull-right">&nbsp;</span>        
        </a>
        <? endif;?>
      </li>
      <div class="container">
        <ul class="nav nav-stacked inline-subnav aga">
          <li>
            <? if($this->uri->segment(2) == 'gambler_types'):?>
            <a href="<?=site_url('give_help/gambler_types');?>" class="active">Action &amp; Escape Gamblers</a>
            <? else:?>
            <a href="<?=site_url('give_help/gambler_types');?>">Action &amp; Escape Gamblers</a>
            <? endif;?>
          </li>
          <li class="nav-divider"></li>
          <li>
            <? if($this->uri->segment(2) == 'diagnosing_addiction'):?>
            <a href="<?=site_url('give_help/diagnosing_addiction');?>" class="active">Diagnosing Addiction</a>
            <? else:?>
            <a href="<?=site_url('give_help/diagnosing_addiction');?>">Diagnosing Addiction</a>
            <? endif;?>
          </li>
          <li class="nav-divider"></li>
          <li>
            <? if($this->uri->segment(2) == 'stages'):?>
            <a href="<?=site_url('give_help/stages');?>" class="active">Stages of Addiction</a>
            <? else:?>
            <a href="<?=site_url('give_help/stages');?>">Stages of Addiction</a>
            <? endif;?>
          </li>
        </ul>
      </div>
      <li class="nav-divider"></li>
      <li class="parent">
        <? if($this->uri->segment(2) == 'responsible_gambling'):?>
        <a href="<?=site_url('give_help/responsible_gambling');?>" class="active" data-child=".rg">Responsible Gambling
			<span class="glyphicon glyphicon-chevron-up pull-right">&nbsp;</span>         
        </a>
        <? else:?>
        <a href="<?=site_url('give_help/responsible_gambling');?>" data-child='.rg'>Responsible Gambling
        	<span class="glyphicon glyphicon-chevron-down pull-right">&nbsp;</span> 
        </a>
        <? endif;?>
      </li>
      <div class="container">
        <ul class="nav nav-stacked inline-subnav rg">
          <li>
            <? if($this->uri->segment(2) == 'rgppp'):?>
            <a href="<?=site_url('give_help/rgppp');?>" class="active">RGPPP Information</a>
            <? else:?>
            <a href="<?=site_url('give_help/rgppp');?>">RGPPP Information</a>
            <? endif;?>
          </li>
      	  <li class="nav-divider"></li>          
          <li>
            <? if($this->uri->segment(2) == 'exclusion'):?>
            <a href="<?=site_url('give_help/exclusion');?>" class="active">Self Exclusion</a>
            <? else:?>
            <a href="<?=site_url('give_help/exclusion');?>">Self Exclusion</a>
            <? endif;?>
          </li>
          <li class="nav-divider"></li>
          <li>
            <? if($this->uri->segment(2) == 'gold_standard'):?>
            <a href="<?=site_url('give_help/gold_standard');?>" class="active">Gaming Gold Standard</a>
            <? else:?>
            <a href="<?=site_url('give_help/gold_standard');?>">Gaming Gold Standard</a>
            <? endif;?>
          </li>
        </ul>
      </div>
      <li class="nav-divider"></li>
      <li>
        <? if($this->uri->segment(2) == 'programs'):?>
        <a href="<?=site_url('give_help/programs');?>" class="active">Program Information</a>
        <? else:?>
        <a href="<?=site_url('give_help/programs');?>">Program Information</a>
        <? endif;?>
      </li>
      <li class="nav-divider"></li>
      <li class="parent">
        <? if($this->uri->segment(2) == 'training'):?>
        <a href="<?=site_url('give_help/training');?>" class="active" data-child=".ti">Training Information
        	<span class="glyphicon glyphicon-chevron-up pull-right">&nbsp;</span>
        </a>
        <? else:?>
        <a href="<?=site_url('give_help/training');?>" data-child=".ti">Training Information
        	<span class="glyphicon glyphicon-chevron-down pull-right">&nbsp;</span>
        </a>
        <? endif;?>
      </li>
      <div class="container">
        <ul class="nav nav-stacked inline-subnav ti">
          <li>
            <? if($this->uri->segment(2) == 'professionals'):?>
            <a href="<?=site_url('give_help/professionals');?>" class="active">Healthcare Professionals</a>
            <? else:?>
            <a href="<?=site_url('give_help/professionals');?>">Healthcare Professionals</a>
            <? endif;?>
          </li>
          <li class="nav-divider"></li>
          <li>
            <? if($this->uri->segment(2) == 'educators'):?>
            <a href="<?=site_url('give_help/educators');?>" class="active">Educators &amp; Counselors</a>
            <? else:?>
            <a href="<?=site_url('give_help/educators');?>">Educators &amp; Counselors</a>
            <? endif;?>
          </li>
        </ul>
      </div>
      <li class="nav-divider"></li>
      <li>
        <? if($this->uri->segment(2) == 'law_legal'):?>
        <a href="<?=site_url('give_help/law_legal');?>" class="active">Legal Information</a>
        <? else:?>
        <a href="<?=site_url('give_help/law_legal');?>">Legal Information</a>
        <? endif;?>
      </li>
    </ul>
    <div class="banner-space">
		<!-- ads here -->
    </div>
  </aside>
</div>
</div>
