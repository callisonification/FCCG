<!-- /container -->

<div class="container">
<div class="content-bar col-md-8 pull-right">
<h3>
  <?=$page[0]->page_heading;?>
</h3>
<hr class="divider">
<?=html_entity_decode($page[0]->page_intro);?>
<!-- body content here -->
<div class="body-content">
  <div class="feature-image"> 
    <img src="<?=site_url('assets/page_imgs/'.$page[0]->page_photo);?>" class="thumbnail img-responsive" width="100%" /> 
  </div>
  <hr class="divider">
  <?=html_entity_decode($page[0]->page_content);?>
</div>
