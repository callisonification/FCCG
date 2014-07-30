<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    <small><span class="glyphicon glyphicon-comment"></span></small> <?=$heading;?>
  </h1>
  <p class="lead">Add a new post, or view and revise previous ones.</p>
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
    <li class="active"><a href="#newsfeed" data-toggle="tab">News &amp; Updates</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content well"> 
    <!-- content goes here -->
    <div id="newsfeed" class="tab-pane active"> 
      <!-- begin form section -->
      <div class="col-md-5 well well-sm">
        <form id="news-feed-form" name="news-feed-form" action="<?=site_url('admin_crud/add_post');?>" method="post" role="form" enctype="multipart/form-data">
          <h4>Create a new post:</h4>
          <hr class="divider" />
          <div class="form-group">
            <label for="post_photo">Post Photo (optional)</label>
            <input type="file" name="post_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
          </div>
          <div class="form-group">
            <label for="post_title">Post Title</label>
            <input type="text" class="form-control" name="post_title" placeholder="Give this post a title">
          </div>
          <div class="form-group">
            <label for="post_body">Post Body</label>
            <textarea class="form-control" name="post_body">Write your post here</textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary btn-block" value="Add Post">
          </div>
        </form>
      </div>
      <!-- start current posts list -->
      <div class="col-md-6 col-md-offset-1 well well-sm">
        <h4>Current News Posts:</h4>
        <hr class="divider" />
        <br />
        <?php if(isset($news) && !empty($news)): ?>
        <?php foreach($news as $n): ?>
        <div class="media well"> 
          <!-- begin post content -->
          <?php if($n->img_path): ?>
          <img class="media-object thumbnail pull-left" src="<?=site_url('assets/news_imgs/'.$n->img_path);?>" alt="..." width="100">
          <?php endif; ?>
          <div class="media-body">
            <h4 class="media-heading">
              <?=$n->title;?>
            </h4>
            <?=html_entity_decode($n->content);?>
          </div>
          <!-- end post content -->
          <hr class="divider" />
          <br />
          <!-- add edit/delete buttons -->
            <p class="pull-left"><small><small>Posted by :
            <?=$n->author;?>
             on
            <?=$n->datetime;?>
            </small></small></p>          
            <div class="pull-right">
            <?php if($this->session->userdata('perm') == 2): ?>
              <a href="#"  class="news-edit" data-id="<?=$n->id;?>" title="edit post">Edit Post</a>
            <?php endif; ?>
            <?php if($this->session->userdata('perm') == 3): ?>
              <a href="#"  class="news-edit" data-id="<?=$n->id;?>" title="edit post">Edit Post</a> &nbsp; | &nbsp; 
              <a href="#" class="news-dlt" data-id="<?=$n->id;?>" title="delete post">Delete Post</a>
            <?php endif; ?>
              <span class="clearfix"></span> 
            </div>
          <!-- end edit/delete buttons --> 
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-primary">There are currently no new articles to show. Create one now!</p>
        <?php endif; ?>
        <!-- end current news posts --> 
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- Edit Post Modal -->
<div class="modal fade" id="edit-news-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit News Post</h4>
      </div>
      <div class="modal-body">
        <form id="news-feed-form" name="news-feed-form" action="<?=site_url('admin_crud/edit_post');?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="post_photo">Post Photo (optional)</label>
            <input type="file" name="post_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
            <p class="help-block img-path"><small>Current Image: </small></p>
          </div>
          <div class="form-group">
            <label for="post_title">Post Title</label>
            <input type="text" class="form-control" name="post_title" placeholder="Give this post a title">
          </div>
          <div class="form-group">
            <label for="post_body">Post Body</label>
            <textarea id="post_body" class="form-control" name="post_body"> </textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
          	<input type="hidden" name="news_id" value=""  />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Update News Post">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Post Modal -->
<div class="modal fade" id="dlt-news-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete News Post</h4>
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
