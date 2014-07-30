<!-- Membership form modal -->
<div class="modal fade" id="membership-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Become A Member Today!</h4>
      </div>
      <div class="modal-body">
        <p><small>Membership includes discounts on FCCG agency-sponsored conferences, trainings and events.  I would like to help continue to address the problem of compulsive gambling by membership in the Florida Council on Compulsive Gambling, Inc.</small></p>
        <form role="form" name="membership-form" id="membership-form" method="post">
          <div class="form-group">
            <label for="member-type">Membership Type</label>
            <select class="form-control" name="member-type" required="required">
              <option value="full-membership">Full Membership and FCCG Newsletter : $35.00</option>
              <option value="sponsor">Sponsor : $75.00</option>
              <option value="benefactor">Benefactor : $150.00</option>
              <option value="bronze-sponsor">Bronze Institution/Corporate Sponsor : $1,000.00</option>
              <option value="silver-sponsor">Silver Institution/Corporate Sponsor : $5,000.00</option>
              <option value="gold-sponsor">Gold Institution/Corporate Sponsor : $10,000.00</option>
              <option value="special-sponsor">Special Institution/Corporate Sponsor : $25,000.00</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control norad" name="name" placeholder="Your Full Name" required="required" />
          </div>
          <div class="form-group">
            <label for="name">Your Title <small>(optional)</small></label>
            <input type="text" class="form-control norad" name="title" placeholder="Your Title" />
          </div>
          <div class="form-group">
            <label for="org">Organization <small>(optional)</small></label>
            <input type="text" class="form-control norad" name="org" placeholder="Your Organization" />
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
            <input type="email" class="form-control norad" name="email" placeholder="email@domain.com" required="required" />
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control norad" name="phone" placeholder="888-777-6543" maxlength="10" required="required" />
          </div>
          <div class="form-group">
            <label for="volunteer"><small>Interested in volunteering?</small></label>
            <div class="options">
              <label class="radio-inline">
                <input type="radio" name="volunteer" value="Yes" />
                Yes </label>
              <label class="radio-inline">
                <input type="radio" name="volunteer" value="No" />
                No </label>
            </div>
          </div>
          <div class="form-group">
            <label for="assist-type"><small>Please check the areas in which you are willing to assist the Council</small></label>
            <select class="form-control" name="assist-type">
              <option value="communication">Communication</option>
              <option value="sommunity-services">Community Services</option>
              <option value="education">Education</option>
              <option value="fund-raising">Fund Raising</option>
              <option value="labor-management">Labor / Management</option>
              <option value="legal">Legal</option>
              <option value="medical">Medical</option>
              <option value="public-information">Public Information</option>
              <option value="public-relations">Public Relations</option>
              <option value="rehabilitation">Rehabilitation</option>
              <option value="research">Research</option>
            </select>
          </div>
          <div form-group>
              <p class="text-center text-info">
                <small>Make Checks payable to the Florida Council on Compulsive Gambling, Inc. Contributions are tax deductible.</small>
              </p>
              <p class="text-center text-info">
                <small>Forward payment to: FCCG, P.O. Box 2309, Sanford, FL  32772</small>
              </p>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-block btn-success submit norad" value="Send Message" />
          </div>
          <div class="alert alert-danger norad" role="alert">
            <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
            <p><small>There was an error, Please try again...</small></p>
          </div>
          <div class="alert alert-success norad" role="alert">
            <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
            <p><small>Memberhsip Form sent successfully, Thank You!</small></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
