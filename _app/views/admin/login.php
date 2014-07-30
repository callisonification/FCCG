<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Florida Council on Compulsive Gambling website.">
<meta name="author" content="Christopher Allison">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>The Florida Council on Compulsive Gambling</title>

<!-- Bootstrap core CSS -->
<link href="<?=base_url('css/plugins/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?=base_url('css/login/signin.css');?>" rel="stylesheet">
</head>

<body>
<div class="container">
  <form class="form-signin" role="form" action="<?=site_url('_admin/login');?>" method="post">
    <h2 class="form-signin-heading">FCCG <small>Admin Sign In</small></h2>
    <input type="username" class="form-control" placeholder="Username" name="username" required autofocus>
    <br>
    <input type="password" class="form-control" placeholder="Password" name="password" required>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
  <br>
</div>
<? if( isset($error) ) :?>
    <div class="alert alert-danger alert-dismissable col-xs-12 col-md-4 col-md-offset-4">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <p><span class="glyphicon glyphicon-remove-circle">&nbsp;</span><strong><?=$error;?></strong></p>
    </div>
<? endif ;?>

<!-- /container --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<script src="<?=base_url('js/plugins/bootstrap.min.js');?>"></script>
</body>
</html>
