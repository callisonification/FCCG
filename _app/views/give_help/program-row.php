<?php $count = 0; ?>
<div class="programs row">
  <?php foreach($progs as $prog): ?>
  <div class="col-sm-6 col-md-6 program">
    <div class="thumbnail">
      <?php if($prog->img_path != null): ?>
        <img src="<?=site_url('assets/prog_imgs/'.$prog->img_path);?>" class=" img-responsive" width="100%" /> 
      <?php endif; ?>
      <div class="caption">
        <h5 class="prog-title"><?=$prog->title?></h5>
        <hr />
        <div class="prog-content">
		  <?=html_entity_decode($prog->content);?>
        </div>
        <br />
        <p class="prog-link pull-right">
          <small><a href="#">Read More <span class="glyphicon glyphicon-chevron-down"></span></a></small>
        </p>
        <span class="clearfix"></span>
        <p class="prog-btn">
          <a href="#" class="btn btn-info btn-block norad" data-toggle="modal" data-target="#prog-modal" role="button">Request Program</a>
        </p>
      </div>
    </div>
  </div>
    <!-- uses PHP count and modulo to determine each rows length -->
    <?php $count++; ?>
    <?php if($count % 2 == 0): ?>
      <!-- adds a clearfix when 2 modules are present in a row -->
      <span class="clearfix"></span>
    <?php endif; ?>
  <?php endforeach; ?>
  <!-- end PHP count loop -->
</div>
<!-- //end program row -->
<!-- //page footer placed after programs content -->
<br />
<hr class="divider">
<?=html_entity_decode($page[0]->page_footer);?>
</div>

<!-- Program Request Modal -->
<div class="modal fade" id="prog-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Request Program Information</h4>
      </div>
      <div class="modal-body">
        <form role="form" name="prog-req-form" id="prog-req-form" method="post" action="?">
          <div class="form-group">
            <label for="prog-title">Program Title</label>
            <input type="text" class="form-control" name="prog-title" value="" readonly="readonly" />
          </div>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" name="name" placeholder="Your Full Name" />
          </div>
          <div class="form-group">
              <label for="address1">Your Address:</label>
              <input type="text" name="address1" class="form-control norad" placeholder="76 Totters Lane" required="required" />
              <br />
              <input type="text" name="address2" class="form-control norad" placeholder="Apt 123 (optional)" />
          </div>
          <div class="form-group pull-left">
            <div class="col-lg-4 sm-input">
              <label for="city">City:</label>
              <input type="text" name="city" class="form-control norad" required="required" />
            </div>
            <div class="col-lg-4 sm-input">
              <label for="state">State:</label>
              <input type="text" name="state" class="form-control norad" maxlength="2" min="2" required="required" />
            </div>
            <div class="col-lg-4 sm-input">
              <label for="zip">Zip:</label>
              <input type="text" name="zip" class="form-control norad" maxlength="5" min="5" required="required" />
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="email@domain.com" required="required" />
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="888-777-6543" required="required" />
          </div>
          <div class="form-group">
          <input type="submit" class="btn btn-block submit norad" value="Request Program" />
          </div>
          <div class="alert alert-danger norad" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <p><small>There was an error, Please try again...</small></p>
          </div>
          <div class="alert alert-success norad" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <p><small>Request sent successfully, Thank You!</small></p>
          </div>          
        </form>
      </div>
    </div>
  </div>
</div>