<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		
		<div class="col-xs-12 col-sm-8">
		<?php echo form_open('beranda/proses_new_post'); ?>
			<div class="form-group">
			<label for="comment">Whats on your mind <?php echo $this->session->userdata('name'); ?> ??</label>
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

				<form class="form-inline" method="post" action="<?php echo base_url('Beranda/proses_new_comment/'.$ini->id_post); ?>">
					<div class="btn-group">
					<button type="button" class="btn btn-primary">Like</button>
					<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#comment<?php echo $ini->id_post; ?>">Show Comment</button>
					<?php if ($ini->name==$this->session->userdata('name')){ ?>
						<div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="post_option">Option <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
						<li><a href="#">Edit</a></li>
						<li><a href="#">Set privacy</a></li>
						<li><a href="<?php echo base_url('Beranda/delete_post/'.$ini->id_post); ?>">Delete</a></li>
						</ul>
						</div>
					<?php } ?>
					</div>
				<input type="text" class="form-control" name="comment" placeholder="Write a comment">
				<button type="submit" class="btn btn-success">Comment</button>
				</form>

				<!-- collapse for show up the comment -->
				<div id="comment<?php echo $ini->id_post; ?>" class="collapse">
				<?php foreach ($comment as $comment_ini): ?>
					<?php if ($ini->id_post == $comment_ini->id_post): ?>
						<div class="row">
							<div class="col-sm-2">
								<img class="img-rounded" src="https://www.combozo.com/file/2014/01/content_img_41.jpg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-sm-10">
							    <h6><?php echo $comment_ini->content_comment; ?></h6>
							    <h5>From <?php echo $comment_ini->name; ?> on <small><?php echo $comment_ini->date_created_comment; ?></small></h5>
							</div>
						</div>
						<hr>
					<?php endif ?>
				<?php endforeach ?>
				</div>

			</div>	
		<?php endforeach ?>
		</div><!--/.col-xs-12.col-sm-9-->

		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
			<div class="list-group">
			<a href="#" class="list-group-item active">Other Post</a>
			<?php foreach ($all_post as $all_post_ini): 
			$konten=character_limiter($all_post_ini->content,50);
			?>
				<a href="#" class="list-group-item"><dl>
				    <dt><?php echo $all_post_ini->name; ?> from <?php echo $all_post_ini->comm_name; ?></dt>
				    <dd>- <?php echo $konten; ?> <button type="button" class="btn btn-default">Visit</button></dd>
				  </dl>     
				</a>
			<?php endforeach ?>
			</div>
		</div><!--/.sidebar-offcanvas-->

	</div><!--/row-->
	<hr>
</div><!--/.container-->