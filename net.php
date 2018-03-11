<!DOCTYPE html>
<html>
<head>
	<title>Altnet profille</title>
	<link href="css/net.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="http://localhost/js/date.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

<style>
* {
	color: white;
}
</style>
</head>

<body style='overflow-x:hidden;' onclick="resize()">

	<div id="photo_loader">
		<div onclick="plclose()" id="photoload_wrap"></div>
		<div class="close_btn" onclick="plclose()"></div>
		<div id="photo_instructions" class="droppable">
			<center>
				<h3 class="clwhite">Please, choose photos</h3>
				<form id="uploader" enctype="multipart/form-data" method="post">
					<div class="js-fileapi-wrapper" style="position: relative;">
						<input class="noneform" id="inimg" type="file" name="my_image[]" multiple accept="image/*,image/jpeg">
						<label id="photo_loadform" onselect="alert(1)" class="photo_loadform blink_light" for="inimg">
							<div class="mt">
								Load
							</div>
						</label>
						<div onclick="plclose()" id="ok_photo" style="display: none;"><div style="margin-top: 11px; margin-left: 0px;">Ok</div></div>
						<div style="position: absolute; height: 129px; width: 100%; top: 129px;">
							<div id="loaded_img" class="warnimg1">
							</div>
						</div>
						<div id="linker" class="warnimg2">
							PNG, JPEG, JPG
						</div>
					</div>
				</form>
			</center>
		</div>
	</div>
	<div id="debug" style="position: fixed; top: 0px; left: 0px; background: blue; z-index: 99999; border-radius: 0px 0px 10px 0px; color: white; padding: 5px;">
<?php
include __DIR__.'/engine/proto_join.php';
?>
	</div>
	<div id="wrapper_nav" align="center">
		<div id="wrapper_items">
			<div id="logo_s"></div>
			<div class="blink_dark" id="menu_link" onclick="opengui()">
				<div id="mobile_menu"></div>
			</div>
			<div id="items">
				<div id="wrapper_move">
					<input class="form_1l anim_05s" id="searchform" type="text" name="search" placeholder="Search">
					<div id="handler" onmouseover="profile_open()" onmouseout="profile_close()">
						<div id="profile_link" class="blink_dark">
							<div id="profile_icon"></div>
							<div id="select_act" style="position: absolute; height: 80px; width: 100px; background: red; right: 0px; top: 45px; color: white; background: #222;">
								<div class="blink_dark" style="padding: 10px 20px;" onclick="profile();">Profile</div>
								<div class="blink_dark" style="padding: 10px 20px;" onclick="exit()">Exit</div>
							</div>
						</div>
					</div>
					<div id="messages_link" class="blink_dark" onclick="dialogs();">
						<div id="messages_icon"></div>
					</div>
					<div id="community_link" class="blink_dark" onclick="people()">
						<div id="community_icon"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="page">

		<center>
		<div id="center_align">
			<div id="profile_page">
				<div id="self_act">
					<div id="avatar">
						<div id="no_photo">Sorry. Photo does not exists</div>
					</div>
					<div style="color: grey; width: 200px; margin-top: 10px; float: right; text-align: left;">
						<div style="margin-top: 0px;">
							<div id="status_b" style="color: grey;">Status: Check it now</div>
						</div>
					</div>
				</div>
				<div id="main_act">
					<div id="greeting_act" style="width: 100%; height: 100px;">
						<div id="nickname"></div>
						<div id="wrap_act">
							<div id="send_msg">Send message</div>
							<div id="send_frirq">Friend request</div>
							<div id="send_call">Call to user</div>
						</div>
					</div>
					<div id="wall">
						<div style="color: grey; width: 100%; text-align: left;">
							<div style="margin-left: 20px; margin-top: -10px; margin-bottom: 10px;">
								<div id="status_s">Status: Check it now</div>
							</div>
						</div>
						<div id="form_wrap_fix">
							<div id="form_wrap">
								<div class="fl_r" id="form_wallbuttons">
									<img class="icon_formwall" src="/assets/image.png">
									<img class="icon_formwall" src="/assets/file.png">
									<img class="icon_formwall" src="/assets/video.png">
									<input type="submit" id="submit_wall" name="send" value="Send news">
								</div>
								<textarea id="wall_textarea" placeholder="Tell us about your news... :)"></textarea>
							</div>
						</div>
						<div class="post_wrap_fix">
							<div class="post_wrap" align="center">
								<div class="post_info">
									<div class="sub_postinfo" class="fl_l">
										<div class="post_avatar"></div>
										<div class="post_nickname">@Darkspive</div>
										<div class="post_date">Posted: 22.02.2018 (23:41)</div>
									</div>
									<div class="setup"></div>
								</div>
								<div class="post_text">
								Проверка
								</div>
								<div class="post_hr" align="center">
									<div class="sub_hr"></div>
								</div>
								<div class="post_prefs">
									<div class="like blink_dark">
										<div class="num_likenpost">
										1234
										</div>
									</div>
									<div class="repost blink_dark">
										<div class="num_likenpost">
										1234
										</div>
									</div>
									<div class="comment_wrap blink_dark">
										<div class="comment"></div>
										<div class="comment_info">Comment it</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>





			<div id="messages_wrap" style="margin-top: 20px;">
				<div class="em" onclick="chat(1,1)">
					<div class="messages_photo_wrap">
						<div class="messages_photo">
						</div>
						<div class="from_name">@Fromnickname</div>
						<div class="from_message">Message lorem insup dolor sit amet</div>
						<div class="from_time">12.01.17(21:00)</div>
						<div class="from_count">228</div>
					</div>
				</div>
			</div>


			<div id="chat_wrap">
				<div id="safe_zone" style="width: 100%; overflow: auto;">

				</div>

				<div id="form_wrap_fix" style="position: absolute; bottom: 0px;">
					<div id="form_wrap" style="width: 100%;">
						<div class="fl_r" id="form_wallbuttons">
							<img onclick="osendphoto()" class="icon_formwall" style="margin-left: 25px;" src="/assets/image.png">
							<div id="img_warnload"></div>
							<img class="icon_formwall" src="/assets/file.png">
							<img class="icon_formwall" src="/assets/video.png">
							<input type="submit" style="margin-left: 20px;" id="submit_wall" name="send" class="submit_msg" value="Send message" onclick="send_message(this)">
						</div>
						<textarea onkeypress="return pressmsg(event)" id="messages_textarea" placeholder="Let's send any message... :)"></textarea>
					</div>
				</div>
			</div>

			<div class="hh"></div>
			<div id="people_wrap">
				
			</div>


		</div>
		</center>
	</div>


