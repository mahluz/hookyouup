<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		
		<div class="col-xs-12 col-sm-8">
		<?php echo form_open('beranda/proses_new_post'); ?>
			<div class="form-group">
			<label for="comment"><?php echo $this->session->userdata('name'); ?> ??</label>
			<textarea class="form-control" rows="5" id="content" name="content" placeholder="Type some text here ..."></textarea>
			</div>
		<button type="submit" class="btn btn-success">Post</button>

		<?php echo form_close(); ?><hr>

		<?php foreach ($post as $ini): ?>
		<?php 
		//config
		$konten=str_replace("\n",'<br>', $ini->content);
		?>

			<div class="well well-lg">

				<div class="row">

					<div class="col-sm-1">
						<img src="http://www.w3schools.com/howto/img_avatar.png" class="img-rounded" alt="DP" width="70" height="70">
					</div>

					<div class="col-sm-11">
						<blockquote>
							<p id="name"><?php echo $ini->name; ?></p>
							<footer>
								Created on <?php echo $ini->date_created; ?>
							</footer>
						</blockquote>
					</div>

				</div>

			<i><h4><?php echo $konten; ?></h4></i>

				<form class="form-inline">
					<div class="btn-group">
					<button type="button" class="btn btn-primary">Like</button>
					<button type="button" class="btn btn-primary">Comment</button>
						<div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Share <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						</ul>
						</div>
					<?php if ($ini->name==$this->session->userdata('name')){ ?>
						<div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="post_option">Option <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
						<li><a href="#">Edit</a></li>
						<li><a href="<?php echo base_url('Beranda/delete_post/'.$ini->id_post); ?>">Delete</a></li>
						</ul>
						</div>
					<?php } ?>
					</div>
				<input type="text" class="form-control" name="" placeholder="Write a comment">
				</form>

			</div>	
		<?php endforeach ?>
		</div><!--/.col-xs-12.col-sm-9-->

		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
			<div class="list-group">
			<a href="#" class="list-group-item active">Lorem</a>
			<a href="#" class="list-group-item">Ipsum</a>
			<a href="#" class="list-group-item">Dolor</a>
			<a href="#" class="list-group-item">Sit</a>
			<a href="#" class="list-group-item">Amet</a>
			</div>
		</div><!--/.sidebar-offcanvas-->

	</div><!--/row-->
	<hr>
</div><!--/.container-->