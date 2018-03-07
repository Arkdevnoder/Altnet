<?php include __DIR__.'/engine/proto_start.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<title>AltNET</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/particles.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">  
	<link href="css/ui.css" rel="stylesheet">
</head>
<body style='overflow-x:hidden; overflow-y: scroll !important;'>
<div id="page_login">
	<div id="close_btn" onclick="kill_showbox()">
	</div>
	<div id="login_window">
		<form action="./engine/gate.php" method="POST" OnSubmit="login(this); return false">
			<div id="fields_login">
				<input class="form_1l anim_05s" id="layerform5" type="text" name="nickname" placeholder="Nickname">
				<input class="form_1l anim_05s" id="layerform6" type="password" name="password" placeholder="Password">
				<input type="hidden" name="act" value="login">
			</div>
			<input class="anim_05s" id="login_sbtn" type="submit" value="">
			<div id="status_login"></div>
			<div id="recovery_text" onclick="recovery()">Recovery password</div>
		</form>
	</div>
	<div id="login_window_recovery">
		<form action="./engine/gate.php" method="POST" OnSubmit="recemail(this); return false">
			<div id="fields_login" style="margin-top: 90px; height: 10px;">
				<input class="form_1l anim_05s" id="layerform5" type="email" name="email" placeholder="Recovery email">
				<input type="hidden" name="act" value="recovery">
			</div>
			<input id="login_sbtn" type="submit" class="anim_05s" value="">
			<div id="status_recemail"></div>
			<div id="backbtn" style="margin-top: -5px;" onclick="backlogin()">&lt;= Back</div>
		</form>
	</div>
</div>
	<div id="particles-js">
		<div id="logo"></div>
		<div id="join_btn" class="anim_05s" onclick="on_view_reg()">
			<div id="join_btn_text">JOIN</div>
		</div>
	</div>
	<div id="wrap_reg" align="center">
		<div id="inwrap_reg" align="left">
			<form action="./engine/gate.php" method="POST" OnSubmit="registration(this); return false">
				<div id="forms">
					<input class="form_1l anim_05s" placeholder="Email" id="layerform1" type="text" name="email">
					<br>
					<input class="form_1l anim_05s" placeholder="Nickname" id="layerform2" type="text" name="nickname">
					<br>
					<input class="form_1l anim_05s" placeholder="Password" id="layerform3" type="password" name="password">
					<br>
					<input class="form_1l anim_05s" placeholder="Confirm password" id="layerform4" type="password" name="confpass">
					<input type="hidden" name="act" value="registration">
				</div>
				<div id="rightbar">
					<div id="instructions">
						Email: valid email format. Example: example@mail.org<br>
						Nickname: valid characters of the English alphabet and numbers<br>
						Password: valid characters of the English alphabet and numbers
					</div>
					<div id="buttons">
						<input class="anim_05s" id="layerbtn_reg" type="submit" value="START">
						<div class="anim_05s" id="login_btn" onclick="show_loginbox()">
							LOGIN
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="storage" align="center">
		<div id="storage_text">
			...already 0 joined us
		</div>
	</div>

	<div id="debug" style="position: fixed; top: 0px; left: 0px; background: red; border-radius: 0px 0px 10px 0px; color: white; padding: 5px;"></div>

	<script type="text/javascript">

	var debug = false; 
	if(debug !== true){
		document.getElementById("debug").style.display = "none";
	} else {
		document.getElementById("debug").style.display = "block";
	}

		function dump(obj) {
 			var out = '';
			for (var i in obj) {
				out += i + ": " + obj[i] + "\n";
			}
			alert(out);
		}

		window.onload = function(){
			refresh_page();
		}
		window.onresize = function(){
			refresh_page();
		}
		particlesJS.load('particles-js', 'js/particles.json', function() {
  			console.log('callback - particles.js config loaded');
		});
		function resize_particle(){
			var win_w = windowWidth();
			var win_h = windowHeight();
			document.getElementById('particles-js').style.width = win_w + 'px';
			document.getElementById('particles-js').style.height = win_h + 'px';
		}
		function windowHeight () {
			var wh = document.documentElement;
			return self.innerHeight || (wh && wh.clientHeight) || document.body.clientHeight;
		}
		function windowWidth () {
			var ww = document.documentElement;
			return self.innerWidth || (ww && ww.clientWidth) || document.body.clientWidth;
		}
		function refresh_page(){
			resize_particle();
		}
		function on_view_reg(){
			if(windowHeight() < 600){
				var scroll_el = '#join_btn';
	 			$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
			} else {
				$('html, body').animate(
				{scrollTop:$(document).height()}, 'slow');
			}
			fullScreen();
		}
		function fullScreen() {
			element = document.documentElement;
			if(element.requestFullScreen) {
				element.requestFullScreen();
			} else if(element.webkitRequestFullScreen ) {
				element.webkitRequestFullScreen();
			} else if(element.mozRequestFullScreen) {
				element.mozRequestFullScreen();
			}
		}
		function show_loginbox() {
			document.getElementById('page_login').style.display = 'block';
		}
		function kill_showbox() {
			document.getElementById('page_login').style.display = 'none';
		}
		function recovery() {
			document.getElementById('login_window').style.display = 'none';
			document.getElementById('login_window_recovery').style.display = 'block';
		}
		function backlogin() {
			document.getElementById('login_window_recovery').style.display = 'none';
			document.getElementById('login_window').style.display = 'block';
		}
		function registration(form) {
			document.getElementById('instructions').innerHTML = "Loading...";
			$.post(form.action, $(form).serialize())
			.done(function(data) {
				delallCookie();
				data = JSON.parse(data);
				document.getElementById('instructions').innerHTML = data.message;
				if(data.code == 100) {
					setCookie("token", data.access_token, 360);
					$.ajax({
						url: 'net.php', 
						success: function(data){
							document.write(data);
						}
					});
				}
  			})
  			.fail(function() {
  				alert("connection_error");
			});
		}
		function login(form) {
			document.getElementById('status_login').innerHTML = "Loading...";
			$.post(form.action, $(form).serialize())
			.done(function(data) {
				delallCookie();
				document.getElementById('debug').innerHTML = data;
				data = JSON.parse(data);
				document.getElementById('status_login').innerHTML = data.message;
				if(data.code == 200) {
					setCookie("token", data.access_token, 360);
					$.ajax({
						url: 'net.php', 
						success: function(data){
							document.write(data);
						}
					});
				}
  			})
  			.fail(function() {
  				alert("connection_error");
			});
		}
		function recemail(form) {
			document.getElementById('status_recemail').innerHTML = "Loading...";
			$.post(form.action, $(form).serialize())
			.done(function(data) {
				data = JSON.parse(data);
				document.getElementById('status_recemail').innerHTML = data.message;
  			})
  			.fail(function() {
  				alert("connection_error");
			});
		}
		function delallCookie() {
			document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
		}
		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays*24*60*60*1000));
			var expires = "expires="+ d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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
		function deleteCookie(name) {
			var date = new Date(); 
			date.setTime(date.getTime() - 1); 
			document.cookie = name += "=; expires=" + date.toGMTString(); 
		}
		refresh_page();
	</script>
</body>
</html>
