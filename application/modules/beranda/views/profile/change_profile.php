<div class="container">
	<div class="well">
		<h4>Select files from your computer</h4>
		<form action="Beranda/do_upload_profile" method="post" enctype="multipart/form-data" id="js-upload-form">
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
</div>