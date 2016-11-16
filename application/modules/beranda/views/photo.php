<div class="container">
	<div class="col-sm-9">

		<div class="btn-group">
			  <a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#upload">Upload Photo</a>
		</div>

		<div id="upload" class="collapse">
		<h4>Select files from your computer</h4>
		<form action="Beranda/do_upload" method="post" enctype="multipart/form-data" id="js-upload-form">
		<div class="form-inline">
		<span class="btn btn-success fileinput-button">
		<i class="glyphicon glyphicon-plus"></i>
		<span>Add files</span>
		<input type="file" name="fileToUpload" multiple>
		</span>
		<button type="submit" class="btn btn-primary start">
		<i class="glyphicon glyphicon-upload"></i>
		<span>Start upload</span>
		</button>
		</div>
		</form>
</div>

	<hr>
	</div>

	<div class="col-sm-11">
		<div class="row">
			<?php foreach ($photo as $ini): ?>
			  	
		  		<img src="<?php echo base_url('assets/gallery/'.$this->session->userdata('id_comm').'/photo/'.$ini->photo_name); ?>" id="zoom" class="img-thumbnail" alt="Cinque Terre" width="250" height="250" data-toggle="modal" data-target="#myModal<?php echo $ini->id_photo; ?>">	
				  	

				<!-- Modal -->
				<div id="myModal<?php echo $ini->id_photo; ?>" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Picture of <?php echo $community->comm_name; ?></h4>
							</div>
							<div class="modal-body">
								<img src="<?php echo base_url('assets/gallery/'.$this->session->userdata('id_comm').'/photo/'.$ini->photo_name); ?>" class="img-thumbnail" alt="Cinque Terre">
								<!-- Left-aligned -->
								<div class="media">
									<div class="media-left">
									<img src="http://www.w3schools.com/bootstrap/img_avatar1.png" class="media-object" style="width:60px">
									</div>
									<div class="media-body">
									<h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<h5>Click here to download</h5>
									<a href="<?php 
									$name=$ini->photo_name;
									$comm=$community->comm_name;
									echo base_url('Beranda/download_photo/'.$name.'/'.$comm); ?>"><button class="btn btn-success" type="button">Download</button></a>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

			<?php endforeach ?>
		</div>
	</div>
</div>

<style type="text/css">
<!-- End chat -->
#zoom{
	transition: all .2s ease-in-out;
}
#zoom:hover{
	transform: scale(1.1);	
}

</style>