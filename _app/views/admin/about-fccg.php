<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    <small><span class="glyphicon glyphicon-file"></span></small> <?=$heading;?>
  </h1>
  <p class="lead">Click on tab to edit that page's content.</p>
  <br />
  <?php if( isset($msg) ): ?>
  <div class="alert alert-<?=$type;?> alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <p>
      <?=$msg;?>
    </p>
  </div>
  <?php endif; ?>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <?php foreach($pages as $page): ?>
    <li class="<?=$page->active;?>"><a href="#<?=$page->page_id;?>" data-toggle="tab">
      <?=$page->page_heading;?>
      </a></li>
    <?php endforeach; ?>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content well">
    <?php foreach($pages as $page): ?>
    <div class="tab-pane <?=$page->active?>" id="<?=$page->page_id?>">
      <div class="col-md-6 well well-sm">
        <h4>Current Page Content</h4>
        <hr class="divider" />
        <!-- page content preview -->
        <div>
          <?=html_entity_decode($page->page_heading);?>
        </div>
        <br />
        <div>
          <?=html_entity_decode($page->page_intro);?>
        </div>
        <div>
          <img src="<?=site_url('assets/page_imgs/'.$page->page_photo);?>" alt="<?=$page->page_title;?>" class="thumbnail img-responsive" />
        </div>
        <br />
        <div>
          <?=html_entity_decode($page->page_content);?>
        </div>
        <div>
          <?=html_entity_decode($page->page_footer);?>
        </div>
        <!-- //end page content --> 
      </div>
      <!-- page edit form -->
      <div class="col-md-5 col-md-offset-1 well well-sm">
        <form id="history-update-form" name="history-update-form" action="<?=site_url('admin_crud/edit_page');?>" method="post" role="form" enctype="multipart/form-data">
          <h4>Edit Page Content:</h4>
          <hr class="divider" />
          <div class="form-group">
            <label for="post_title">Page Title</label>
            <input type="text" class="form-control" name="page_title" placeholder="Edit Page Title" value="<?=$page->page_title;?>">
          </div>
          <div class="form-group">
            <label for="post_title">Page Heading</label>
            <input type="text" class="form-control" name="page_heading" placeholder="Edit Page Heading" value="<?=$page->page_heading;?>">
          </div>
          <div class="form-group">
            <label for="post_title">Page Photo</label>
            <input type="file" name="page_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
            <?php if($page->page_photo): ?>
              <p class="help-block"><small>Current Image: <?=$page->page_photo;?></small></p>
            <?php endif; ?>           
          </div>
          <div class="form-group">
            <label for="post_title">Page Intro</label>
            <textarea class="form-control" name="page_intro">
            	<?php if( isset($page->page_intro) ): ?>
                <?=$page->page_intro;?>
                <?php else: ?>
                Write your content here...
                <?php endif; ?>
            </textarea>
          </div>
          <div class="form-group">
            <label for="post_title">Page Content</label>
            <textarea class="form-control" name="page_content">
            	<?php if( isset($page->page_content) ): ?>
                <?=$page->page_content;?>
                <?php else: ?>
                Write your content here...
                <?php endif; ?>
            </textarea>
          </div>
          <div class="form-group">
            <label for="post_title">Page Footer</label>
            <textarea class="form-control" name="page_footer">
            	<?php if( isset($page->page_footer) ): ?>
                <?=$page->page_footer;?>
                <?php else: ?>
                Write your content here...
                <?php endif; ?>
            </textarea>
          </div>
          <div class="form-group">
            <label for="post_title">Edited By</label>
            <input type="text" class="form-control" name="page_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <input type="hidden" name="page_id" value="<?=$page->id;?>" />
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary btn-block" value="Save Changes">
          </div>
        </form>
      </div>
      <!-- //end page edit form --> 
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
</div>
