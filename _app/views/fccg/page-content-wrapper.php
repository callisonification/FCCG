<!-- /container -->

<div class="container">
<div class="content-bar col-md-8 pull-right">
  <h4>
    <?=$news[0]->title;?>
  </h4>
  <!-- body content here -->
  <div class="body-content">
    <?php if($news[0]->img_path): ?>
    <div class="feature-image"> 
      <img src="<?=site_url('assets/news_imgs/'.$news[0]->img_path);?>" alt="<?=$news[0]->title;?>" class="thumbnail img-responsive" width="100%" /> 
    </div>
    <?php endif; ?>
    <hr class="divider">
    <p><small>Posted by:
      <?=$news[0]->author;?>
      on
      <time class="text-muted" pubdate datetime="<?=$news[0]->datetime;?>">
        <?=$news[0]->datetime?>
      </time>
      </small></p>
    <br />
    <?=html_entity_decode($news[0]->content);?>
    <hr class="divider">
  </div>
</div>
