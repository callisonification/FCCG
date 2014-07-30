<!-- /container -->

<div class="container">
<div class="content-bar col-md-8 pull-right">
  <?php foreach($news as $news): ?>
  <h4>
    <?=$news->title;?>
  </h4>
  <!-- body content here -->
  <div class="body-content">
    <?php if($news->img_path): ?>
    <div class="feature-image"> <img src="<?=site_url('assets/news_imgs/'.$news->img_path);?>" alt="<?=$news->title;?>" class="thumbnail img-responsive" width="100%" /> </div>
    <?php endif; ?>
    <br />
    <?=word_limiter(html_entity_decode($news->content), 120);?>
    <br />
    <br />
    <br />
    <p class="pull-left"><small>Posted by:
      <?=$news->author;?>
      on
      <time class="text-muted" pubdate datetime="<?=$news->datetime;?>">
        <?=$news->datetime?>
      </time>
      </small></p>
    <p class="pull-right"><small> <a href="<?=site_url('fccg/read_news/'.$news->id);?>" title="Read full article" class="label label-info">Read More ...</a> </small></p>
    <span class="clearfix"></span>
    <hr class="divider">
    <br />
  </div>
  <?php endforeach; ?>
</div>
