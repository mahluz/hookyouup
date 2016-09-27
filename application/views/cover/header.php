<!doctype html>
<html class="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dancer 4 Life</title>
<link href="<?php echo base_url('assets/css/boilerplate.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
<link rel="icon" href="<?php echo base_url('assets/images/icon.png'); ?>">
<script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
<!-- bootstrap -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- end bootstrap -->
<script src="<?php echo base_url('assets/js/code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.twbsPagination.js'); ?>"></script>
</head>
<body class="gridContainer">
<div class="gridContainer clearfix">
<div class="container">
<!-- navigation -->
<div id="menu">

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Dancer 4 Life</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-file"></span>  Create your Community [Coming Soon] or Donate</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registered Community
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php foreach ($comm_list as $comm_ini) {?>
            <li><a href="#"><?php echo $comm_ini->comm_name;?></a></li>
          <?php } ?>
          </ul>
        </li>
        <li><a href="#">About us</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li data-toggle="modal" data-target="#myModal"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li data-toggle="modal" data-target="#myModal1"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>  Booking Us</a></li>
          <li id="hide"><a href="#"><span class="glyphicon glyphicon-remove"></span> Hide Menu</a></li>
        </ul>
    </div>
  </nav>

<!-- end .menu --></div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Signup</h4>
      </div>
      <div class="modal-body">
          <form role="RegisForm" method="POST" action="<?php echo site_url('Index/signup'); ?>">
              <div class="form-group">
                  <label for="usr">Name:</label>
                  <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pwd">
              </div>
              <div class="form-group">
              	<label for="sex">Sex:  </label>
                  <div class="radio">
                      <label><input type="radio" name="gender" value="Male">Male</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="gender" value="Female">Female</label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="sel1">Select Community:</label>
                  <select class="form-control" id="sel1" name="comm">
                    <?php foreach ($comm_list as $comm_ini) {?>
                      <option value="<?php echo $comm_ini->id_comm; ?>"><?php echo $comm_ini->comm_name; ?></option>
                    <?php } ?>
                  </select>
              </div>
              <button type="submit" class="btn btn-default">Register</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
      <?php echo validation_errors(); ?>
      <p style="color:red;"><?php echo $this->session->flashdata('notification'); ?></p>
        <form role="LoginForm" method="post" action="<?php echo site_url('Index/login'); ?>">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" value="<?php echo set_value('email')?>">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" value="<?php echo set_value('password')?>">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" id="rememberMe"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-default" name="btn_login" value="Login">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#menu").hide();
    });
    $("#show").click(function(){
        $("container-fluid").show();
    });
});
</script>