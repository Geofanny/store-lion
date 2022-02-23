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
	<link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="{{asset('css')}}/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="{{asset('css')}}/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="{{asset('images')}}/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="{{asset('css')}}/jquery.mCustomScrollbar.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">

	<link rel="stylesheet"  href="{{asset('fontawesome-free')}}/css/all.min.css">

	<link rel="stylesheet"  href="{{asset('css')}}/style2.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

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
						<a class="nav-link active" aria-current="page" href="/"><i class="fas fa-home mr-2"></i>Home</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link text-white" href="/cart">
							<i class="bi bi-cart4 mr-2 fa-1x"></i>
							Shooping Trolly
						</a>
					</li>
				</ul>
				<form class="d-flex mx-3">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-warning" type="submit" style=" color: black">Search</button>
				</form>
			</div>
		</div>
	</nav>


	<!-- Nrws Electronics  -->
	<div class="row mt-2">
		<div class="col-md-15 ">
			<div id="Electronics" class="Jewellery-bg mt-3">
				<h3 style="margin-top: 40px">
					<i class="{{ $kategori->icon }} fa-xl mt-4 mr-2">

					</i>
					{{ $kategori->nama_kategori	}}</h3>
					<div class="row" >
						@foreach($products as $product)
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
							<div class="Jewellery-box ">
								<h5>Sale</h5>
								<i><img src="{{ asset('img/produk/'.$product->gambar) }}" width="190">
								</i>
								<h4>
									{{$product->nama_produk}}
								</h4>
								<br>
								<span class="nolmal" style="color: red">
									Rp.{{ number_format($product->harga, 0, '', '.') }}
								</span>
							</div>
							<a class="buynow" 
							href="{{url('/cart/tambah/'.$product->id)}}">
							Buy now
						</a>
					</div>
					@endforeach
				</div>
			</div>
			<div class="pagination justify-content-center">
				{{$products->links()}}
			</div>
		</div>

		<!-- end news Electronic -->
	</body>
	</html>