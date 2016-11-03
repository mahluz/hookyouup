<script type="text/javascript">	  
		$( document ).ready ( function () {
			
			$('#nickname').keyup(function() {
				var nickname = $(this).val();
				
				if(nickname == ''){
					$('#msg_block').hide();
				}else{
					$('#msg_block').show();
				}
			});
			
			// initial nickname check
			$('#nickname').trigger('keyup');
		});
		
		
	</script>
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
						<div class="col-md-3">
							<div class="input-group">
								<span class="input-group-addon">
									Nickname:
								</span>
								<input id="nickname" type="text" class="form-control input-sm" value="<?php echo $this->session->userdata('name'); ?>" disabled />
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
<script type="text/javascript">
	var request_timestamp = 0;

var setCookie = function(key, value) {
	var expires = new Date();
	expires.setTime(expires.getTime() + (5 * 60 * 1000));
	document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

var getCookie = function(key) {
	var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
	return keyValue ? keyValue[2] : null;
}

var guid = function() {
	function s4() {
		return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
	}
	return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
}

if(getCookie('user_guid') == null || typeof(getCookie('user_guid')) == 'undefined'){
	var user_guid = guid();
	setCookie('user_guid', user_guid);
}


// https://gist.github.com/kmaida/6045266
var parseTimestamp = function(timestamp) {
	var d = new Date( timestamp * 1000 ), // milliseconds
		yyyy = d.getFullYear(),
		mm = ('0' + (d.getMonth() + 1)).slice(-2),	// Months are zero based. Add leading 0.
		dd = ('0' + d.getDate()).slice(-2),			// Add leading 0.
		hh = d.getHours(),
		h = hh,
		min = ('0' + d.getMinutes()).slice(-2),		// Add leading 0.
		ampm = 'AM',
		timeString;
			
	if (hh > 12) {
		h = hh - 12;
		ampm = 'PM';
	} else if (hh === 12) {
		h = 12;
		ampm = 'PM';
	} else if (hh == 0) {
		h = 12;
	}

	timeString = yyyy + '-' + mm + '-' + dd + ', ' + h + ':' + min + ' ' + ampm;
		
	return timeString;
}
var sendChat = function (message, callback) {
	$.getJSON('<?php echo base_url(); ?>Beranda/send_message?message=' + message + '&nickname=' + $('#nickname').val() + '&guid=' + getCookie('user_guid'), function (data){
		callback();
	});
}

var append_chat_data = function (chat_data) {
	chat_data.forEach(function (data) {
		var is_me = data.guid == getCookie('user_guid');
		
		if(is_me){
			var html = '<li class="right clearfix">';
			html += '	<span class="chat-img pull-right">';
			html += '		<img src="http://placehold.it/50/FA6F57/fff&text=' + data.nickname.slice(0,2) + '" alt="User Avatar" class="img-circle" />';
			html += '	</span>';
			html += '	<div class="chat-body clearfix">';
			html += '		<div class="header">';
			html += '			<small class="text-muted"><span class="glyphicon glyphicon-time"></span>' + parseTimestamp(data.timestamp) + '</small>';
			html += '			<strong class="pull-right primary-font">' + data.nickname + '</strong>';
			html += '		</div>';
			html += '		<p>' + data.message + '</p>';
			html += '	</div>';
			html += '</li>';
		}else{
		  
			var html = '<li class="left clearfix">';
			html += '	<span class="chat-img pull-left">';
			html += '		<img src="http://placehold.it/50/55C1E7/fff&text=' + data.nickname.slice(0,2) + '" alt="User Avatar" class="img-circle" />';
			html += '	</span>';
			html += '	<div class="chat-body clearfix">';
			html += '		<div class="header">';
			html += '			<strong class="primary-font">' + data.nickname + '</strong>';
			html += '			<small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span>' + parseTimestamp(data.timestamp) + '</small>';
			
			html += '		</div>';
			html += '		<p>' + data.message + '</p>';
			html += '	</div>';
			html += '</li>';
		}
		$("#received").html( $("#received").html() + html);
	});
  
	$('#received').animate({ scrollTop: $('#received').height()}, 1000);
}

var update_chats = function () {
	if(typeof(request_timestamp) == 'undefined' || request_timestamp == 0){
		var offset = 60*15; // 15min
		request_timestamp = parseInt( Date.now() / 1000 - offset );
	}
	$.getJSON('<?php echo base_url(); ?>Beranda/get_messages?timestamp=' + request_timestamp, function (data){
		append_chat_data(data);	

		var newIndex = data.length-1;
		if(typeof(data[newIndex]) != 'undefined'){
			request_timestamp = data[newIndex].timestamp;
		}
	});      
}
$('#submit').click(function (e) {
	e.preventDefault();
	
	var $field = $('#message');
	var data = $field.val();

	$field.addClass('disabled').attr('disabled', 'disabled');
	sendChat(data, function (){
		$field.val('').removeClass('disabled').removeAttr('disabled');
	});
});

$('#message').keyup(function (e) {
	if (e.which == 13) {
		$('#submit').trigger('click');
	}
});

setInterval(function (){
	update_chats();
}, 1500);
</script>