<!DOCTYPE html>
<html lang="en">
<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<title>Shopping Shop</title>

	<link rel="icon" type="image/x-icon" href="{{asset('images')}}/q.png">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">

	<link rel="stylesheet"  href="fontawesome-free/css/all.min.css">

	<link rel="stylesheet"  href="css/style2.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #ec3e0f">
		<div class="container-fluid">
			<span class="navbar-brand" id="judul"><i class="fas fa-store mr-2 ml-2"> </i> Shopping Shop</span>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item mx-3">
						<a class="nav-link active" aria-current="page" href="/home"><i class="fas fa-home mr-2"></i>Home</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link text-white" href="/keranjang"><i class="fas fa-shopping-cart mr-2"></i>Shooping Trolly</a>
					</li>
				</ul>
				<form class="d-flex mx-3">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-warning" type="submit" style=" color: black">Search</button>
				</form>
			</div>
		</div>
	</nav>

	<div class="row">
		<div class="col-md-12">
			<div id="Health and Beauty" class="Jewellery-bg">
				<h3><img src="images/makeup.png" width="50"> Health and Beauty</h3>
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
						<div class="Jewellery-box">
							<h5>Sale</h5>
							<i><img src="{{ asset('img/produk') }}/m.png"/>
							</i>
							<h4>Pond`s Men  <span class="nolmal" style="color: red">$100</span></h4>
						</div>
						<a class="buynow" href="#">Buy now</a>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
						<div class="Jewellery-box">
							<i><img src="{{ asset('img/produk') }}/c.png" width="230"></i>
							<h4>Pond`s Beauty <span class="nolmal" style="color: red">$100</span></h4>
						</div>
						<a class="buynow" href="#">Buy now</a>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="Jewellery-box">
							<i><img src="{{ asset('img/produk') }}/me.png" width="230"></i>
							<h4>Garnier Men  <span class="nolmal" style="color: red">$100</span></h4>
						</div>
						<a class="buynow" href="#">Buy now</a>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="Jewellery-box">
							<i><img src="{{ asset('img/produk') }}/p.png"/></i>
							<h4>Spriluna Mask <span class="nolmal" style="color: red">$100</span></h4>
						</div>
						<a class="buynow" href="#">Buy now</a>
					</div>
				</div>

			</body>
			</html>