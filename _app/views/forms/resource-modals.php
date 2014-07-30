<!--
*
*	Edit/Delete modals for publications
*-->

<!-- Edit Pub Modal -->
<div class="modal fade" id="edit-pub-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Publication</h4>
      </div>
      <div class="modal-body">
        <form id="add-pub-form" name="add-pub-form" action="<?=site_url('admin_crud/edit_pub');?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="post_photo">Publication Photo</label>
            <input type="file" name="pub_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
            <p class="help-block img-path"><small>Current Image: </small></p>
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
          	<input type="hidden" name="pub_id" value="" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Update Publication">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Pub Modal -->
<div class="modal fade" id="dlt-pub-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Publication</h4>
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

<!--
*
*	Edit/Delete modals for resc videos
*-->

<!-- Edit Resc Vid Modal -->
<div class="modal fade" id="edit-revid-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Video</h4>
      </div>
      <div class="modal-body">
        <form id="add-vid-form" name="add-vid-form" action="<?=site_url('admin_crud/edit_video');?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="post_photo">Video Photo</label>
            <input type="file" name="vid_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
            <p class="help-block img-path"><small>Current Image: </small></p>
          </div>          
          <div class="form-group">
            <label for="post_title">Video Title</label>
            <input type="text" class="form-control" name="video_title" placeholder="Give this video a title">
          </div>
          <div class="form-group">
            <label for="post_title">Video Description</label>
            <textarea id="revid_content" class="form-control" name="video_content">Add video description</textarea>
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
          	<input type="hidden" name="revid_id" value="" />
          	<input type="hidden" name="parent" value="resources" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Update Video">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Resc Vid Modal -->
<div class="modal fade" id="dlt-revid-modal" aria-hidden="true">
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

<!--
*
*	Edit/Delete modals for toolkits
*-->

<!-- Edit toolkit Modal -->
<div class="modal fade" id="edit-kit-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Toolkit</h4>
      </div>
      <div class="modal-body">
        <form id="add-toolkit-form" name="add-toolkit-form" action="<?=site_url('admin_crud/edit_toolkit');?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="toolkit_photo">Toolkit Photo</label>
            <input type="file" name="toolkit_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
            <p class="help-block img-path"><small>Current Image: </small></p>
          </div>
          <div class="form-group">
            <label for="toolkit_title">Toolkit Title</label>
            <input type="text" class="form-control" name="toolkit_title" placeholder="Add toolkit title">
          </div>
          <div class="form-group">
            <label for="post_body">Toolkit Body</label>
            <textarea id="kit_content" class="form-control" name="toolkit_content">Add toolkit description</textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
          	<input type="hidden" name="kit_id" value="" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Update Toolkit">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete toolkit Modal -->
<div class="modal fade" id="dlt-kit-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Toolkit</h4>
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

<!--
*
*	Edit/Delete modals for research
*-->

<!-- Edit toolkit Modal -->
<div class="modal fade" id="edit-research-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Research</h4>
      </div>
      <div class="modal-body">
        <form id="add-research-form" name="add-research-form" action="<?=site_url('admin_crud/edit_research');?>" method="post" role="form" enctype="multipart/form-data">
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
            <textarea id="research_body" class="form-control" name="research_content">Write your post here</textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
          	<input type="hidden" name="research_id" value="" />
            <input type="submit" class="form-control btn btn-primary btn-block" value="Update Research">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete toolkit Modal -->
<div class="modal fade" id="dlt-research-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Research</h4>
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
