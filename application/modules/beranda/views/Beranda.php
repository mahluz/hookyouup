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

					<div class="col-sm-2">
						<img src="http://www.w3schools.com/howto/img_avatar.png" class="img-rounded" alt="DP" width="70" height="70">
					</div>

					<div class="col-sm-10">
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
					<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#comment<?php echo $ini->id_post; ?>">Show Comment</button>
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
				<button type="submit" class="btn btn-success">Comment</button>
				</form>
				<div id="comment<?php echo $ini->id_post; ?>" class="collapse">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

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