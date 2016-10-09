<div class="content">
<!-- image slider -->
<br><br>
<div class="slider">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <img src="<?php echo base_url('assets/images/banner-mobile.png'); ?>" class="img-rounded" alt="Cinque Terre" width="1300" height="720">
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets/images/2.jpg'); ?>" alt="Chania" class="img-rounded" alt="Cinque Terre" width="1300" height="720">
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/images/10.JPG'); ?>" alt="Flower" class="img-rounded" alt="Cinque Terre" width="1300" height="720">
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/images/6.JPG'); ?>" alt="Community" class="img-rounded" alt="Cinque Terre" width="1300" height="720">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end .slider --></div>
<hr />
<div class="cover">
	<center>
    <h2>Owh Yeah!! "Hook You Up" Is Coming !!</h2>
     <!-- <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="img-rounded" alt="Cinque Terre" width="350" height="200"> -->
    <!-- <img alt="Logo" src="<?php echo base_url('assets/images/logo.jpg'); ?>"> -->
    <h3>We connect each Community</h3>
    </center>
    <hr/>
    <div class="coverkiri">
    <h1>NEWS</h1>
    <?php foreach ($blog as $ini) {
      $post=character_limiter($ini->content,200);?>
    	<div style="text-align: justify;">
      <h3><?php echo $ini->title; ?></h3>
      <p class="blog-post-meta"><span class="glyphicon glyphicon-time"></span><?php echo $ini->date_created ?> by <a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $ini->nama; ?></a></p>
      <span style="background-color: white;"><i><i class="fa fa-quote-left fa-3x fa-pull-left fa-border"></i><?php echo $post; ?></i></span></div>
      <input type="button" name="buka_post" value="Read More" class="btn btn-default"></a>
      <hr>
      <?php }?>
    <!-- end .coverkiri --></div>
    <div class="coverkanan">
    <h1>EVENT</h1>
    <hr />
    <div id="page-content" class="well text-center"></div>
    <ul id="pagination-demo" class="pagination-sm"></ul>
    
	<script>
	 $('#pagination-demo').twbsPagination({
			totalPages: 35,
			visiblePages: 5,
        	onPageClick: function (event, page) {
            $('#page-content').text('Page ' + page);
        }
    });
	</script>
    <!-- end .coverkanan --></div>
<!-- end .cover --></div>
<!-- end .content --></div>