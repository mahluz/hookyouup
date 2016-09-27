<div class="content">
<!-- image slider -->
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
      <img src="<?php echo base_url('assets/images/2.jpg'); ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/images/3.JPG'); ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/images/5.JPG'); ?>" alt="Flower">
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/images/6.JPG'); ?>" alt="Flower">
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
    <img alt="Logo" src="<?php echo base_url('assets/images/logo.jpg'); ?>">
    <h2><b>Dancer 4 Life</b></h2>
    <h3>We connect each Dance Community</h3>
    </center>
    <hr/>
    <div class="coverkiri">
    	<div style="text-align: justify;">
<span style="background-color: white;"><i><i class="fa fa-quote-left fa-3x fa-pull-left fa-border"></i>Lorem ipsum dolor sit amet,consectetur adipiscing elit.
Nam rutrum,nisi vitae viverra ornare,erat orci
vestibulum nulla,elementum hendrerit nisi lorem
eget libero.Aliquam sed purus egestas,
volutpat magna sit amet,ultrices libero.
Nullan sit amet luctus libero,et gravida odio.
Maecenas sit amet tincidunt tellus.
Vivamus lorem nisi,molestie eu tellus sit amet,
vehicula accumsan nulla.</i></span></div>
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