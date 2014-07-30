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
    <div class="feature-image"> 
      <img src="<?=site_url('assets/site_photos/responsible.jpg');?>" title="<?=$heading;?>" class="thumbnail img-responsive" width="100%" /> 
    </div>
    <hr class="divider">
    <p><span class="glyphicon glyphicon-question-sign text-info">&nbsp;</span><strong>What is Responsible Gaming?</strong></p>    
    <p class="well">Most individuals who gamble do so for pleasure and without difficulty.  However, there are people who cannot gamble with control – problem gamblers.  Working in the gaming industry, you will likely encounter someone with a gambling problem.  It is important to understand the issues associated with problem gambling and how it impacts upon your patrons and your business.  It is also essential to recognize that your employees can develop a gambling problem, even in instances when they may be restricted or prohibited from placing bets at your facility.</p>
    <br />
    <p><span class="glyphicon glyphicon-info-sign text-info">&nbsp;</span><strong>Gaming Industry is in Unique Position:</strong></p> 
    <ul class="well">
    	<li>The gaming industry is in a unique position to positively impact upon a segment of the patron population who may be in need of assistance for a gambling problem.</li><br />
        <li>The approach is not to prohibit gambling, but to put into place programs to minimize the negative impact it will have on a percentage of gamblers who are unable to gamble with control.</li>
    </ul>
    <br />
    <p><span class="glyphicon glyphicon-question-sign text-info">&nbsp;</span><strong>Why is Responsible Gaming Training Good Customer Service?</strong></p>
    <p class="well">Providing and promoting responsible gaming through continuous employee training is good customer service and may limit liability and risk for casino employees and facility operators. Good customer service entails responding to a customer who is in distress.  There may be many reasons for their distress, but if it is a gambling problem, staff should be trained to provide specific assistance, such as providing a problem gambling brochure, notifying a supervisor or other steps per company policy</p>
    <br />
    <p><span class="glyphicon glyphicon-info-sign text-info">&nbsp;</span><strong>May Limit Liability:</strong></p>
    <ul class="well">
    	<li>Employees should not confront the guest and accuse him/her of having a gambling problem.</li><br />
        <li>Problem gamblers cause problems for themselves AND the gaming venue.</li><br />
        <li>Media coverage about problem gambling related incidents, such as suicide and child neglect, serves in no one’s best interests and, at times, can present liability issues for gaming operators.</li>
    </ul>
    <br />
    <p><span class="glyphicon glyphicon-info-sign text-info">&nbsp;</span><strong>Prepares Industry Employees:</strong></p>
    <ul class="well list-unstyled">
    	<li>All gaming industry employees should undergo training at:</li><br />
        <ul>
            <li>Employee orientation</li><br />
            <li>Annual refresher course</li>
        </ul>
    </ul>
    <br />
    <p>Employees should have access to information on problem gambling resources, responsible gaming, and an understanding of self-exclusion from venue. <a href="#" class="label label-info" data-toggle="modal" data-target="#rgppp-modal">Click here</a> for more information on employee training.</p>
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
