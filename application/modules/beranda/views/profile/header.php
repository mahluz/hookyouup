<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>
    <link rel="icon" href="<?php echo base_url('assets/images/icon.png'); ?>">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- end bootstrap -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      /* USER PROFILE PAGE */
     .card {
        margin-top: 20px;
        padding: 30px;
        background-color: rgba(214, 224, 226, 0.2);
        -webkit-border-top-left-radius:5px;
        -moz-border-top-left-radius:5px;
        border-top-left-radius:5px;
        -webkit-border-top-right-radius:5px;
        -moz-border-top-right-radius:5px;
        border-top-right-radius:5px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .card.hovercard {
        position: relative;
        padding-top: 0;
        overflow: hidden;
        text-align: center;
        background-color: #fff;
        background-color: rgba(255, 255, 255, 1);
    }
    .card.hovercard .card-background {
        height: 130px;
    }
    .card-background img {
        -webkit-filter: blur(25px);
        -moz-filter: blur(25px);
        -o-filter: blur(25px);
        -ms-filter: blur(25px);
        filter: blur(25px);
        margin-left: -100px;
        margin-top: -200px;
        min-width: 130%;
    }
    .card.hovercard .useravatar {
        position: absolute;
        top: 15px;
        left: 0;
        right: 0;
    }
    .card.hovercard .useravatar img {
        width: 100px;
        height: 100px;
        max-width: 100px;
        max-height: 100px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 5px solid rgba(255, 255, 255, 0.5);
    }
    .card.hovercard .card-info {
        position: absolute;
        bottom: 14px;
        left: 0;
        right: 0;
    }
    .card.hovercard .card-info .card-title {
        padding:0 5px;
        font-size: 20px;
        line-height: 1;
        color: #262626;
        background-color: rgba(255, 255, 255, 0.1);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }
    .card.hovercard .card-info {
        overflow: hidden;
        font-size: 12px;
        line-height: 20px;
        color: #737373;
        text-overflow: ellipsis;
    }
    .card.hovercard .bottom {
        padding: 0 20px;
        margin-bottom: 17px;
    }
    .btn-pref .btn {
        -webkit-border-radius:0 !important;
    }


    </style>
  </head>
  <body style="background-color: #E8E8E8;">
  <div class="container">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="<?php echo base_url('assets/gallery/'.$this->session->userdata('id_comm').'/users/'.$this->session->userdata('selected_profile').'/'.$user->photo_profile); ?>">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img alt="" src="<?php echo base_url('assets/gallery/'.$this->session->userdata('id_comm').'/users/'.$this->session->userdata('selected_profile').'/'.$user->photo_profile); ?>">
            </div>
            <div class="card-info"> <span class="card-title"><?php echo $user->name; ?></span>

            </div>
        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <a href="<?php echo base_url('Beranda/profile_post'); ?>"><button type="button" id="post" class="btn btn-primary" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    <div class="hidden-xs">Post</div>
                </button></a>
            </div>
            <div class="btn-group" role="group">
                <a href="<?php echo base_url('Beranda/profile_biodata'); ?>"><button type="button" id="stars" class="btn btn-default "><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <div class="hidden-xs">Biodata</div>
                </button></a>
            </div>
            <div class="btn-group" role="group">
                <a href="<?php echo base_url('Beranda/profile_favorite'); ?>"><button type="button" id="favorites" class="btn btn-default"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <div class="hidden-xs">Favorites</div>
                </button></a>
            </div>
            <div class="btn-group" role="group">
                <a href="<?php echo base_url('Beranda/profile_following'); ?>"><button type="button" id="following" class="btn btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">Following</div>
                </button></a>
            </div>
            <div class="btn-group" role="group">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span><div class="hidden-xs">Others</div></button>
                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('Beranda/profile_change_profile'); ?>">Change Profile</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="<?php echo base_url('Beranda'); ?>">Back to Community</a></li>
                    </ul>
                </div>
            </div>
        </div>

</div>
