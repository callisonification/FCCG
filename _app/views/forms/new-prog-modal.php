<!-- Modal -->
<div class="modal fade" id="new-prog-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add New Program</h4>
      </div>
      <div class="modal-body">
        <form id="add-prog-form" name="add-prog-form" action="<?=site_url('admin_crud/add_program');?>" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="post_photo">Program Photo</label>
            <input type="file" name="program_photo">
            <p class="help-block"><small>Files Supported: png | jpg | jpeg</small></p>
          </div>
          <div class="form-group">
            <label for="post_title">Program Title</label>
            <input type="text" class="form-control" name="program_title" placeholder="Give this post a title">
          </div>
          <div class="form-group">
            <label for="post_body">Program Body</label>
            <textarea class="form-control" name="program_body">Write your post here</textarea>
          </div>
          <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="<?=$this->session->userdata('user_name');?>" readonly="readonly">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary btn-block" value="Add Program">
          </div>
        </form>        
      </div>
    </div>
  </div>
</div>