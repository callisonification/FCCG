<!-- /container -->

<div class="container">
<div class="content-bar col-md-8 pull-right">
  <h3>
    <?=$heading;?>
  </h3>
  <hr class="divider">
  <p><em>The FCCG develops a series of written materials, including brochures, newsletters, and workbooks that provide a wealth of information on particular populations or aspects of gambling.</em></p>
  <br /><hr /><br />
  <!-- body content here -->
  <div class="body-content">
    <h4><small><span class="glyphicon glyphicon-film">&nbsp;</span></small>Videos for Adolescents</h4><br />
    <?php foreach($vids as $vid): ?>
      <?php if($vid->category == 'adolescents'):?>     
    <div class="video-holder">
      <div class="media"> 
        <?php if($vid->img_path != null): ?>
        <a class="pull-left nivo" href="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" title="<?=$vid->title;?>">
          <img class="media-object thumbnail img-responsive" width="100" src="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" alt="<?=$vid->title;?>"> 
        </a>
        <?php endif; ?>
        <div class="media-body">
          <h4 class="media-heading"><?=$vid->title;?></h4>
          <p><?=html_entity_decode($vid->content);?></p>
        </div>
      </div>
    </div>
    <br />
    <hr class="divider" />
      <?php endif; ?>
    <?php endforeach; ?>
    
    <!-- section break -->
    
    <h4><small><span class="glyphicon glyphicon-film">&nbsp;</span></small>Videos for College Students</h4><br />
    <?php foreach($vids as $vid): ?>
      <?php if($vid->category == 'students'):?>     
    <div class="video-holder">
      <div class="media"> 
        <?php if($vid->img_path != null): ?>
        <a class="pull-left nivo" href="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" title="<?=$vid->title;?>">
          <img class="media-object thumbnail img-responsive" width="100" src="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" alt="<?=$vid->title;?>"> 
        </a>
        <?php endif; ?>
        <div class="media-body">
          <h4 class="media-heading"><?=$vid->title;?></h4>
          <p><?=html_entity_decode($vid->content);?></p>
        </div>
      </div>
    </div>
    <hr class="divider" />
      <?php endif; ?>
    <?php endforeach; ?>
    
    <!-- section break -->
    
    <h4><small><span class="glyphicon glyphicon-film">&nbsp;</span></small>Videos for Hispanics</h4><br />
    <?php foreach($vids as $vid): ?>
      <?php if($vid->category == 'hispanics'):?>     
    <div class="video-holder">
      <div class="media"> 
        <?php if($vid->img_path != null): ?>
        <a class="pull-left nivo" href="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" title="<?=$vid->title;?>">
          <img class="media-object thumbnail img-responsive" width="100" src="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" alt="<?=$vid->title;?>"> 
        </a>
        <?php endif; ?>
        <div class="media-body">
          <h4 class="media-heading"><?=$vid->title;?></h4>
          <p><?=html_entity_decode($vid->content);?></p>
        </div>
      </div>
    </div>
    <br />
    <hr class="divider" />
      <?php endif; ?>
    <?php endforeach; ?>
    
    <!-- section break -->
    
    <h4><small><span class="glyphicon glyphicon-film">&nbsp;</span></small>Videos for Seniors</h4><br />
    <?php foreach($vids as $vid): ?>
      <?php if($vid->category == 'seniors'):?>     
    <div class="video-holder">
      <div class="media"> 
        <?php if($vid->img_path != null): ?>
        <a class="pull-left nivo" href="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" title="<?=$vid->title;?>">
          <img class="media-object thumbnail img-responsive" width="100" src="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" alt="<?=$vid->title;?>"> 
        </a>
        <?php endif; ?>
        <div class="media-body">
          <h4 class="media-heading"><?=$vid->title;?></h4>
          <p><?=html_entity_decode($vid->content);?></p>
        </div>
      </div>
    </div>
    <br />
    <hr class="divider" />
      <?php endif; ?>
    <?php endforeach; ?>
    
    <!-- section break -->
    
    <h4><small><span class="glyphicon glyphicon-film">&nbsp;</span></small>Videos for the General Public</h4><br />
    <?php foreach($vids as $vid): ?>
      <?php if($vid->category == 'general'):?>     
    <div class="video-holder">
      <div class="media"> 
        <?php if($vid->img_path != null): ?>
        <a class="pull-left nivo" href="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" title="<?=$vid->title;?>">
          <img class="media-object thumbnail img-responsive" width="100" src="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" alt="<?=$vid->title;?>"> 
        </a>
        <?php endif; ?>
        <div class="media-body">
          <h4 class="media-heading"><?=$vid->title;?></h4>
          <p><?=html_entity_decode($vid->content);?></p>
        </div>
      </div>
    </div>
    <br />
    <hr class="divider" />
      <?php endif; ?>
    <?php endforeach; ?>
    
    <!-- section break -->
    
    <h4><small><span class="glyphicon glyphicon-film">&nbsp;</span></small>Videos for various Professionals</h4><br />
    <?php foreach($vids as $vid): ?>
      <?php if($vid->category == 'professionals'):?>     
    <div class="video-holder">
      <div class="media"> 
        <?php if($vid->img_path != null): ?>
        <a class="pull-left nivo" href="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" title="<?=$vid->title;?>">
          <img class="media-object thumbnail img-responsive" width="100" src="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" alt="<?=$vid->title;?>"> 
        </a>
        <?php endif; ?>
        <div class="media-body">
          <h4 class="media-heading"><?=$vid->title;?></h4>
          <p><?=html_entity_decode($vid->content);?></p>
        </div>
      </div>
    </div>
    <br />
    <hr class="divider" />
      <?php endif; ?>
    <?php endforeach; ?>
    <p>Thankfully, help is available and gambling addiction can be treated if recognized. If you need assistance, contact our 24 hour, confidential Helpline <strong>888-ADMIT-IT <small>(888-236-4848)</small></strong> for resources and supports.</p>
  </div>
</div>
