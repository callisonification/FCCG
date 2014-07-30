<!-- /container -->

<div class="container">
<div class="content-bar col-md-8 pull-right">
  <h3>
    <?=$heading;?>
  </h3>
  <hr class="divider">
  <p><em>The FCCG offers a broad range of training services to various professional organizations and furnishes such instruction via field experts.</em></p>
  <!-- body content here -->
  <div class="body-content">
    <div class="feature-image"> <img src="<?=site_url('assets/page_imgs/rgppp.jpg');?>" alt="RGPPP" class="thumbnail img-responsive" width="100%" /> </div>
    <hr class="divider">
    <p>The intent of a Responsible Gaming Program is to empower casino operators to devise a plan and related protocols to address varying situations that will emerge when encountering guests who are experiencing problems because of gambling.  One of the roles of the FCCG is to assist the gambling industry in establishing customer and employee based problem gambling awareness programs. The FCCG's <em>Responsible Gaming and Player Protection Program (RGPPP)</em> is a step-by-step comprehensive guide that helps the gaming industry navigate its way through conducting a self-assessment, devising an organizational philosophy, establishing an administrative and internal program structure, and developing problem and compulsive gambling policies and protocols.</p>
    <hr class="divider">
    <blockquote class="blockquote lead">&quot; The intent of a Responsible Gaming Program is to empower casino operators to devise a plan and related protocols to address varying situations&quot;</blockquote>
    <hr class="divider" />
    <p>Responsible gaming training and ongoing employee education is mandated by Florida statute for all state slot machine licensees. The FCCG has developed new hire and annual refresher training to help facilities adhere to the necessary regulations, and in turn provide an exceptional level of support for your patrons and employees. Casino employees are the eyes and ears of your daily operations and are often the first point of contact or first responder to guests. While employees are not counselors, they do provide liaison support to assure that patrons get the help they need while on the casino property. Gaming industry employees are known to be in the high risk group and are 5-10 times more likely to develop gambling problems than the general gambling population. For this reason, it is important for facility employees to have knowledge of resources for help specific for gaming industry staff available by internal and external programs/resources.</p>
    <hr class="divider">
    <blockquote class="blockquote lead">&quot; Casino employees are the eyes and ears of your daily operations and are often the first point of contact or first responder to guests.&quot;</blockquote>
    <hr class="divider" />
    <p>Currently the FCCG offers an online training module for all new hire trainings. <em>Improving the Odds</em> is an effective tool meant to save you time, while ensuring the necessary state regulations for employee training are met.</p>
    <br />
    <p><a href="#" class="label label-info" data-toggle="modal" data-target="#rgppp-modal">Click Here</a> to learn more about Online Gaming Industry Training.</p>
    <br />
    <p><a href="#" class="label label-info" data-toggle="modal" data-target="#rgppp-modal">Click Here</a> to request Annual RGPPP training at your facility.</p>
    <p>&nbsp;</p>
    <hr class="divider">
    <p>Thankfully, help is available and gambling addiction can be treated if recognized. If you need assistance, contact our 24 hour, confidential Helpline <strong>888-ADMIT-IT (888-236-4848)</strong> for resources and support.</p>
  </div>
</div>

<!-- RGPPP sign up form --> 
<!-- Modal -->
<div class="modal fade" id="rgppp-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">RGPPP Training Request</h4>
      </div>
      <div class="modal-body">
        <form role="form" name="rgppp-form" id="rgppp-form" method="post">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control norad" name="name" placeholder="Your Full Name" required="required" />
          </div>
          <div class="form-group">
            <label for="pos">Your Position / Title</label>
            <input type="text" class="form-control norad" name="pos" placeholder="Your Position / Title" required="required" />
          </div>
          <div class="form-group">
            <label for="fac">Your Facility</label>
            <input type="text" class="form-control norad" name="fac" placeholder="Your Facility" required="required" />
          </div>
          <div class="form-group">
            <label for="fac-man">Your Facility Manager</label>
            <input type="text" class="form-control norad" name="fac-man" placeholder="Facility Manager's Name" required="required" />
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control norad" name="email" placeholder="email@domain.com" required="required" />
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
            <textarea name="comments" class="form-control norad" rows="5" placeholder="Comments?"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-block btn-success submit norad" value="Request Information" />
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
