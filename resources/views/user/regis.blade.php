{{-- <?php

require 'config.php';

if (isset($_POST["login"])) {

	if (submit($_POST) > 0) {
		echo "
		<script> 
		alert('registrasi berhasil dikirim!');
		document.location.href= 'user.php';
		</script>";
	} else {
		mysqli_error($conn);
	}
}


?> --}}
<!DOCTYPE html>
<html>
<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<link rel="icon" href="images/q.png" type="icon/x-image">
	<title>Login</title>

	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">

	<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

	<link rel="stylesheet"  href="css/user.css">
</head>
<body>
	<div class="wrapper">
		<div class="logo"> <img src="images/t.png" alt=""> </div>
		<div class="text-center mt-4 name"> Sign UP Shooping Shop </div>
		
		<form class="p-3 mt-3" method="POST" action="/register">
			@csrf
			<div class="form-field d-flex align-items-center"> 
				<span class="far fa-user"></span> 
				<input type="text" name="username" id="userName" placeholder="Username"> 
			</div>
			<div class="form-field d-flex align-items-center"> 
				<span class="far fa-user"></span> 
				<input type="text" name="name" id="userName" placeholder="Name"> 
			</div>
			<div class="form-field d-flex align-items-center"> 
				<span class="far fa-envelope"></span> 
				<input type="text" name="email" id="userName" placeholder="Email"> 
			</div>
			<div class="form-field d-flex align-items-center"> 
				<span class="fas fa-key"></span> 
				<input type="password" name="password" id="pwd" placeholder="Password"> </div> 
				<button class="btn mt-3" name="login">Sig Up</button>
			</form>
		</div>
	</body>
	</html>