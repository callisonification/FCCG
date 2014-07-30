<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <a class="navbar-brand" href="<?=base_url();?>" target="new">FCCG Admin Panel</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#resp-nav"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="navbar-collapse collapse" id="resp-nav">
      <ul class="nav navbar-nav visible-xs">
        <? if ($this->uri->segment(2) == ''):?>
        <li class="active"><a href="<?=site_url('_cms/');?>">News &amp; Updates</a></li>
        <? else:?>
        <li><a href="<?=site_url('_cms/');?>">News &amp; Events</a></li>
        <? endif;?>
        <li class="nav-divider"></li>
        <? if ($this->uri->segment(2) == 'about_fccg'):?>
        <li class="active"><a href="<?=site_url('_cms/about_fccg');?>">About FCCG</a></li>
        <? else:?>
        <li><a href="<?=site_url('_cms/about_fccg');?>">About FCCG</a></li>
        <? endif;?>
        <li class="nav-divider"></li>
        <? if ($this->uri->segment(2) == 'problem_gambling'):?>
        <li class="active"><a href="<?=site_url('_cms/problem_gambling');?>">About Problem Gambling</a></li>
        <? else:?>
        <li><a href="<?=site_url('_cms/problem_gambling');?>">About Problem Gambling</a></li>
        <? endif;?>
        <li class="nav-divider"></li>
        <? if ($this->uri->segment(2) == 'get_help'):?>
        <li class="active"><a href="<?=site_url('_cms/get_help');?>">Get Help</a></li>
        <? else:?>
        <li><a href="<?=site_url('_cms/get_help');?>">Get Help</a></li>
        <? endif;?>
        <li class="nav-divider"></li>
        <? if ($this->uri->segment(2) == 'give_help'):?>
        <li class="active"><a href="<?=site_url('_cms/give_help');?>">Give Help</a></li>
        <? else:?>
        <li><a href="<?=site_url('_cms/give_help');?>">Give Help</a></li>
        <? endif;?>
        <li class="nav-divider"></li>
        <? if ($this->uri->segment(2) == 'resources'):?>
        <li class="active"><a href="<?=site_url('_cms/resources');?>">Resources</a></li>
        <? else:?>
        <li><a href="<?=site_url('_cms/resources');?>">Resources</a></li>
        <? endif;?>
        <?php if($this->session->userdata('perm') == 3): ?>
        <li class="nav-divider"></li>
        <li> 
          <a href="#" data-toggle="modal" data-target="#createUserModal">Create new user &nbsp;<span class="glyphicon glyphicon-user"></span></a> 
        </li>
        <li class="nav-divider"></li>
        <li> 
          <a href="#" data-toggle="modal" data-target="#editUserModal">Edit current users &nbsp;<span class="glyphicon glyphicon-cog"></span></a> 
        </li>
        <li class="nav-divider"></li>
        <?php endif; ?>
        <li><a href="<?=site_url('_admin/logout');?>">Sign Out &nbsp;<span class="glyphicon glyphicon-off"></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-xs">
        <?php if($this->session->userdata('perm') == 3): ?>
        <li> 
          <a href="#" data-toggle="modal" data-target="#createUserModal">Create new user &nbsp;<span class="glyphicon glyphicon-user"></span></a> 
        </li>
        <li> 
          <a href="#" data-toggle="modal" data-target="#editUserModal">Edit current users &nbsp;<span class="glyphicon glyphicon-cog"></span></a> 
        </li>
        <li class="divider"></li>
        <?php endif; ?>
        <li><a href="<?=site_url('_admin/logout');?>">Sign Out &nbsp;<span class="glyphicon glyphicon-off"></span></a></li>
      </ul>
      <br />
    </div>
  </div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <? if ($this->uri->segment(2) == ''):?>
    <li class="active"><a href="<?=site_url('_cms/');?>">News &amp; Updates</a></li>
    <? else:?>
    <li><a href="<?=site_url('_cms/');?>">News &amp; Events</a></li>
    <? endif;?>
    <li class="nav-divider"></li>
    <? if ($this->uri->segment(2) == 'about_fccg'):?>
    <li class="active"><a href="<?=site_url('_cms/about_fccg');?>">About FCCG</a></li>
    <? else:?>
    <li><a href="<?=site_url('_cms/about_fccg');?>">About FCCG</a></li>
    <? endif;?>
    <li class="nav-divider"></li>
    <? if ($this->uri->segment(2) == 'problem_gambling'):?>
    <li class="active"><a href="<?=site_url('_cms/problem_gambling');?>">About Problem Gambling</a></li>
    <? else:?>
    <li><a href="<?=site_url('_cms/problem_gambling');?>">About Problem Gambling</a></li>
    <? endif;?>
    <li class="nav-divider"></li>
    <? if ($this->uri->segment(2) == 'get_help'):?>
    <li class="active"><a href="<?=site_url('_cms/get_help');?>">Get Help</a></li>
    <? else:?>
    <li><a href="<?=site_url('_cms/get_help');?>">Get Help</a></li>
    <? endif;?>
    <li class="nav-divider"></li>
    <? if ($this->uri->segment(2) == 'give_help'):?>
    <li class="active"><a href="<?=site_url('_cms/give_help');?>">Give Help</a></li>
    <? else:?>
    <li><a href="<?=site_url('_cms/give_help');?>">Give Help</a></li>
    <? endif;?>
    <li class="nav-divider"></li>
    <? if ($this->uri->segment(2) == 'resources'):?>
    <li class="active"><a href="<?=site_url('_cms/resources');?>">Resources</a></li>
    <? else:?>
    <li><a href="<?=site_url('_cms/resources');?>">Resources</a></li>
    <? endif;?>
  </ul>
  <ul class="nav nav-sidebar">
    <li><br />
    </li>
    <li><br />
    </li>
    <? if ($this->uri->segment(2) == 'help'):?>
    <li class="active"><a href="<?=site_url('_cms/help');?>">Help</a></li>
    <? else:?>
    <li><a href="<?=site_url('_cms/help');?>">Help</a></li>
    <? endif;?>
    <li class="nav-divider"></li>
    <li><a href="<?=site_url('_admin/logout');?>">Sign Out &nbsp;<span class="glyphicon glyphicon-off"></span></a></li>
  </ul>
