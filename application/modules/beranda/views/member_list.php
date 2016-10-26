
<div class="container">
<div class="col-sm-9">
	<!-- Three columns of text below the carousel -->
<div class="row">

<?php foreach ($member as $ini): ?>
  <div class="col-lg-4">
    <img class="img-circle" src="https://www.combozo.com/file/2014/01/content_img_41.jpg" alt="Generic placeholder image" width="140" height="140">
    <h2><?php echo $ini->name; ?></h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
<?php endforeach ?>

</div><!-- /.row -->
</div>
</div>