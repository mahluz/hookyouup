<div class="container">

    <div class="well">
        <?php echo form_open('beranda/proses_new_post_profile'); ?>
			<div class="form-group">
			<label for="comment">Whats on your mind ??</label>
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
						<img src="<?php echo base_url('assets/gallery/'.$this->session->userdata('id_comm').'/users/'.$this->session->userdata('selected_profile').'/'.$user->photo_profile); ?>" class="img-rounded" alt="DP" width="70" height="70">
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
					<button type="button" class="btn btn-primary">Show Comment</button>
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

			</div>	
		<?php endforeach ?>
    </div>
              
</div>
