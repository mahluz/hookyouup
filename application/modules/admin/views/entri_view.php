<?php 
$selected_blog->content=str_replace("\n", '<br>', $selected_blog->content);
 ?>
<div class="container">
	<a href="<?php echo base_url('Admin'); ?>"><button type="button" class="btn btn-primary">Back to Blog list</button></a>
	<div class="row">
		<div class="col-sm-9">
			<h1><?php echo $selected_blog->title; ?></h1>
			<hr>
			<p><?php echo $selected_blog->content; ?></p>
		</div>
	</div>
</div>