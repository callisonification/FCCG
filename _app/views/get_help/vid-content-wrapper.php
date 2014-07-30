<!-- /container -->

<div class="container">
<div class="content-bar col-md-8 pull-right">
  <h3>
    <?=$heading;?>
  </h3>
  <!-- body content here -->
  <div class="body-content">
    <?php if(isset($vids) && !empty($vids)) :?>
    <?php foreach($vids as $vid): ?>
    <hr class="divider" />
    <h3>
      <?=$vid->title;?>
    </h3>
    <br />
    <div class="thumbnail img-responsive">
    	<?=html_entity_decode($vid->iframe);?>
    </div>
    <br /><br />
    <p><span class="glyphicon glyphicon-film text-muted">&nbsp;</span>For more videos in this series please visit our <a href="https://www.youtube.com/user/fccg888/videos" title="FCCG YouTube Channel" target="_blank">YouTube</a> page</p>    
    <?php endforeach; ?>
    <?php else: ?>
    <p><strong>There are no videos at this time.</strong></p>
    <?php endif; ?>
    <br />
    <hr class="divider">
    <p>Thankfully, help is available and gambling addiction can be treated if recognized. If you need assistance, contact our 24 hour, confidential Helpline <strong>888-ADMIT-IT (888-236-4848)</strong> for resources and support.</p>
  </div>
</div>
