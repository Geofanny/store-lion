<!DOCTYPE html>
<html lang="en">
<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<title>Shopping Trolly</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="icon" type="image/x-icon" href="{{asset('images')}}/q.png">

	<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet"  href="fontawesome-free/css/all.min.css">

	<link rel="stylesheet"  href="css/style2.css">

	<link rel="stylesheet"  href="css/keranjang.css">

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
						<a class="nav-link active" aria-current="page" href="/index"><i class="fas fa-home mr-2"></i> Home</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/clothing">Clothing</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/electronic">Electronic</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/shoes">Shoes</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/jam">Watches</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/cincin">Jewellery</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/makeup">Beauty</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/kids">Kids</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/sport">Sport</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link" href="/garden">Garden</a>
					</li>
					
				</ul>
				<form class="d-flex mx-3">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-warning" type="submit" style=" color: black">Search</button>
				</form>
			</div>
		</div>
	</nav>
	

	<div class="container">
		<div class="row row-produk">
			<div class="col">
				<h3 class="mt-5 ml-2"><img src="images/checkout.png" width="45" class="ml-2"> Checkout</h3><hr class="mt-1">
				<table class="table text-center mt-5">
					<thead>
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Image</th>
							<th scope="col">Name Product</th>
							<th scope="col">How Many</th>
							<th scope="col">Price</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<th scope="row">1</th>
							<td><img src="{{ asset('img/produk') }}/kimono.png" class="img-keranjang"></td>
							<td>Men`s Kimono</td>
							<td>
								<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
								<span class="mx-2">1</span>
								<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
							</td>
							<td><span class="text-warning"><b>$100</b></span></td>
							<td><a href=""><i class="far fa-times-circle text-dark fs-4"></i></a></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td><img src="{{ asset('img/produk') }}/sweter.png" class="img-keranjang"></td>
							<td>Sweeter Cute</td>
							<td>
								<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
								<span class="mx-2">1</span>
								<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button></td>
								<td><span class="text-warning"><b>$100</b></span></td>
								<td><a href=""><i class="far fa-times-circle text-dark fs-4"></i></a></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td><img src="{{ asset('img/produk') }}/cewe.png" class="img-keranjang"></td>
								<td>Women`s Shoes</td>
								<td>
									<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
									<span class="mx-2">1</span>
									<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
								</td>
								<td><span class="text-warning"><b>$100</b></span></td>
								<td><a href=""><i class="far fa-times-circle text-dark fs-4"></i></a></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Total Belanja</th>
								<th></th>
								<th></th>
								<th></th>
								<th><span class="text-warning"><b>Rp. 10000</b></span></th>
								<th></th>
							</tr>
							<tr>
								<th>
									Payment Method 
								</th>
								<th></th>
								<th></th>
								<th></th>
								<th>
									<select aria-label="Default select example" class="form-select">
										<option selected>---</option>
										<option value="1">Cod (Cash On Delivery)</option>
										<option value="2">Dana</option>
										<option value="3">OVO</option>
										<option value="3">GoPay</option>
									</select>
								</th>
								<th></th>
							</tr>
						</tfoot>
					</table>
					<button class="btn text-white mb-3" name="konfirm" style="margin-left: 60%; background-color: #ec3e0f;">
						Send Goods
					</button>
				</div>
			</div>	
		</div>


		<footer>
			<div class="footer mt-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer_top">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<span class="navbar-brand" id="judul">
											<i class="fas fa-store mr-2 ml-2 text-warning"></i> Shopping Shop
										</span>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<ul class="sociel">
											<li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li> <a href="#"><i class="fab fa-twitter"></i></a></li>
											<li> <a href="#"><i class="fab fa-instagram"></i></a></li>
											<li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
									<div class="address">
										<h3>Contact us </h3>
										<ul class="loca">
											<li>
												<a href="#"><img src="icon/loc.png" alt="#" /></a>062 Indonesian
											</li>
											<li>
												<a href="#"><img src="icon/call.png" alt="#" /></a>+62 87456741236 </li>
												<li>
													<a href="#"><img src="icon/email.png" alt="#" /></a>Shooping@gmail.com </li>

												</ul>

											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<div class="address">
												<h3>customer service</h3>
												<ul class="Menu_footer">
													<li class="active"> <a href="#">My account</a> </li>
													<li><a href="#">Wishlist</a> </li>
													<li><a href="#">My Cart</a> </li>
													<li><a href="#">Checkout</a> </li>
													<li><a href="#">Login</a> </li>
												</ul>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<div class="address">
												<h3>corporation</h3>
												<ul class="Links_footer">
													<li class="active"><a href="#">My account</a> </li>
													<li><a href="#">Wishlist</a> </li>
													<li><a href="#">My Cart</a> </li>
													<li><a href="#"> Checkout</a> </li>
													<li><a href="#">Login</a> </li>
												</ul>
											</div>
										</div>

										<div class="col-lg-3 col-md-6 col-sm-6 ">
											<div class="address">
												<h3>why choose us</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
												<form class="newtetter">
													<input class="tetter" placeholder="Your email" type="text" name="Your email">
													<button class="submit">Subscribe</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="copyright"> 
							<div>
								<p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
							</div>
						</div>
					</div>

				</footer>
				<!-- end footer -->
			</div>
		</body>
		</html>