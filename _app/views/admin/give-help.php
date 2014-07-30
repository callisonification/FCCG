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
        <!-- //begin program content for Programs page -->
        <?php if($page->page_id == 'programs'): ?>
        <br  />
        <br  />
        <h4 class="pull-left">Current Programs</h4>
        <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#new-prog-modal">Add New Program</button>
        <span class="clearfix"></span>
        <hr class="divider" />
        <!-- foreach program here --> 
        <br />
        <?php if(isset($progs) && !empty($progs)): ?>
        <?php foreach($progs as $prog): ?>
        <div class="media well"> 
          <!-- begin post content -->
          <?php if($prog->img_path): ?>
          <img class="media-object thumbnail pull-left" src="<?=site_url('assets/prog_imgs/'.$prog->img_path);?>" alt="..." width="100">
          <?php endif; ?>
          <div class="media-body">
            <h4 class="media-heading">
              <?=$prog->title;?>
            </h4>
            <br />
            <div>
              <?=html_entity_decode($prog->content);?>
            </div>
          </div>
          <!-- end post content -->
          <hr class="divider" />
          <br />
          <!-- add edit/delete buttons -->
          <p class="pull-left"><small><small>Added by :
            <?=$prog->author;?>
             on
            <?=$prog->datetime;?>
            </small></small></p>
          <div class="pull-right"> 
          <?php if($this->session->userdata('perm') == 2): ?>
            <a href="#" class="prog-edit" data-id="<?=$prog->id;?>" title="edit post">Edit Program</a>
          <?php endif; ?>
          <?php if($this->session->userdata('perm') == 3): ?>
            <a href="#" class="prog-edit" data-id="<?=$prog->id;?>" title="edit post">Edit Program</a> &nbsp; | &nbsp; 
            <a href="#" class="prog-dlt" data-id="<?=$prog->id;?>" title="delete post">Delete Program</a>
          <?php endif; ?>
            <span class="clearfix"></span> 
          </div>
          <!-- end edit/delete buttons --> 
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-primary">There are currently no programs to show. Add one now!</p>
        <?php endif; ?>
        <!-- end current news posts -->
        
        <?php endif; ?>
        <!-- //end program content --> 
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
    <?php endforeach; ?>
  </div>
</div>
</div>

<!-- Edit Post Modal -->
<div class="modal fade" id="edit-prog-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Program</h4>
      </div>
      <div class="modal-body">
        <form id="add-prog-form" name="add-prog-form" action="<?=site_url('admin_crud/edit_prog');?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="post_photo">Program Photo</label>
            <input type="file" name="program_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
            <p class="help-block img-path"><small>Current Image: </small></p>
          </div>
          <div class="form-group">
            <label for="post_title">Program Title</label>
            <input type="text" class="form-control" name="program_title" placeholder="Give this post a title">
          </div>
          <div class="form-group">
            <label for="post_body">Program Body</label>
            <textarea id="post_body" class="form-control" name="program_body">Write your post here</textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
          	<input type="hidden" name="prog_id" value="" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Update Program">
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
<div class="modal fade" id="dlt-prog-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Program</h4>
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
