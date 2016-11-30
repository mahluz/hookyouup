
<div class="container">
  <h2>Entri List</h2>
  <a href="<?php echo base_url('Admin/new_entri'); ?>"><button type="button" class="btn btn-info">New Entri</button></a><hr>
  <div class="row" style="width: 50vw;">
    <?php foreach ($blog as $ini) {
    $post=character_limiter($ini->content,200);?>
    <div class="blog-post">
      <h2 class="blog-post-title"><?php echo $ini->title; ?></h2>
      <p class="blog-post-meta"><span class="glyphicon glyphicon-time"></span><?php echo $ini->date_created ?> by <a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $ini->nama; ?></a></p>
      <div class="blog">
        <?php echo $ini->content; ?>
      </div>
      <a href=""><button type="button" class="btn btn-info">Edit</button></a>
      <a href="<?php echo base_url('admin/delete_blog/'.$ini->id_blog); ?>"><button type="button" class="btn btn-danger">Delete</button></a>
      <a href="<?php echo base_url('admin/tampil_blog/'.$ini->id_blog); ?>"><input type="button" name="buka_post" value="Read More" class="btn btn-default"></a>
    </div><!-- /.blog-post -->
    <?php }?>
  <!--End Row -->  
  </div>
</div>


