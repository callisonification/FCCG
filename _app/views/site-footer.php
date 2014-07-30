<!-- start footer -->

<div class="footer-bg">
  <footer class="page-footer">
    <div class="container">
    <!-- footer accordion nav for smaller devices -->
    <div class="panel-group hidden-md hidden-lg col-xs-12" id="accordion">
      <h4>Jump To</h4>
      <div class="panel panel-default norad"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        <div class="panel-heading">
          <h4 class="panel-title">About Us <small class="pull-right">touch to open</small></h4>
        </div>
        </a>
        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body">
            <ul>
              <li><a href="<?=base_url('about/history');?>">History &amp; Mission</a></li>
              <li><a href="<?=base_url('about/membership');?>">Membership &amp; Donations</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default norad"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        <div class="panel-heading">
          <h4 class="panel-title">Getting Help <small class="pull-right">touch to open</small></h4>
        </div>
        </a>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <ul>
              <li><a href="<?=base_url('get_help/individuals');?>">Help for Individuals</a></li>
              <li><a href="<?=base_url('get_help/loved_ones');?>">Help for Loved Ones</a></li>
              <li><a href="<?=base_url('get_help/helpline');?>">Helpline Programs</a></li>
              <li><a href="<?=base_url('get_help/recovery_path');?>">Recovery Path</a></li>
              <li><a href="<?=base_url('get_help/success_stories');?>">Success Stories</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default norad"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        <div class="panel-heading">
          <h4 class="panel-title">Giving Help <small class="pull-right">touch to open</small></h4>
        </div>
        </a>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            <ul>
              <li><a href="<?=base_url('give_help/gambling_addiction');?>">Gambling Addiction</a></li>
              <li><a href="<?=base_url('give_help/responsible_gambling');?>">Responsible Gambling</a></li>
              <li><a href="<?=base_url('give_help/programs');?>">Programs Information</a></li>
              <li><a href="<?=base_url('give_help/training');?>">Training Information</a></li>
              <li><a href="<?=base_url('give_help/law_legal');?>">Law &amp; Legal Information</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default norad"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        <div class="panel-heading">
          <h4 class="panel-title">Resources <small class="pull-right">touch to open</small></h4>
        </div>
        </a>
        <div id="collapseFour" class="panel-collapse collapse">
          <div class="panel-body">
            <ul>
              <li><a href="<?=base_url('resources/publications');?>">Print Materials</a></li>
              <li><a href="<?=base_url('resources/videos');?>">Videos</a></li>
              <li><a href="<?=base_url('resources/toolkits');?>">Toolkits</a></li>
              <li><a href="<?=base_url('resources/research');?>">Research Materials</a></li>
              <li><a href="<?=base_url('resources/faq');?>">Frequently Asked Questions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider visible-xs visible-sm" />
    <!-- normal nav for all other screens -->
    <div class="footer-left col-xs-12 col-md-8">
      <section class="mission">
        <h4>Our Mission</h4>
        <p class="lead">&quot; The Florida Council on Compulsive Gambling (FCCG) is committed to increasing public awareness about problem and compulsive gambling. The FCCG provides services and support to residents in need of assistance, as well as to professionals and others servicing this population. The organization is governed by a volunteer Board of Directors and is one of more than 35 affiliates of the National Council on Problem Gambling.&quot;</p>
        <!-- social list goes here -->
      </section>
    </div>
    <div class="footer-right col-xs-12 col-md-4">
      <h4>Have Questions?</h4>
      <div class="footer-form">
        <form name="footer-form" id="footer-form" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required />
          </div>
          <div class="form-group">
            <textarea class="form-control" name="mssg" rows="5" placeholder="Message" required="required"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-lg btn-block submit" value="Send Message" />
          </div>
          <div class="alert alert-danger norad" role="alert">
            <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
            <p><small>There was an error, Please try again...</small></p>
          </div>
          <div class="alert alert-success norad" role="alert">
            <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
            <p><small>Message sent successfully, Thank You!</small></p>
          </div>
        </form>
      </div>
    </div>
    <span class="clearfix"></span>
    <hr />
    <ul class="footer-info hidden-xs">
      <li><span class="glyphicon glyphicon-map-marker">&nbsp;</span> <small>121 East 1st Street &nbsp;/&nbsp; Sanford, FL 32771</small></li>
      <li>|</li>
      <li><span class="glyphicon glyphicon-phone-alt">&nbsp;</span> <small>Helpline &nbsp;/&nbsp; (888) 236 - 4848</small></li>
      <li>|</li>
      <li><span class="glyphicon glyphicon-phone">&nbsp;</span> <small>Text Line &nbsp;/&nbsp; (321) 978 - 0555</small></li>
      <li>|</li>
      <li><span class="glyphicon glyphicon-print">&nbsp;</span> <small>Fax Line &nbsp;/&nbsp; (407) 865 - 6103</small></li>
    </ul>
    <ul class="footer-info2 visible-xs">
      <li><span class="glyphicon glyphicon-map-marker">&nbsp;</span> <small>121 East 1st Street &nbsp;/&nbsp; Sanford, FL 32771</small></li>
      <li class="pipe">|</li>
      <li><span class="glyphicon glyphicon-phone-alt">&nbsp;</span> <small>Helpline &nbsp;/&nbsp; (888) 236 - 4848</small></li>
      <li class="pipe">|</li>
      <li><span class="glyphicon glyphicon-phone">&nbsp;</span> <small>Text Line &nbsp;/&nbsp; (321) 978 - 0555</small></li>
      <li class="pipe">|</li>
      <li><span class="glyphicon glyphicon-print">&nbsp;</span> <small>Fax Line &nbsp;/&nbsp; (407) 865 - 6103</small></li>
    </ul>
  </footer>
