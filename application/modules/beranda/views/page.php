
<div class="jumbotron">
  <div class="container">
    <p class="text-primary">This is Jumbotron whenever you want to put your community info here</p>
  </div>
</div>

<div class="container">
  <?php echo form_open('beranda/proses_new_post'); ?>
	<div class="form-group">
	  <label for="comment">Whats going on today ??</label>
	  <textarea class="form-control" rows="5" id="content" name="content"></textarea>
	</div>
	<button type="submit" class="btn btn-success">Post</button>
  <?php echo form_close(); ?><hr>
</div>

<?php foreach ($post as $ini): ?>
	<?php 
	//config
	$konten=str_replace("\n",'<br>', $ini->content);
	 ?>
	<div class="container">

	<div class="well well-lg">

		<div class="row">
			<div class="col-sm-1">
				<img src="<?php echo base_url('assets/images/dp.jpg'); ?>" class="img-rounded" alt="DP" width="70" height="70">
			</div>
			<div class="col-sm-11">
				<blockquote>
					<p><?php echo $ini->name; ?></p>
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
			</div>
			<input type="text" class="form-control" name="" placeholder="Write a comment">
		</form>
		
	</div>	
	</div>
<?php endforeach ?>

