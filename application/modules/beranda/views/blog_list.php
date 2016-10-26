<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-8">
    <h2>Entri List</h2>
    <a href="<?php echo base_url('Beranda/new_blog'); ?>"><button type="button" class="btn btn-info">New Entri</button></a><hr>
      <div class="row" style="width: 50vw;">
      <?php foreach ($blog as $ini) {
      $post=character_limiter($ini->content,200);?>
        <div class="blog-post">
          <h2 class="blog-post-title"><?php echo $ini->title; ?></h2>
          <p class="blog-post-meta"><span class="glyphicon glyphicon-time"></span><?php echo $ini->date_created ?> by <a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $ini->name; ?></a></p>
          <p><?php echo $post; ?></p>
          <a href=""><button type="button" class="btn btn-info">Edit</button></a>
          <a href="<?php echo base_url('Beranda/delete_blog/'.$ini->id_ann); ?>"><button type="button" class="btn btn-danger">Delete</button></a>
          <a href="<?php echo base_url('admin/tampil_blog/'.$ini->id_ann); ?>"><input type="button" name="buka_post" value="Read More" class="btn btn-default"></a>
        </div><!-- /.blog-post -->
      <?php }?>
      <!--End Row -->  
      </div>
    </div><!--/.col-xs-12.col-sm-9-->

    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      <div class="list-group">
        <a href="#" class="list-group-item active">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
      </div>
    </div><!--/.sidebar-offcanvas-->
    
</div><!--/row-->
<hr>

</div><!--/.container-->