</div>
<div class="footer-sig">
  <div class="container">
    <hr class="divider">
    <p class="pull-left">The Florida Council on Compulsive Gambling, Inc. &copy; 2008-2014</p>
    <p class="pull-right hidden-xs"><a href="#" class="btt">Back to top</a></p>
    <p class="pull-left visible-xs">&nbsp; | &nbsp;<a href="#" class="btt">Back to top</a></p>
    <span class="clearfix"></span> <br />
    <p class="pull-left signature"><small>Built With <span>&hearts;</span> By: <a href="http://www.callisonification.com" target="new">Christopher Allison</a></small></p>
    <span class="clearfix"></span> 
  </div>
</div>
</div>

<!-- contact us tab -->
<div class="social-tab hidden-sm hidden-xs">
  <p class="pull-left">Contact Us</p>
  <ul class="tab-icons pull-right">
    <li><a href="#" title="Call Us!" data-toggle="modal" data-target="#call-us-modal"> <small><span class="glyphicon glyphicon-earphone"></span></small></a> </li>
    <li><a href="#" title="Email Us!" data-toggle="modal" data-target="#form-contact-modal"> <small><span class="glyphicon glyphicon-envelope"></span></small></a> </li>
    <li><a target="_blank" title="Chat with Us!" href="http://webapp.icarol.com/pub/Messaging/StatusBadge.aspx?OrgNum=54632" onclick="window.open('http://webapp.icarol.com/pub/Messaging/StatusBadge.aspx?OrgNum=54632', 'newwindow', 'width=500, height=400'); return false;"><small><span class="glyphicon glyphicon-user"></span></small></a></li>
  </ul>
  <span class="clearfix"></span> </div>
<!-- /end footer --> 

<!-- Standard contact modal -->
<div class="modal fade" id="form-contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
        <h4 class="modal-title">E-mail Us!</h4>
      </div>
      <div class="modal-body">
        <form name="contact-form" id="contact-form" method="post">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control norad" name="name" placeholder="Your Full Name" required="required" />
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
              <input type="text" name="state" class="form-control norad" maxlength="2" required="required" />
            </div>
            <div class="col-lg-4 sm-input">
              <label for="zip">Zip:</label>
              <input type="text" name="zip" class="form-control norad" maxlength="5" required="required" />
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
            <textarea name="mssg" class="form-control norad" rows="8" placeholder="Your Message" required="required"></textarea>
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
            <p><small>Message sent successfully, Thank You!</small></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Call Us info modal -->
<div class="modal fade" id="call-us-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Call Us!</h4>
      </div>
      <div class="modal-body">
        <p><strong>Contact our Helpline</strong></p>
        <p><small>Helpline is available 24 hours a day</small></p>
        <div class="well well-sm">
          <p><span class="glyphicon glyphicon-phone-alt">&nbsp;</span> (888) 236 - 4848</p>
        </div>
        <p><strong>Contact our Text Line</strong></p>
        <p><small>Text Line is available Monday-Friday 8am-5pm</small></p>
        <div class="well well-sm">
          <p><span class="glyphicon glyphicon-phone">&nbsp;</span> (321) 978 - 0555</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- core JavaScript--> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<script src="<?=base_url('js/plugins/bootstrap.min.js');?>"></script> 
<script src="<?=base_url('js/plugins/jquery.sidr.min.js');?>"></script> 
<script src="<?=base_url('js/plugins/nivo-lightbox.min.js');?>"></script> 
<script src="<?=base_url('js/main.js');?>"></script> 
<script>
  var url = "<?=site_url();?>";
</script>
</body></html>