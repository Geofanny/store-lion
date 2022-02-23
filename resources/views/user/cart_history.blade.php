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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<style>
		table,th,td{
			border: 1px solid grey;
		}
		tfoot{
			background-color:  #BBFFFF;
			border-bottom: 1px solid grey;
		}
		th{
			background-color: blue;
		}
	</style>
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
					<!-- <li class="nav-item mx-3">
						<a class="nav-link active " aria-current="page" 
						href="/"><i class="fas fa-home mr-2"></i> Home</a>
					</li> -->
				</ul>
				<form class="d-flex mx-3">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-warning" type="submit" style=" color: black">Search</button>
				</form>
			</div>
		</div>
	</nav>


	<div class="container mb-4">
		<div class="row row-produk">
			<div class="col">
				<h3 class="mt-5"> 
					<i class="bi bi-calendar2-check mr-2 fa-2x"></i>
					<span style="font-size: 4vh;margin-left:1vh;">
						Cart History
					</span>
				</h3>
				<hr class="mt-1">
				<div class="table-responsive">
					<table class="table text-center mt-5">
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Image</th>
								<th scope="col">Name Product</th>
								<th scope="col">How Many</th>
								<th scope="col">Subtotal</th>
								<th scope="col">Pembayaran</th>
								<th scope="col">Jasa Kirim</th>
								<th scope="col">Status</th>
								<th scope="col">Delete</th>
							</tr>
						</thead>
						<tbody style="border: black; ">
							<tr>
								<th scope="row">1</th>
								<td><img src="{{ asset('img/produk') }}/kimono.png" class="img-keranjang"></td>
								<td>Men`s Kimono</td>
								<td>
									<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
									<span class="mx-2">1</span>
									<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
								</td>
								<td>
									<span class="text-danger">
										<b>Rp.100.000</b>
									</span>
								</td>
								<td>COD</td>
								<td>J&T</td>
								<td>
									<span class="text-success">
										<b>Sedang Dikirim</b>
									</span>
								</td>
								<td>
									<a href="" class="btn btn-danger">
										<i class="fas fa-trash-alt"></i>
									</a>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td><img src="{{ asset('img/produk') }}/sweter.png" class="img-keranjang"></td>
								<td>Sweeter Cute</td>
								<td>
									<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
									<span class="mx-2">1</span>
									<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button></td>
									<td>
										<span class="text-danger">
											<b>Rp.100.000</b>
										</span>
									</td>
									<td>COD</td>
									<td>JNE</td>
									<td>
										<span class="text-danger">
											<b>Belum Dikemas</b>
										</span>
									</td>
									<td>
										<a href="" class="btn btn-danger">
											<i class="fas fa-trash-alt"></i>
										</a>
									</td>
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
									<td>
										<span class="text-danger">
											<b>Rp.100.000</b>
										</span>
									</td>
									<td>COD</td>
									<td>JNE</td>
									<td>
										<span class="text-success">
											<b>Sedang Dikirim</b>
										</span>
									</td>
									<td>
										<a href="" class="btn btn-danger">
											<i class="fas fa-trash-alt"></i>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- <button class="btn text-white mb-3" name="konfirm" style=" background-color: #ec3e0f;"> -->
						<a href="/" class="text-white btn mb-4" 
						style="text-decoration:none;background-color: #ec3e0f;"> 
						<i class="bi bi-arrow-left-circle fa-1x"></i>
						<span>Back</span>
					</a>
					<!-- </button> -->
				</div>
			</div>	
		</div>

		<footer>
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer_top">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<span class="navbar-brand" id="judul">
											<i class="fas fa-store mr-2 ml-2"></i> Shopping Shop
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
												<a href="#"><img src="{{ asset('img/produk') }}/loc.png" alt="#" /></a>062 Indonesian
											</li>
											<li>
												<a href="#"><img src="{{ asset('img/produk') }}/call.png" alt="#" /></a>+62 87456741236 </li>
												<li>
													<a href="#"><img src="{{ asset('img/produk') }}/email.png" alt="#" /></a>Shooping@gmail.com </li>

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

						<div class="copyright" id="footer"> 
							<div>
								<p style="color: white">Shooping Shop #shopping@gmail.com
								</p>
							</div>
						</div>
					</div>

				</footer>
				<!-- end footer -->
			</div>

			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script>
				$('#grandtotal-result').html('Rp.' + rupiah($('#grandtotal').val()))

				$(".tambah").click(function () {
					let qty = $(this).prev(".qty").html()
					let qty_total = parseInt(qty)+1

					$(this).prev(".qty").html(qty_total)

					let subx = $(this).parent().next().next().data("subtotal")
					let subtotal = qty_total * parseInt(subx)
					let grandtotal = parseInt($('#grandtotal').val())+subx
					let grandtotal_result = $('#grandtotal').val(grandtotal)
					$('#grandtotal-result').html(``)
					$('#grandtotal-result').html('Rp.' + rupiah($('#grandtotal').val()))

					$(this).parent().next().next().html('Rp.'+ rupiah(subtotal))
				})

				$(".kurang").click(function (e) {
					let qty = $(this).next(".qty").html()
					let qty_total = parseInt(qty)-1

					if (qty_total == 0) {
						return false;
					}

					$(this).next(".qty").html(qty_total)

					let subx = $(this).parent().next().next().data("subtotal")
					let subtotal = qty_total * parseInt(subx)
					let grandtotal = parseInt($('#grandtotal').val())-subx
					let grandtotal_result = $('#grandtotal').val(grandtotal)
					$('#grandtotal-result').html(``)
					$('#grandtotal-result').html('Rp.' + rupiah($('#grandtotal').val()))


					$(this).parent().next().next().html('Rp.'+ rupiah(subtotal))
				})
		// $(document).on("click", ".tambah", function() {
		// 	var sum = 0;
		// 	$(".total").each(function() {
		// 		sum += +$(this).val();
		// 	});
		// 	$(".total").val(sum / 2);
		// });

		function rupiah(bilangan) {
			var	number_string = bilangan.toString(),
			sisa 	= number_string.length % 3,
			rupiah 	= number_string.substr(0, sisa),
			ribuan 	= number_string.substr(sisa).match(/\d{3}/g);

			if (ribuan) {
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

					// Cetak hasil
					return rupiah
				}
				// $('#cod_div').hide()
				// $(document).on('change', '#payment_method',function(){
				// 	if ($(this).val() == 'cod') {
				// 		$('#cod_div').show()
				// 	}else{
				// 		$('#cod_div').hide()
				// 	}
				// })
			</script>
		</body>
		</html>