</div>

<!-- Create new user-creation modal -->
<div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Create New User</h4>
      </div>
      <div class="modal-body"> 
        <!-- form goes here -->
        <form role="form" id="create_user_form" name="create_user_form" method="post" action="<?=site_url('admin_crud/create_user');?>">
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="User's First Name">
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" name="lname" placeholder="User's Last Name">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username for Login">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="perm">User Permissions</label>
            <select class="form-control" name="perm">
              <option value="1">Level 1 : Read | Write</option>
              <option value="2">Level 2 : Read | Write | Update</option>
              <option value="3">Level 3 : Read | Write | Update | Delete</option>
            </select>
          </div>
          <div class="form-group">
            <input type="hidden" name="status" value="1">
          </div>
          <br />
          <button type="submit" class="btn btn-primary btn-block">Save User</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!-- Create user-edit modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit User Permissions</h4>
      </div>
      <div class="modal-body"> 
        <!-- body here -->
        <div class="panel-group" id="accordion">
          <?php foreach($users as $user): ?>
          <div class="panel panel-default">
            <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#user_<?=$user->id;?>">
              <h4 class="panel-title"> <span class="glyphicon glyphicon-user">&nbsp;</span>
                <?=$user->first_name.' '.$user->last_name;?>
                <small class="pull-right">Click to edit</small> </h4>
              </a> </div>
            <div id="user_<?=$user->id;?>" class="panel-collapse collapse">
              <div class="panel-body"> 
                <!-- update form here -->
                <form role="form" id="editUserForm" name="editUserForm" action="<?=site_url('admin_crud/edit_user');?>" method="post">
                  <div class="form-group">
                    <label for="perm">Edit User's Permissions</label>
                    <select class="form-control" name="perm">
                      <?php if($user->permissions == '1'): ?>
                      <option value="1" selected>Level 1 : Read | Write</option>
                      <?php else: ?>
                      <option value="1">Level 1 : Read | Write</option>
                      <?php endif; ?>
                      <?php if($user->permissions == '2'): ?>
                      <option value="2" selected>Level 2 : Read | Write | Update</option>
                      <?php else: ?>
                      <option value="2">Level 2 : Read | Write | Update</option>
                      <?php endif; ?>
                      <?php if($user->permissions == '3'): ?>
                      <option value="3" selected>Level 3 : Read | Write | Update | Delete</option>
                      <?php else: ?>
                      <option value="3">Level 3 : Read | Write | Update | Delete</option>
                      <?php endif; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="status">Edit User's Status </label>
                    <select class="form-control" name="status">
                      <?php if($user->status == '0'): ?>
                      <option value="0" selected>Inactive Employee</option>
                      <?php else: ?>
                      <option value="0">Inactive Employee</option>
                      <?php endif; ?>
                      <?php if($user->status == '1'): ?>
                      <option value="1" selected>Active Employee</option>
                      <?php else: ?>
                      <option value="1">Active Employee</option>
                      <?php endif; ?>
                    </select>
                  </div>
                  <input type="hidden" name="id" value="<?=$user->id;?>" />
                  <input type="submit" class="btn btn-block btn-primary" value="Save Changes" />
                </form>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <!-- end accordion div --> 
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 
