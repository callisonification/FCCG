<?php $count = 0; ?>

<div class="programs">
  <?php foreach($toolkits as $tk): ?>
  <div class="toolkit-holder">
    <div class="media">
      <?php if($tk->img_path != null): ?>
      <a class="pull-left nivo" href="<?=site_url('assets/tks_imgs/'.$tk->img_path);?>" title="<?=$tk->title;?>"> 
        <img class="media-object thumbnail img-responsive" width="100" src="<?=site_url('assets/tks_imgs/'.$tk->img_path);?>" alt="<?=$tk->title;?>">
      </a>
      <?php endif; ?>
      <div class="media-body">
        <h4 class="media-heading">
          <?=$tk->title;?>
        </h4>
        <br />
        <div>
          <?=html_entity_decode($tk->content);?>
        </div>
      </div>
    </div>
  </div>
  <hr class="divider" />
  <?php endforeach; ?>
</div>
<!-- //end program row --> 
<!-- //page footer placed after programs content --> 
<br />
<hr class="divider">
    <p>Thankfully, help is available and gambling addiction can be treated if recognized. If you need assistance, contact our 24 hour, confidential Helpline <strong>888-ADMIT-IT (888-236-4848)</strong> for resources and support.</p>
</div>
</div>
