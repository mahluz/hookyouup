<!doctype html>
<html>
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Community Page</title>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#blog_content' });</script>
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
	<link href='//fonts.googleapis.com/css?family=Magra' rel='stylesheet'>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<style>
		.glyphicon{
			position:static;	
		}
		.col-sm-3{
			position:static;	
		}
		.chip {
		    display: inline-block;
		    padding: 0 25px;
		    height: 50px;
		    font-size: 16px;
		    line-height: 50px;
		    border-radius: 25px;
		    background-color: #f1f1f1;
		}

		.chip img {
		    float: left;
		    margin: 0 10px 0 -25px;
		    height: 50px;
		    width: 50px;
		    border-radius: 50%;
		}
		body {
		    font-family: 'Magra';
		    font-size: 15px;
		}
	</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color:#E8E8E8;">

	<div class="gridContainer clearfix" >

		<nav class="navbar navbar-default" style="background-color: #D6D6D6;">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header fixed-brand">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="hide"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
				</button> <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> <?php echo $community->comm_name; ?> COMMUNITY</a> 
			</div>
			<!-- navbar-header-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active">
						<button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
						</button>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="active">
						<form class="navbar-form" role="search">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Search profile" name="q">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				            </div>
				        </div>
				        </form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right" style="padding-right: 2em;">
					<div class="chip">
					<img src="<?php echo base_url('assets/gallery/'.$this->session->userdata('id_comm').'/users/'.$this->session->userdata('id_user').'/'.$user->photo_profile); ?>" alt="Person" width="96" height="96">
					Hai <?php echo $this->session->userdata('name'); ?>
					</div>
				</ul>

			</div>
			<!-- bs-example-navbar-collapse-1 -->
			
		</nav>
		
		<div id="wrapper" style="padding-left:0;">

				<nav class="navbar navbar-inverse">
					<ul class="nav navbar-nav" id="menu2">
						<li id="home" class="active"><a href="<?php echo base_url('Beranda'); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li id="member"><a href="<?php echo base_url('Beranda/member_list'); ?>"><span class="glyphicon glyphicon-user"></span> Member</a></li>
						<li id="forum"><a href="<?php echo base_url('Beranda/forum'); ?>"><span class="glyphicon glyphicon-comment"></span> Obrolan Public</a></li>
						<li id="blog"><a href="<?php echo base_url('Beranda/blog_list'); ?>"><span class="glyphicon glyphicon-pushpin"></span> Blog</a></li>
						<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-film"></span>  Galery
						<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li id="photo"><a href="<?php echo base_url('Beranda/photo'); ?>">Photo</a>
								</li>
								<li id="video"><a href="<?php echo base_url('Beranda/video'); ?>">Video</a>
								</li>
								<li><a href="#">Story</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right" style="padding-right:2em;">
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>  Notification <span class="badge">2</span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">
										<dl>
										    <dt>Jean Doe</dt>
										    <dd>- Just Likes your status</dd>
										</dl> 
									</a>
								</li>
							    <li>
							    	<a href="#">
						    			<dl>
										    <dt>John Doe</dt>
										    <dd>- Following you</dd>
								  		</dl> 
							    	</a>
							    </li>
							</ul>
						</li>
						<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('email'); ?>
        					<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('Beranda/profile/'.$this->session->userdata('id_user')); ?>"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Inbox</a></li>
								<li><a href="<?php echo base_url('Beranda/display_data'); ?>"><span class="glyphicon glyphicon-question-sign"></span> Feedback</a></li>
								<li><a href="<?php echo base_url('Beranda/display_session'); ?>"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url('Beranda/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
							</ul>
						</li>
					</ul>
				</nav>

				<!--Side Menu -->
				<div id="option" data-spy="affix" data-offset-top="160">
				<div id="sidebar-wrapper" style="height:140vh;">
					<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
						<li class="active"> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Another websites</a>
							<ul class="nav-pills nav-stacked" style="list-style-type:none;">
								<li><a href="#">EGYPT</a></li>
								<li><a href="#">EDC</a></li>
								<li><a href="#">ENERC</a></li>
								<li><a href="#">BLOGSPOT</a></li>
							</ul>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Developer profile</a>
							<ul class="nav-pills nav-stacked" style="list-style-type:none;">
								<li><a href="https://facebook.com"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Facebook</a>
								</li>
								<li><a href="https://youtube.com"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Youtube</a>
								</li>
							</ul>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Download</a>
						</li>
						<li>
							<a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Order web</a>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About Developer</a>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Maintenance Schedule</a>
						</li>
						<li> <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Email Developer</a>
						</li>
					</ul>
				</div>


				</div>


			<!-- <div class="container-fluid"> -->
	<!-- Page Content -->
	 <div id="page-content-wrapper" style="position:static;">
     	<div id="wrapper">
            <div id="content" style="min-height:1000px;padding-right:1em;">
