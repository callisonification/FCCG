<!-- /container -->
<div class="container">
<div class="content-bar col-md-8 pull-right">
  <h3>
    Search Results for <span class="text-muted"><?=$heading;?></span>
  </h3>
  <hr class="divider">
  <p><em><strong>
    <?=$heading;?>
  	<?php if(isset($results) && !empty($results) && $results != 'no results'): ?>
      </strong> returned <?=count($results);?> results.</em></p>
    <?php else: ?>
      </strong> returned 0 results.</em></p>
    <?php endif; ?>
    <br />
  <div class="body-content">
  	<?php if(isset($results) && !empty($results) && $results != 'no results'): ?>
    	<?php foreach($results as $result): ?>
            <div class="result">
                <h3><a href="<?=site_url($result->page_link);?>"><?=$result->page_heading;?></a></h3>
                <p><?=word_limiter(html_entity_decode($result->page_content), 30);?></p>
            </div>
            <br />
            <hr class="divider" />
    	<?php endforeach; ?>
    <?php else: ?>
    	<p><strong>Your search returned no results, please try again...</strong></p>
    <?php endif; ?>
    <br />
  </div>
</div>
