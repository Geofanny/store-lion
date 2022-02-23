{{-- <?php
session_start();

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

require 'config.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
	if (mysqli_num_rows($result) == 1) {

        //cek password
		$row = mysqli_fetch_assoc($result);

        //set session
		$_SESSION["login"] = true;
		$_SESSION['username'] = $username;

		header("Location: index.php");
		exit;

	}else {
		echo "<script>
		alert('Username atau Password salah !');
		</script>";
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
		<div class="text-center mt-4 name"> Shooping Shop </div>
		
		<form class="p-3 mt-3" method="POST" action="/login">
			@csrf
			<div class="form-field d-flex align-items-center"> 
				<span class="far fa-envelope"></span> 
				<input type="text" name="email" id="userName" placeholder="Email"> 
			</div>

			<div class="form-field d-flex align-items-center"> 
				<span class="fas fa-key"></span> 
				<input type="password" name="password" id="pwd" placeholder="Password">
				<span class="eye" onclick="myFunction()">
					<i id="hide2" class="fas fa-eye-slash"></i>
					<i id="hide1" class="fas fa-eye"></i> 
				</span>
			</div> 
			<button class="btn mt-3" name="login">Login</button>
		</form>
		<div class="text-center fs-6"> 
			<a href="#">Forget password?</a> or <a href="/gis">Sign up</a> 
		</div>
	</div>

	<script>
		function myFunction(){
			var x = document.getElementById("pwd");
			var y = document.getElementById("hide2");
			var z = document.getElementById("hide1");

			if (x.type=== 'password') {
				x.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}else{
				x.type = "password";
				y.style.display = "none";
				z.style.display = "block";
			}
		}
	</script>
</body>
</html>