<style type="text/css">
	.cuadro_intro_hover{
        padding: 0px;
		position: relative;
		overflow: hidden;
		height: 200px;
	}
	.cuadro_intro_hover:hover .caption{
		opacity: 1;
		transform: translateY(-150px);
		-webkit-transform:translateY(-150px);
		-moz-transform:translateY(-150px);
		-ms-transform:translateY(-150px);
		-o-transform:translateY(-150px);
	}
	.cuadro_intro_hover img{
		z-index: 4;
	}
	.cuadro_intro_hover .caption{
		position: absolute;
		top:150px;
		-webkit-transition:all 0.3s ease-in-out;
		-moz-transition:all 0.3s ease-in-out;
		-o-transition:all 0.3s ease-in-out;
		-ms-transition:all 0.3s ease-in-out;
		transition:all 0.3s ease-in-out;
		width: 100%;
	}
	.cuadro_intro_hover .blur{
		background-color: rgba(0,0,0,0.7);
		height: 300px;
		z-index: 5;
		position: absolute;
		width: 100%;
	}
	.cuadro_intro_hover .caption-text{
		z-index: 10;
		color: #fff;
		position: absolute;
		height: 300px;
		text-align: center;
		top:-20px;
		width: 100%;
	}
</style>
<hr>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<hr>

        <footer>
            <div class="container">
            	<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="cuadro_intro_hover " style="background-color:#cccccc;">
									<p style="text-align:center;">
										<img src="<?php echo base_url('assets/images/back-end.jpg'); ?>" class="img-responsive" alt="">
									</p>
									<div class="caption">
										<div class="blur"></div>
										<div class="caption-text">
											<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Back-End Developer</h3>
											<p>Student of Semarang State Univesity</p>
											<a class=" btn btn-default" href="https://www.facebook.com/zulham.achmad"><span class="glyphicon glyphicon-plus"> INFO</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="cuadro_intro_hover " style="background-color:#cccccc;">
									<p style="text-align:center;">
										<img src="<?php echo base_url('assets/images/back-end.jpg'); ?>" class="img-responsive" alt="">
									</p>
									<div class="caption">
										<div class="blur"></div>
										<div class="caption-text">
											<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Front-End Developer</h3>
											<p>Student of Semarang State Univesity</p>
											<a class=" btn btn-default" href="https://www.facebook.com/zulham.achmad"><span class="glyphicon glyphicon-plus"> INFO</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
								<h3>See my other Website:</h3>
				                <ul>
								<li><a href="#"><i class="fa fa-globe"></i> Egypt</a></li>
								<li><a href="http://5302414040.blogspot.com/"><i class="fa fa-book"></i> College Assignment Collection<br>Semarang State University</a></li>
								</ul>
							</div>
							<div class="col-sm-6">
								<h3>Contact:</h3>
								<p>Have a question or feedback? Email me!</p>
								<p><i class="fa fa-envelope"> </i> zulham724@gmail.com</p>
				            	<h3>Follow:</h3>
							
							
								<a href="https://twitter.com/ZulhamAzwar" id="gh" target="_blank" title="Twitter"><span class="fa-stack fa-lg">
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-twitter fa-stack-1x"></i>
								</span>
								Twitter</a>
								<a href="https://github.com/mahluz"  target="_blank" title="GitHub"><span class="fa-stack fa-lg">
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-github fa-stack-1x"></i>
								</span>
								GitHub</a>
									<p>Copyright © hookyouup | <a href="">Privacy Policy</a> | <a href="">Terms of Use</a></p>	
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
            </div>	
        </footer>
</body>
</html>