<script>

window.onresize = resize;
window.onload = resize;

var gui = false;
var peerlink = '';
var cur_imageids;

profile();
profile_close();
setselfnick();

function osendphoto(){
	if(!isVisible("photo_loader")){
		document.getElementById("photo_loader").style.display = "block";
	} else {
		document.getElementById("photo_loader").style.display = "none";
	}
}

function deleteimg(i){
	delete cur_imageids[i];
}

function submitF(e){
	var files = document.getElementById("inimg").files;
	for (var i = 0, file; file = files[i]; i++) {
		var type = file.type;
			if(type == "image/jpeg" || type == "image/png" || type == "image/gif"){
			var reader = new FileReader();
			reader.onload = function(theFile) {
				document.getElementById("loaded_img").innerHTML += 
				"<img onclick='deleteimg("+i+")' style='display: inline-block; height: 50px; width: 50px; box-shadow: 0px 0px 10px grey; margin: 10px 5px;' src='"+theFile.target.result+"'/>";
			};
			reader.readAsDataURL(file);
		}
	}
	var form = document.getElementById("uploader");
	var formData = new FormData(form);
	document.getElementById('linker').innerHTML = '0%';
	$(".mt").html("Loading...");
	$.ajax({
		type:'POST', 
		url: './engine/load_photo.php', 
		data: formData, 
		cache:false, 
		contentType: false, 
		processData: false, 
		success:function(answer){
			answer = answer+"_";
			ardata = answer.split("_");
			data = ardata[0];
			answer = ardata[1].split(",");
			if(data == "noformat"){
				document.getElementById('linker').innerHTML = 'You can use only JPEG, PNG, GIF images';
				$(".mt").html("Load");
			} else if(data == "ok") {
				answer.forEach(function(item, i, arr){
					cur_imageids.push(item);
				});
				document.getElementById("img_warnload").style.display = "block";
				document.getElementById("img_warnload").innerHTML = cur_imageids.length;
				document.getElementById("ok_photo").style.display = "block";
				document.getElementById("photo_loadform").style.left = "110px";
				$(".mt").html("Add pictures");
			} else {
				$(".mt").html("Error");
			}
		},
		error:function(data){
			console.log(data);
		},
		xhr: function(){		
			var xhr = $.ajaxSettings.xhr();
			if (xhr.upload) {
				xhr.upload.addEventListener('progress', function(event) {
					var percent = 0;
					var position = event.loaded || event.position;
					var total = event.total;
					if (event.lengthComputable) {
						percent = Math.ceil(position / total * 100);
					}
					document.getElementById('linker').innerHTML = percent+'%';
				}, true);
			}
			return xhr;
    	}
	});
}

