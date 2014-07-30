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
    <div class="tab-pane <?=$page->active;?>" id="<?=$page->page_id?>">
      <div class="col-md-6 well well-sm"> 
        <!-- //begin video content for Videos page -->
        <?php if($page->page_id == 'recovery'): ?>
        <h4>Current Videos</h4>
        <hr class="divider" />
        <!-- foreach program here --> 
        <br />
        <?php if(isset($vids) && !empty($vids)): ?>
        <?php foreach($vids as $vid): ?>
        <div class="media well"> 
          <!-- begin post content -->
          <div class="media-body">
            <h4 class="media-heading">
              <?=$vid->title;?>
            </h4>
            <br />
            <div class="thumbnail img-responsive">
              <?=html_entity_decode($vid->iframe);?>
            </div>
          </div>
          <!-- end post content -->
          <hr class="divider" />
          <br />
          <!-- add edit/delete buttons -->
          <p class="pull-left"><small><small>Post by :
            <?=$vid->author;?>
            | on
            <?=$vid->datetime;?>
            </small></small></p>
          <div class="pull-right">
          <?php if($this->session->userdata('perm') == 2): ?>
            <a href="#" class="vid-edit" data-id="<?=$vid->id;?>" title="edit post">Edit Video</a>
          <?php endif; ?>
          <?php if($this->session->userdata('perm') == 3): ?>
            <a href="#" class="vid-edit" data-id="<?=$vid->id;?>" title="edit post">Edit Video</a> &nbsp; | &nbsp; 
            <a href="#" class="vid-dlt" data-id="<?=$vid->id;?>" title="delete post">Delete Video</a>
          <?php endif; ?> 
            <span class="clearfix"></span> 
          </div>
          <!-- end edit/delete buttons --> 
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-primary">There are currently no <strong>Videos</strong> to show. Add one now!</p>
        <?php endif; ?>
        <!-- end current news posts --> 
      </div>
      <!-- page edit form -->
      <div class="col-md-5 col-md-offset-1 well well-sm">
        <form id="add-vid-form" name="add-vid-form" action="<?=site_url('admin_crud/add_video');?>" method="post" role="form" enctype="multipart/form-data">
          <h4>Add New Video</h4>
          <hr class="divider" />
          <div class="form-group">
            <label for="post_title">Video Title</label>
            <input type="text" class="form-control" name="video_title" placeholder="Give this video a title">
          </div>
          <div class="form-group">
            <label for="post_title">Video iFrame</label>
            <input type="text" class="form-control" name="video_iframe" placeholder="Add YouTube iFrame here">
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
          	<input type="hidden" name="parent" value="problem_gambling" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Add Video">
          </div>
        </form>
      </div>
      <!-- //end page edit form -->
      <?php else: ?>
      <!-- //end video content -->
      
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
      <div> <img src="<?=site_url('assets/page_imgs/'.$page->page_photo);?>" alt="..." class="thumbnail img-responsive" width="100%" /> </div>
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
          <p class="help-block"><small>Current Image:
            <?=$page->page_photo;?>
            </small></p>
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
  <?php endif; ?>
  <?php endforeach; ?>
</div>
</div>
</div>

<!-- Edit Post Modal -->
<div class="modal fade" id="edit-vid-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Video</h4>
      </div>
      <div class="modal-body">
        <form id="add-vid-form" name="add-vid-form" action="<?=site_url('admin_crud/edit_video');?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="post_title">Video Title</label>
            <input type="text" class="form-control" name="video_title" placeholder="Give this video a title">
          </div>
          <div class="form-group">
            <label for="post_title">Video iFrame</label>
            <input type="text" class="form-control" name="video_iframe" placeholder="Add YouTube iFrame here">
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
          	<input type="hidden" name="vid_id" value=""  />          
          	<input type="hidden" name="parent" value="problem_gambling" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Edit Video">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Post Modal -->
<div class="modal fade" id="dlt-vid-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Video</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
        <a href="" class="btn btn-danger pull-right">Delete</a>
      </div>
    </div>
  </div>
</div>

