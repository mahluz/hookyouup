<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-8">
    <h2>Entri List</h2>
    <a href="<?php echo base_url('Beranda/new_blog'); ?>"><button type="button" class="btn btn-info">New Entri</button></a><hr>
      <div class="row" style="width: 50vw;">
      <?php foreach ($blog as $ini) {
      $konten=str_replace("\n",'<br>', $ini->content);
      $post=character_limiter($ini->content,200);?>
        <div class="blog-post">
          <h2 class="blog-post-title"><?php echo $ini->title; ?></h2>
          <p class="blog-post-meta"><span class="glyphicon glyphicon-time"></span><?php echo $ini->date_created ?> by <a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $ini->name; ?></a></p>
          <p><?php echo $post; ?></p>
          <?php 
          if($ini->name==$this->session->userdata('name')){ ?>
            <a href=""><button type="button" class="btn btn-info">Edit</button></a>
            <a href="<?php echo base_url('Beranda/delete_blog/'.$ini->id_ann); ?>"><button type="button" class="btn btn-danger">Delete</button></a>
          <?php } ?>
          <input type="button" name="buka_post" value="Read More" class="btn btn-default" data-toggle="modal" data-target="#myModal<?php echo $ini->id_ann; ?>" >
        </div><!-- /.blog-post -->

        <!-- Modal -->
        <div id="myModal<?php echo $ini->id_ann; ?>" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
          <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title"><?php echo $ini->title; ?></h2>
              </div>
              <div class="modal-body">
                <h4>
                  <i>
                    <?php echo $konten; ?>
                  </i>
                </h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      <?php }?>
      <!--End Row -->  
      </div>
    </div><!--/.col-xs-12.col-sm-9-->

    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      <div class="list-group">
        <a href="#" class="list-group-item active">See also</a>
        <?php foreach ($all_blog as $ini): $konten=character_limiter($ini->content,50);?>
        	<a href="#" class="list-group-item">
        		<div class="well well-lg">
        			<blockquote>
        				<h4><?php echo $ini->title; ?></h4>
        				<footer><?php echo $konten; ?>
        				<button type="button" class="btn btn-default">Visit</button></footer>
        			</blockquote>
        		</div>
        	</a>
        <?php endforeach ?>
      </div>
    </div><!--/.sidebar-offcanvas-->
    
</div><!--/row-->
<hr>

</div><!--/.container-->