window.onload = function(){
    var input = document.getElementById('inimg');
    input.onchange = submitF;
}


function dialogs() {
	hiddenplease();
	document.getElementById("messages_wrap").style.display = "block";
	token = getCookie("token");
	$.ajax({
	url: "/engine/get_dialogs.php?access_token="+token,
	success: function(data){
		try {
			document.getElementById("messages_wrap").innerHTML = "";
			data = JSON.parse(data);
			data.forEach(function(item, i, data){
				var time = date("d.m.Y (H:i)", item.last_time);
				var peerset = item.peer_id+"_peer";
				document.getElementById("messages_wrap").innerHTML += 
					'<div class="em" onclick="chat(&quot;'+peerset+'&quot;)">'+
						'<div class="messages_photo_wrap">'+
							'<div class="messages_photo"></div>'+
							'<div class="from_name">@'+item.header+'</div>'+
							'<div class="from_message">@'+item.last_from+': '+item.last_msg+'</div>'+
							'<div class="from_time">'+time+'</div>'+
							'<div class="from_count">'+item.count+'</div>'+
						'</div>'+
					'</div>';
			});
		} catch(e) {
			alert("Oops... something went wrong. Please reload the page. Error: "+e);
		}
	}
	});
	resize();
}

function hiddenplease(){
	document.getElementById("profile_page").style.display = "none";
	document.getElementById("messages_wrap").style.display = "none";
	document.getElementById("chat_wrap").style.display = "none";
	document.getElementById("people_wrap").style.display = "none";
	document.getElementById("img_warnload").style.display = "none";
	document.getElementById("loaded_img").innerHTML = "";
	document.getElementById("ok_photo").style.display = "none";
	document.getElementById("photo_loadform").style.left = "140px";
	$(".mt").html("Load");
	cur_imageids = [];
}

function profile() {
	hiddenplease();
	document.getElementById("profile_page").style.display = "block";
	resize();
}

function set_peer(id){
	token = getCookie("token");
	$.ajax({
	url: "/engine/set_peer.php?access_token="+token+"&to="+id,
	success: function(data){
		try {
			chat(data);
		} catch(e) {
			alert("Oops... something went wrong. Please reload the page. Error: "+e);
		}
	}
	});
}

function people(){
	hiddenplease();
	document.getElementById("people_wrap").style.display = "block";
	$.ajax({
	url: "/engine/get_people.php",
	success: function(data){
		try {
			data = JSON.parse(data);
			document.getElementById("people_wrap").innerHTML = "";
			data.forEach(function(item, i, data){
				document.getElementById("people_wrap").innerHTML += 
				'<div class="em_person" align="left">'+
					'<div class="em_avatar"></div>'+
					'<div class="em_nickname">@'+item.nickname+'</div>'+
					'<div class="lets_write" onclick="set_peer('+item.id+')">Send message</div>'+
				'</div>';
			});
		} catch(e) {
			alert("Oops... something went wrong. Please reload the page. Error: "+e);
		}
	}
	});
	resize();
	/*
<div class="em_person" align="left">
					<div class="em_avatar"></div>
					<div class="em_nickname">@Darkspive</div>
					<div class="lets_write">Send message</div>
				</div>
	*/
}


function nullchat(){
	hiddenplease();
	document.getElementById("chat_wrap").style.display = "block";
}



function chat(p){
	hiddenplease();
	document.getElementById("chat_wrap").style.display = "block";
	peerlink = p;
	token = getCookie("token");
	var peer = p.split("_")[0];
	console.log(peer);
	$.ajax({
	url: "/engine/get_messages.php?access_token="+token+"&peer="+peer,
	success: function(data){
		try {
			document.getElementById("safe_zone").innerHTML = "";
			data = JSON.parse(data);
			data.forEach(function(item, i, data){
				set_message(item);
			});
			document.getElementById("safe_zone").innerHTML += "<div style='width: 100%; height: 14px;'></div>";
			var block = document.getElementById("safe_zone");
			block.scrollTop = block.scrollHeight + 1000;
		} catch(e) {
			console.log("Oops... something went wrong. Please reload the page. Server: "+data+" Error: "+e);
		}
	}
	});
}






