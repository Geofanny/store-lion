<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login Admin</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{asset('style')}}/animate.css">

	<link rel="icon" href="images/w.png" type="icon/x-image">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="{{asset('style')}}/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Admin <span>Page</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<form method="POST">
				<div class="box-header">
					<h2>LogIn Admin</h2>
				</div>
				<label for="username">Username</label>
				<br/>
				<input type="text" id="username" autocomplete="off" name="username">
				<br/>
				<label for="password">Password</label>
				<br/>
				<input type="password" id="password" name="password">
				<br/>
				<button type="submit" name="login">Sign In</button>
				<br/>
				<a href="#"><p class="small">Forgot your password?</p></a>
			</form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
		$('#logo').addClass('animated fadeInDown');
		$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>