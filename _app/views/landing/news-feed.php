<div class="container">
<!-- News and Updates feed -->
<hr class="divider" />
<h3 class="news-heading">News &amp; Updates</h3>
<section class="news-feed col-xs-12 col-md-7">
  <div class="row">
    <?php foreach($news as $news): ?>
    <hr class="divider" />
    <article>
      <?php if($news->img_path): ?>
        <img src="<?=site_url('assets/news_imgs/'.$news->img_path);?>" alt="<?=$news->title;?>" class="thumbnail img-responsive" />
      <?php endif; ?>
      <header class="nostyle">
        <h4><a href="<?=site_url('fccg/read_news/'.$news->id);?>" title="<?=$news->title;?>"><?=$news->title;?></a></h4>
       <br />
      </header>
      <section>
        <?=word_limiter(html_entity_decode($news->content), 120);?>
      </section>
      <br />
      <footer class="article-footer">
        <p class="pull-left"><small>Posted by:
          <?=$news->author;?>
          on
          <time class="text-muted" pubdate datetime="<?=$news->datetime;?>">
            <?=$news->datetime?>
          </time>
        </small></p>
        <p class="pull-right"><small>
          <a href="<?=site_url('fccg/read_news/'.$news->id);?>" title="Read full article" class="label label-info">Read More ...</a>
        </small></p>
      </footer>
    </article>
    <span class="clearfix"></span>
    <?php endforeach; ?>
    <span class="clearfix"></span> </div>
</section>
<!-- /end News and Updates --> 