function set_message(item){
	var time = date("d.m.Y (H:i)", item.time);
	var prepared_attachment = "";
	if(item.attachment !== "0" && item.attachment !== ""){
		prepared_attachment = item.attachment;
		var attachment = prepared_attachment.split(",");
		var count = attachment.length;
	} else {
		var count = 0;
	}
	if(count == 1){
		var crop = "<br><img style='margin: 10px; max-width: 100%; display: inline-block;' src='./engine/get_file.php?attachment="+attachment[0]+" '/>";
	} else if(count > 1) {
		var images = "";
		attachment.forEach(function(attach, i, arr){
			images += "<img style='margin: 10px 5px; height: 100px; display: inline-block;' src='./engine/get_file.php?attachment="+attach+" '  />";
		});
		var crop = "<br>"+images+"";
	} else {
		var crop = "";
	}
	if(item.out == 0){
		var data = $("#safe_zone").children().last().attr("class");
		var check = "";
		if(data !== undefined){
			check = explode(data)[0];
		}
		if(check == "message_wrap_in"){
			document.getElementById("safe_zone").innerHTML += 
			'<div style="min-height: 30px; box-shadow: none;" class="message_wrap_in '+item.id+' blink_dark2" align="left">'+ 
				'<div style="font-size: 15px; margin-top: 8px; margin-left: 60px;" class="message_in msg'+item.id+'">'+item.message+'  '+crop+' </div>'+
				'<div style="display: none;" class="message_time_in">'+time+'</div>'+
			'</div>';
		} else {
			document.getElementById("safe_zone").innerHTML +=
			'<div style="margin-top: 8px;" class="message_wrap_in '+item.id+' blink_dark2" align="left">'+ 
				'<div class="message_avatar_in"></div>'+
				'<div class="message_header_in">@'+item.nickname+'</div>'+
				'<div class="message_in msg'+item.id+'">'+item.message+' '+crop+' </div>'+
				'<div class="message_time_in">'+time+'</div>'+
			'</div>';
		}
	} else if(item.out == 1){
		var data = $("#safe_zone").children().last().attr("class");
		var check = "";
		if(data !== undefined){
			check = explode(data)[0];
		}
		if(check == "message_wrap_out"){
			document.getElementById("safe_zone").innerHTML +=
			'<div style="min-height: 30px; box-shadow: none;" class="message_wrap_out '+item.id+' blink_dark2" align="right">'+ 
				'<div style="font-size: 15px; margin-top: 8px; margin-right: 60px;" class="message_out msg'+item.id+'">'+item.message+' '+crop+'  </div>'+
				'<div style="display: none;" class="message_time_out">'+time+'</div>'+
			'</div>';
		} else {
			document.getElementById("safe_zone").innerHTML +=
			'<div style="margin-top: 8px;" class="message_wrap_out '+item.id+' blink_dark2" align="right">'+ 
				'<div class="message_avatar_out"></div>'+
				'<div class="message_header_out">@'+item.nickname+'</div>'+
				'<div class="message_out msg'+item.id+'">'+item.message+'  '+crop+'   </div>'+
				'<div class="message_time_out">'+time+'</div>'+
			'</div>';
		}
	}
}





/* Resizing blocks method*/

function resize() {

	/////////////////////////////////////////////////////////////////
	var height = document.documentElement.clientHeight; 
	height2 = height - 65;
	document.getElementById("chat_wrap").style.height = height2+"px";
	height2 = height - 165;
	document.getElementById("safe_zone").style.height = height2+"px";
	/////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////
	var safedistance = 3;
	var width_wrapitems = document.getElementById('wrapper_items').clientWidth;
	var width_logo = document.getElementById('logo_s').clientWidth;
	var new_widthitems = width_wrapitems - width_logo - safedistance;
	if(new_widthitems <= 400){
		new_widthitems = width_wrapitems;
		document.getElementById("items").style.width = new_widthitems+"px";
	} else {
		document.getElementById("items").style.width = new_widthitems+"px";
	}
	//////////////////////////////////////////////////////////////////

	//////////////////////////////////////////////////////////////////////////
	var safedistance = 70;
	var width_wrapitems = document.body.clientWidth;
	if(width_wrapitems >= 1100){
		width_wrapitems = 1100;
	}
	var width_logo = document.getElementById('avatar').clientWidth;
	var new_widthitems = width_wrapitems - width_logo - safedistance;
	if(new_widthitems < 550){
		new_widthitems = width_wrapitems-10;
		document.getElementById("main_act").style.width = new_widthitems+"px";
		document.getElementById("self_act").style.float = "none";
		document.getElementById("self_act").style.marginLeft = "0px";
		document.getElementById("avatar").style.float = "none";
		document.getElementById("status_b").style.display = "none";
		document.getElementById("status_s").style.display = "block";
	} else {
		document.getElementById("self_act").style.float = "left";
		document.getElementById("self_act").style.marginLeft = "0px";
		document.getElementById("avatar").style.float = "right";
		document.getElementById("status_b").style.display = "block";
		document.getElementById("status_s").style.display = "none";
		document.getElementById("main_act").style.width = new_widthitems+"px";
	}
	//////////////////////////////////////////////////////////////////////////

	//////////////////////////////////////////////////////////////////////////
	var safedistance = 30;
	var width_wrapitems = document.getElementById('form_wrap').clientWidth;
	var width_em = document.getElementById('form_wallbuttons').clientWidth;
	var new_widthitems = width_wrapitems - width_em - safedistance;
	document.getElementById("wall_textarea").style.width = new_widthitems+"px";
	//////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////////////////////////////////////////////
	var safedistance = 174;
	var width_wrapitems = document.getElementById('chat_wrap').clientWidth;
	var new_widthitems = width_wrapitems - safedistance;
	document.getElementById("messages_textarea").style.width = new_widthitems+"px";
	///////////////////////////////////////////////////////////////////////////////
}






