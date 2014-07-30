<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    <small><span class="glyphicon glyphicon-list-alt"></span></small> <?=$heading;?>
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
        <!-- //begin program content for Programs page -->
        <?php if($page->page_id == 'publications'): ?>
        <h4>Current Publications</h4>
        <hr class="divider" />
        <!-- foreach program here --> 
        <br />
        <?php if(isset($pubs) && !empty($pubs)): ?>
        <?php foreach($pubs as $pub): ?>
        <div class="media well"> 
          <!-- begin post content -->
          <?php if($pub->img_path): ?>
          <img class="media-object thumbnail pull-left" src="<?=site_url('assets/pub_imgs/'.$pub->img_path);?>" alt="..." width="100">
          <?php endif; ?>
          <div class="media-body">
            <h4 class="media-heading">
              <?=$pub->title;?>
            </h4>
          </div>
          <!-- end post content -->
          <hr class="divider" />
          <br />
          <!-- add edit/delete buttons -->
            <p class="pull-left"><small><small>Added by :
            <?=$pub->author;?>
             on
            <?=$pub->datetime;?>
            </small></small></p>          
            <div class="pull-right"> 
            <?php if($this->session->userdata('perm') == 2): ?>
              <a href="#" class="pub-edit" data-id="<?=$pub->id;?>" title="edit post">Edit Publication</a>
            <?php endif; ?>
            <?php if($this->session->userdata('perm') == 3): ?>
              <a href="#" class="pub-edit" data-id="<?=$pub->id;?>" title="edit post">Edit Publication</a> &nbsp; | &nbsp;
              <a href="#" class="pub-dlt" data-id="<?=$pub->id?>" title="delete post">Delete Publication</a>
            <?php endif; ?>
            <span class="clearfix"></span> 
          </div>
          <!-- end edit/delete buttons --> 
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-primary">There are currently no <strong>Print Materials</strong> to show. Add one now!</p>
        <?php endif; ?>
        <!-- end current news posts -->   
      </div>
      <!-- page edit form -->
      <div class="col-md-5 col-md-offset-1 well well-sm">
        <form id="add-pub-form" name="add-pub-form" action="<?=site_url('admin_crud/add_pub');?>" method="post" role="form" enctype="multipart/form-data">
          <h4>Add New Publication</h4>
          <hr class="divider" />
          <div class="form-group">
            <label for="post_photo">Publication Photo</label>
            <input type="file" name="pub_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
          </div>
          <div class="form-group">
          	<label for="pubtype">Publication Type</label>
            <select name="pubtype" class="form-control">
            	<option class="text-muted">Select publication a type</option>
            	<option value="placard">Placard</option>
                <option value="brochure">Brochure</option>
                <option value="newsletter">Newsletter</option>
                <option value="poster">Poster</option>
                <option value="workbook">Workbook</option>
            </select>
          </div>
          <div class="form-group">
            <label for="post_title">Publication Title</label>
            <input type="text" class="form-control" name="pub_title" placeholder="Give this publication a title">
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary btn-block" value="Add Publication">
          </div>
        </form>
      </div>
      <!-- //end page edit form -->
      <?php endif; ?>
      <!-- //end publication content -->
      
      <!-- //begin video content for Videos page -->
        <?php if($page->page_id == 'videos'): ?>
        <h4>Current Videos</h4>
        <hr class="divider" />
        <!-- foreach program here --> 
        <br />
        <?php if(isset($vids) && !empty($vids)): ?>
        <?php foreach($vids as $vid): ?>
        <div class="media well"> 
          <!-- begin post content -->
          <?php if($vid->img_path): ?>
          <img class="media-object thumbnail pull-left" src="<?=site_url('assets/vid_imgs/'.$vid->img_path);?>" alt="..." width="100">
          <?php endif; ?>
          <div class="media-body">
            <h4 class="media-heading">
              <?=$vid->title;?>
            </h4>
            <br />
            <div>
              <?=html_entity_decode($vid->content);?>
            </div>
          </div>
          <!-- end post content -->
          <hr class="divider" />
          <br />
          <!-- add edit/delete buttons -->
            <p class="pull-left"><small><small>Added by :
            <?=$vid->author;?>
             on
            <?=$vid->datetime;?>
            </small></small></p>          
            <div class="pull-right">
            <?php if($this->session->userdata('perm') == 2): ?>
              <a href="#" class="revid-edit" data-id="<?=$vid->id;?>" title="edit post">Edit Video</a>
            <?php endif; ?>
            <?php if($this->session->userdata('perm') == 3): ?>
              <a href="#" class="revid-edit" data-id="<?=$vid->id;?>" title="edit post">Edit Video</a> &nbsp; | &nbsp; 
              <a href="#" class="revid-dlt" data-id="<?=$vid->id;?>" title="delete post">Delete Video</a>
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
            <label for="post_photo">Video Photo</label>
            <input type="file" name="vid_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
          </div>          
          <div class="form-group">
            <label for="post_title">Video Title</label>
            <input type="text" class="form-control" name="video_title" placeholder="Give this video a title">
          </div>
          <div class="form-group">
            <label for="post_title">Video Description</label>
            <textarea class="form-control" name="video_content">Add video description</textarea>
          </div>
          <div class="form-group">
          	<label for="pubtype">Category Type</label>
            <select name="category" class="form-control">
            	<option class="text-muted">Select a Category</option>
            	<option value="adolescents">Adolescents</option>
                <option value="students">College Students</option>
                <option value="hispanics">Hispanic</option>
                <option value="seniors">Seniors</option>
                <option value="general">General Public</option>
                <option value="professionals">Professionals</option>
            </select>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
          	<input type="hidden" name="parent" value="resources" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Add Video">
          </div>
        </form>
      </div>
      <!-- //end page edit form -->
      <?php endif; ?>
      <!-- //end video content -->
      
      <!-- //begin video content for Videos page -->
        <?php if($page->page_id == 'toolkits'): ?>
        <h4>Current Toolkits</h4>
        <hr class="divider" />
        <!-- foreach program here --> 
        <br />
        <?php if(isset($toolkits) && !empty($toolkits)): ?>
        <?php foreach($toolkits as $toolkit): ?>
        <div class="media well"> 
          <!-- begin post content -->
          <?php if($toolkit->img_path): ?>
          <img class="media-object thumbnail pull-left" src="<?=site_url('assets/tks_imgs/'.$toolkit->img_path);?>" alt="..." width="100">
          <?php endif; ?>
          <div class="media-body">
            <h4 class="media-heading">
              <?=$toolkit->title;?>
            </h4>
            <br />
            <div>
              <?=html_entity_decode($toolkit->content);?>
            </div>
          </div>
          <!-- end post content -->
          <hr class="divider" />
          <br />
          <!-- add edit/delete buttons -->
            <p class="pull-left"><small><small>Added by :
            <?=$toolkit->author;?>
             on
            <?=$toolkit->datetime;?>
            </small></small></p>          
            <div class="pull-right">
            <?php if($this->session->userdata('perm') == 2): ?>
              <a href="#" class="kit-edit" data-id="<?=$toolkit->id;?>" title="edit post">Edit Toolkit</a>
            <?php endif; ?>
            <?php if($this->session->userdata('perm') == 3): ?>
              <a href="#" class="kit-edit" data-id="<?=$toolkit->id;?>" title="edit post">Edit Toolkit</a> &nbsp; | &nbsp; 
              <a href="#" class="kit-dlt" data-id="<?=$toolkit->id;?>" title="delete post">Delete Toolkit</a>
            <?php endif; ?>
            <span class="clearfix"></span> 
          </div>
          <!-- end edit/delete buttons --> 
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-primary">There are currently no <strong>Toolkits</strong> to show. Add one now!</p>
        <?php endif; ?>
        <!-- end current news posts -->   
      </div>
      <!-- page edit form -->
      <div class="col-md-5 col-md-offset-1 well well-sm">
        <form id="add-toolkit-form" name="add-toolkit-form" action="<?=site_url('admin_crud/add_toolkit');?>" method="post" role="form" enctype="multipart/form-data">
          <h4>Add New Toolkit</h4>
          <hr class="divider" />
          <div class="form-group">
            <label for="post_photo">Toolkit Photo</label>
            <input type="file" name="toolkit_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
          </div>
          <div class="form-group">
            <label for="post_title">Toolkit Title</label>
            <input type="text" class="form-control" name="toolkit_title" placeholder="Add toolkit title">
          </div>
          <div class="form-group">
            <label for="post_body">Toolkit Body</label>
            <textarea class="form-control" name="toolkit_content">Add toolkit description</textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary btn-block" value="Add Toolkit">
          </div>
        </form>
      </div>
      <!-- //end page edit form -->
      <?php endif; ?>
      <!-- //end video content -->
      
      <!-- //begin research content for RM page -->
        <?php if($page->page_id == 'research'): ?>
        <h4>Current Research Materials</h4>
        <hr class="divider" />
        <!-- foreach program here --> 
        <br />
        <?php if(isset($research) && !empty($research)): ?>
        <?php foreach($research as $re): ?>
        <div class="media well"> 
          <!-- begin post content -->
          <div class="media-body">
            <h4 class="media-heading">
              <a href="<?=site_url('assets/research_pdfs/'.$re->pdf_path);?>" title="<?=$re->title;?>" target="_blank"><?=$re->title;?></a>
            </h4>
            <br />
            <div>
              <?=html_entity_decode($re->content);?>
            </div>
          </div>
          <!-- end post content -->
          <hr class="divider" />
          <br />
          <!-- add edit/delete buttons -->
            <p class="pull-left"><small><small>Added by :
            <?=$re->author;?>
             on
            <?=$re->datetime;?>
            </small></small></p>          
          <div class="pull-right">
          <?php if($this->session->userdata('perm') == 2): ?>
            <a href="#" class="research-edit" data-id="<?=$re->id;?>" title="edit post">Edit Research</a>
          <?php endif; ?> 
          <?php if($this->session->userdata('perm') == 3): ?>
            <a href="#" class="research-edit" data-id="<?=$re->id;?>" title="edit post">Edit Research</a> &nbsp; | &nbsp; 
            <a href="#" class="research-dlt" data-id="<?=$re->id;?>" title="delete post">Delete Research</a>
          <?php endif; ?> 
            <span class="clearfix"></span> 
          </div>
          <!-- end edit/delete buttons --> 
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-primary">There are currently no <strong>Research Materials</strong> to show. Add one now!</p>
        <?php endif; ?>
        <!-- end current news posts -->   
      </div>
      <!-- page edit form -->
      <div class="col-md-5 col-md-offset-1 well well-sm">
        <form id="add-research-form" name="add-research-form" action="<?=site_url('admin_crud/add_research');?>" method="post" role="form" enctype="multipart/form-data">
          <h4>Add New Research Material</h4>
          <hr class="divider" />
          <div class="form-group">
            <label for="post_photo">Research Material PDF</label>
            <input type="file" name="research_pdf">
            <p class="help-block"><small>Files Supported: pdf</small></p>
          </div>
          <div class="form-group">
            <label for="post_title">Research Material Title</label>
            <input type="text" class="form-control" name="research_title" placeholder="Give this post a title">
          </div>
          <div class="form-group">
            <label for="post_body">Research Material Body</label>
            <textarea class="form-control" name="research_content">Write your post here</textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary btn-block" value="Add Research Material">
          </div>
        </form>
      </div>
      <!-- //end page edit form -->
      <?php endif; ?>
      <!-- //end research content -->
      
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
