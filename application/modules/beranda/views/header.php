<!doctype html>
<html class="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Community Page</title>
	<link href="<?php echo base_url('assets/css/boilerplate.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/comm.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url('assets/images/icon.png'); ?>">
	<script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/sidebar_menu.js'); ?>"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- end bootstrap -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<style>
		.glyphicon{
			position:static;	
		}
		.col-sm-3{
			position:static;	
		}
	</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="gridContainer clearfix">
		<nav class="navbar navbar-default no-margin">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header fixed-brand">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="hide"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
				</button> <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> <?php echo $community->comm_name; ?> COMMUNITY</a> 
			</div>
			<!-- navbar-header-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active">
						<button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
						</button>
					</li>
					<li class="active">
						<button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
						</button>
					</li>
				</ul>
				<input type="text" name="search" placeholder="Search..">
			</div>
			<!-- bs-example-navbar-collapse-1 -->
		</nav>
		<div id="wrapper" style="padding-left:0;">
			<div id="option" data-spy="affix" data-offset-top="70">
				<nav class="navbar navbar-inverse">
					<ul class="nav navbar-nav" id="menu2">
						<li id="home" class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a>
						</li>
						<li id="member"><a href="#"><span class="glyphicon glyphicon-user"></span> Member</a>
						</li>
						<li id="forum"><a href="#"><span class="glyphicon glyphicon-comment"></span> Forum</a>
						</li>
						<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-film"></span>  Galery
        <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li id="photo"><a href="#">Photo</a>
								</li>
								<li id="video"><a href="#">Video</a>
								</li>
								<li><a href="#">Story</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right" style="padding-right:2em;">
						<li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>  Notification</a>
						</li>
						<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
        <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('beranda/display_data'); ?>"><span class="glyphicon glyphicon-user"></span> Profile</a>
								</li>
								<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Inbox</a>
								</li>
								<li><a href="<?php echo base_url('beranda/display_session'); ?>""><span class="glyphicon glyphicon-cog"></span> Setting</a>
								</li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url('beranda/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<div id="sidebar-wrapper" style="height:75vh;">
					<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
						<li class="active"> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Admin page</a>
							<ul class="nav-pills nav-stacked" style="list-style-type:none;">
								<li><a href="#">Post</a>
								</li>
								<li><a href="#">View Databases</a>
								</li>
								<li><a href="#">Access file</a>
								</li>
								<li><a href="#">Statistic</a>
								</li>
							</ul>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Shortcut</a>
							<ul class="nav-pills nav-stacked" style="list-style-type:none;">
								<li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Facebook</a>
								</li>
								<li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Youtube</a>
								</li>
							</ul>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Overview</a>
						</li>
						<li>
							<a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Events</a>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
						</li>
					</ul>
				</div>
				<!-- Modal -->
				<div id="modalProfile" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Your Profile</h4>
							</div>
							<div class="modal-body">
								<!-- Insert your code here -->
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- end #option -->
			</div>
			<!-- <div class="container-fluid"> -->
	<!-- Page Content -->
	 <div id="page-content-wrapper" style="position:static;">
     	<div id="wrapper">
            <div id="content" style="min-height:1000px;padding-right:1em;">