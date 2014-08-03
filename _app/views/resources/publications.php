<!-- /container -->

<div class="container">
<div class="content-bar col-xs-12 col-md-8 pull-right">
  <h3>
    <?=$heading;?>
  </h3>
  <hr class="divider">
  <p><em>The FCCG develops a series of written materials, including brochures, newsletters, and workbooks that provide a wealth of information on particular populations or aspects of gambling.</em></p>
  <br /><hr /><br />
  
  <!-- body content here -->
  
  <div class="body-content">
    <p><strong>Brochures and Placards</strong> – provides information about problem gambling and FCCG programs for diverse populations like women, seniors, youth, impaired professionals, college students, various ethnic populations, treatment professionals, employers, military personnel and veterans, caregivers, gaming employees and more.</p>
    <div class="row pub-container">
    <?php $count = 0;?>
    <?php foreach($pubs as $pub): ?>
      <?php if($pub->pub_type == 'placard' || $pub->pub_type == 'brochure'):?>
        <a class="nivo col-xs-3" href="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" title="<?=$pub->title;?>">
      		<img src="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" alt="<?=$pub->title;?>" class="thumbnail img-responsive" />
        </a>
        <?php $count++; ?>
        <?php if($count % 4 == 0): ?>
         <span class="clearfix"></span>
        <?php endif; ?>
      <?php endif;?>    
	<?php endforeach; ?>
    </div>
    <br />
    
    <!-- brochure content -->
    
    <hr class="divider" />
    <p><strong>Newsletters</strong> – The FCCG issues three different newsletters: FOCUS (general population), Senior FOCUS in both English and Spanish (older adults and senior service professionals), and Gaming FOCUS (gaming industry professionals). Each newsletter is full of important research, including program and gambling related information for their prospective audience highlighting a variety of topics.</p>
	<div class="row pub-container">
    <?php $count = 0;?>
    <?php foreach($pubs as $pub): ?>
      <?php if($pub->pub_type == 'newsletter'):?>
        <a class="nivo col-xs-3" href="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" title="<?=$pub->title;?>">
      		<img src="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" alt="<?=$pub->title;?>" class="thumbnail img-responsive" />
        </a>
        <?php $count++; ?>
        <?php if($count % 4 == 0): ?>
         <span class="clearfix"></span>
        <?php endif; ?>
      <?php endif;?>    
	<?php endforeach; ?>
    </div>
    <br />
    
    <!-- newsletter content -->
    
    <hr class="divider" />
    <p><strong>Posters</strong> - In addition to brochures and newsletters, the FCCG produces a series of posters geared toward youth, college students, adults, elders, and has others that have been specially prepared to accompany the FCCG’s programs for the workplace, medical/health centers, substance abuse clinics, gambling facilities, and elsewhere.</p>
	<div class="row pub-container">
    <?php $count = 0;?>
    <?php foreach($pubs as $pub): ?>
      <?php if($pub->pub_type == 'poster'):?>
        <a class="nivo col-xs-3" href="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" title="<?=$pub->title;?>">
      		<img src="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" alt="<?=$pub->title;?>" class="thumbnail img-responsive" />
        </a>
        <?php $count++; ?>
        <?php if($count % 4 == 0): ?>
         <span class="clearfix"></span>
        <?php endif; ?>
      <?php endif;?>    
	<?php endforeach; ?>
    </div>
    <br />
    
    <!-- poster content -->
    
    <hr class="divider" />
    <p><strong>Self Help Recovery Workbooks</strong> – The FCCG's "A Chance for Change" workbooks outline a comprehensive self-help program for gamblers, loved ones, young adults, and elder gamblers. This seven-part series of self-help recovery workbooks is designed to help individuals experiencing gambling related difficulties to eliminate self-defeating negative behaviors, to think clearly, and make better decisions to lead a healthier lifestyle. Workbooks may be utilized independently or in conjunction with support groups, professional counseling, or part of a law enforcement restitution program</p>
	<div class="row pub-container">
    <?php $count = 0;?>
    <?php foreach($pubs as $pub): ?>
      <?php if($pub->pub_type == 'workbook'):?>
        <a class="nivo col-xs-3" href="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" title="<?=$pub->title;?>">
      		<img src="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" alt="<?=$pub->title;?>" class="thumbnail img-responsive" />
        </a>
        <?php $count++; ?>
        <?php if($count % 4 == 0): ?>
         <span class="clearfix"></span>
        <?php endif; ?>
      <?php endif;?>    
	<?php endforeach; ?>
    </div>
    <br />
    
    <!-- self help content -->
    
    <hr class="divider" />
    <p>Thankfully, help is available and gambling addiction can be treated if recognized. If you need assistance, contact our 24 hour, confidential Helpline <strong>888-ADMIT-IT (888-236-4848)</strong> for resources and supports.</p>
  </div>
</div>
