<div class="container">

	<a href="<?php echo base_url('Beranda/new_video'); ?>"><button type="button" class="btn btn-primary">Add Video from Youtube</button></a><hr>
	<?php echo $this->pagination->create_links(); ?>
	<?php foreach ($video as $ini): ?>
		<div class="row">
		<div class="col-sm-11">
			<h1><?php echo $ini->title; ?></h1>
			<?php echo $ini->video_url; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1">
			<img src="http://www.w3schools.com/bootstrap/img_avatar1.png" class="media-object" style="width:60px">
		</div>
		<div class="col-sm-4">
			<h4 class="media-heading"><?php echo $ini->name; ?></h4>
			<small><i><?php echo $ini->date_created; ?></i></small>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7">
			<p><?php echo $ini->content; ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7">
			<form class="form-inline">
					<div class="btn-group">
					<button type="button" class="btn btn-primary">Like</button>
					<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#comment<?php echo $ini->id_video; ?>">Show Comment</button>
					<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="post_option">Option <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
					<li><a href="#">Edit</a></li>
					<li><a href="#">Delete</a></li>
					</ul>
					</div>
					</div>
				<input type="text" class="form-control" name="" placeholder="Write a comment">
				<button type="submit" class="btn btn-success">Comment</button>
			</form>
			<div id="comment<?php echo $ini->id_video; ?>" class="collapse">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<?php endforeach ?>

</div>