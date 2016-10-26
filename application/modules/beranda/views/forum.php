
<div class="container">
	<div class="col-md-9">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-comment"></span> Public Chat <?php echo $community->comm_name; ?>
				</div>
				<div class="panel-body">
					<ul class="chat" id="received">
						
					</ul>
				</div>
				<div class="panel-footer">
					<div class="clearfix">
						<div class="col-md-2">
							<div class="input-group">
								<span class="input-group-addon">
									Hello <?php echo $this->session->userdata('name'); ?>
								</span>
							</div>
						</div>
						<div class="col-md-9" id="msg_block">
							<div class="input-group">
								<input id="message" type="text" class="form-control input-sm" placeholder="Type your message here..." />
								<span class="input-group-btn">
									<button class="btn btn-warning btn-sm" id="submit">Send</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  
</div>
