<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/images/icon.ico'); ?>">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/admin.css') ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">BLOG<span class="sr-only">(current)</span></a></li>
            <li><a href="#">EVENT</a></li>
            <li><a href="#">BOOKING</a></li>
            <li><a href="#">MAILING</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Community List</a></li>
            <li><a href="">User List</a></li>
            <li><a href="">Announcement List</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header">New Entri</h2>
          <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <div class="well well-sm">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('admin/proses_tambah_blog'); ?>">
                    <fieldset>
                      <legend class="text-center">Whats Going on ?</legend>
              
                      <!-- Name input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Title</label>
                        <div class="col-md-9">
                          <input id="name" name="title" type="text" placeholder="Title" class="form-control">
                        </div>
                      </div>
              
                      <!-- Message body -->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Content</label>
                        <div class="col-md-9">
                          <textarea class="form-control" id="message" name="content" placeholder="Please enter your Content here..." rows="5"></textarea>
                        </div>
                      </div>
              
                      <!-- Form actions -->
                      <div class="form-group">
                        <div class="col-md-12 text-right">
                          <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                      </div>
                    </fieldset>
                    </form>
                  </div>
                </div>
                <!-- End Row -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery.min.js'); ?>"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url('assets/js/vendor/holder.min.js'); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
  </body>
</html>