function opengui(){
	if(gui == false){
		document.getElementById("wrapper_move").style.display = "block";
		gui = true;
	} else {
		document.getElementById("wrapper_move").style.display = "none";
		gui = false;
	}
}

function setselfnick(){
	token = getCookie("token");
	$.ajax({
	url: "/engine/get_profile.php?token="+token,
	success: function(data){
		data = JSON.parse(data);
		data = data.message;
		data = JSON.parse(data);
		if(data.code == "400"){
			location = "http://<?php echo get_configuration('url_server'); ?>/";
		}
		document.getElementById('nickname').innerHTML = "@"+data.nickname;
	}
	});
}

function send_message() {
	var url = "/engine/send_message.php";
	$(".submit_msg").val("Loading...");
	peerdata = peerlink.split("_");
	message = document.getElementById("messages_textarea").value;
	if(message == "" && cur_imageids.length == 0 || message == "\n"){
		document.getElementById("messages_textarea").value = "";
		$(".submit_msg").val("Send message");
		return null;
	}
	var data = {
		"access_token": getCookie("token"),
		"message": message,
		"is_public": "0",
		"peer": peerdata[0],
		"attachment": cur_imageids.join(",")
	}
	cur_imageids = [];
	$.ajax({
    	url: url,
    	method: "post",
    	data: data,
    	error: function(message) {
        	console.log(message);
    	},
    	success: function(data) {
        	console.log(data);
        	$(".submit_msg").val("Send message");
        	document.getElementById("messages_textarea").value = "";
        	chat(peerlink);
    	}
	});
}


function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}


function isVisible(id) {
    var element = $('#' + id);
    if (element.length > 0 && element.css('visibility') !== 'hidden' && element.css('display') !== 'none') {
        return true;
    } else {
        return false;
    }
}

function plclose(){
	document.getElementById("photo_loader").style.display = "none";
}

function plopen() {
	document.getElementById("photo_loader").style.display = "block";
}

function pressmsg(e) {
	if(!isTouch()){
		if(((e.keyCode == 13) || (e.keyCode == 10)) && (e.ctrlKey == false)){
			em = document.getElementById("submit_wall");
			send_message(em);
		}
		if (((e.keyCode == 13) || (e.keyCode == 10)) && (e.ctrlKey == true)){
			nextline('');
		}
	}
}

function nextline(val){
	var element = document.getElementById('messages_textarea'); 
	var str     = element.value;
	var start   = element.selectionStart; 
	var length  = element.selectionEnd - element.selectionStart;
	element.value = str.substr(0, start) + str.substr(start, length) + val + str.substr(start + length);
}

function isTouch() {
	try {
		document.createEvent("TouchEvent");
		return true;
	}
	catch (e) { return false; }
}

function smdebug(string){
	document.getElementById("debug").innerHTML += "";
	document.getElementById("debug").innerHTML += string;
}

function dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }
    alert(out);
}

function explode(string){
	return string.split(" ");
}


function typeOf(obj) {
  return {}.toString.call(obj).split(' ')[1].slice(0, -1).toLowerCase();
}

function profile_open(){
	document.getElementById("select_act").style.display = "block";
}

function profile_close(){
	document.getElementById("select_act").style.display = "none";
}


function exit() {
	delallCookie();
	location = "http://<?php echo get_configuration('url_server'); ?>/";
}

function delallCookie() {
	document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
}
</script>
</body>
</html>