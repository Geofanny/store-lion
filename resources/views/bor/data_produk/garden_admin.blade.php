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
						<a class="nav-link active" aria-current="page" href="/utama"><i class="fas fa-home mr-2"></i>Home</a>
					</li>
					{{-- <li class="nav-item mx-3">
						<a class="nav-link text-warning" href="/keranjang"><i class="fas fa-shopping-cart mr-2"></i>Shooping Trolly</a>
					</li> --}}
				</ul>
				<form class="d-flex mx-3">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-warning" type="submit" style=" color: black">Search</button>
				</form>
			</div>
		</div>
	</nav>

	{{-- Modal Tambah Produk --}}
	<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title" id="exampleModalLabel" 
					style="color: white;">
					Add Product
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<form>
					<div class="mb-3">
						<label for="nama" class="form-label">Nama Produk</label>
						<input type="text" class="form-control" name="" id="nama">
					</div>
					<div class="mb-3">
						<label for="email">Produk</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>  
					<div class="mb-3">
						<label for="email">Kategori</label><br>
						<select aria-label="Default select example" name="kategori" class="form-select">
							<option selected>---</option>
							<option value="1">Clothing</option>
							<option value="2">Elektronik</option>
							<option value="3">Shoes</option>
							<option value="4">Watches</option>
							<option value="5">Jewellery</option>
							<option value="6">Health And Beauty</option>
							<option value="7">Kids And Babies</option>
							<option value="8">Sports</option>
							<option value="9">Home And Garden</option>
						</select>
					</div>
					<div>
						<label for="harga" class="form-label">Harga</label>
						<input type="number" class="form-control" name="" id="harga">
					</div>     
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Tambah</button>
			</div>
		</div>
	</div>
</div>

{{-- Modal Edit --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header" style="background: cornflowerblue">
				<h5 class="modal-title" id="exampleModalLabel" 
				style="color: white;">
				Edit Produk
			</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>

		<div class="modal-body">
			<form>
				<div class="mb-3">
					<label for="nama" class="form-label">Nama Produk</label>
					<input type="text" class="form-control" name="" id="nama">
				</div>
				<div class="mb-3">
					<label for="email">Produk</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>  
				<div class="mb-3">
					<label for="email">Kategori</label><br>
					<select aria-label="Default select example" name="kategori" class="form-select">
						<option selected>---</option>
						<option value="1">Clothing</option>
						<option value="2">Elektronik</option>
						<option value="3">Shoes</option>
						<option value="4">Watches</option>
						<option value="5">Jewellery</option>
						<option value="6">Health And Beauty</option>
						<option value="7">Kids And Babies</option>
						<option value="8">Sports</option>
						<option value="9">Home And Garden</option>
					</select>
				</div>
				<div>
					<label for="harga" class="form-label">Harga</label>
					<input type="number" class="form-control" name="" id="harga">
				</div>     
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save</button>
		</div>
	</div>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div id="Home and Garden" class="Jewellery-bg">
			<h3><img src="images/garden.png" width="50">
				<span>Home and Garden
					<button type="button" class="btn btn-success" 
					style="float:right; margin-top: 8px; width: 190px;" data-bs-toggle="modal" data-bs-target="#exampleModal2">
					<i class="fas fa-plus-square"></i>
					<span>Tambah Produk</span>
				</button>
			</span>
		</h3>
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
				<div class="Jewellery-box">
					<h5>Sale</h5>
					<i><img src="{{ asset('img/produk') }}/c1.png"/>
					</i>
					<h4>Long Chair  <span class="nolmal" style="color: red">$100</span></h4>
				</div>
				<div class="mb-4">
					<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
						Edit
					</button>
					<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
				<div class="Jewellery-box">
					<i><img src="{{ asset('img/produk') }}/c2.png"/></i>
					<h4>Swing <span class="nolmal" style="color: red">$100</span></h4>
				</div>
				<div class="mb-4">
					<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
						Edit
					</button>
					<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
				<div class="Jewellery-box">
					<i><img src="{{ asset('img/produk') }}/c3.png"/></i>
					<h4>Garden Lamp  <span class="nolmal" style="color: red">$100</span></h4>
				</div>
				<div class="mb-4">
					<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
						Edit
					</button>
					<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
				<div class="Jewellery-box">
					<i><img src="{{ asset('img/produk') }}/c4.png"/></i>
					<h4>Garden Table <span class="nolmal" style="color: red">$100</span></h4>
				</div>
				<div class="mb-4">
					<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
						Edit
					</button>
					<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
				<div class="Jewellery-box">
					<h5>Sale</h5>
					<i><img src="{{ asset('img/produk') }}/c5.png"/>
					</i>
					<h4>Flower Vase  <span class="nolmal" style="color: red">$100</span></h4>
				</div>
				<div class="mb-4">
					<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
						Edit
					</button>
					<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
				<div class="Jewellery-box">
					<i><img src="{{ asset('img/produk') }}/c6.png"/></i>
					<h4>Glass Cup <span class="nolmal" style="color: red">$100</span></h4>
				</div>
				<div class="mb-4">
					<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
						Edit
					</button>
					<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
				<div class="Jewellery-box">
					<i><img src="{{ asset('img/produk') }}/c7.png" width="280"></i>
					<h4>Wall Decoration  <span class="nolmal" style="color: red">$100</span></h4>
				</div>
				<div class="mb-4">
					<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
						Edit
					</button>
					<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
				<div class="Jewellery-box">
					<i><img src="{{ asset('img/produk') }}/c8.png"/></i>
					<h4>
						Math Wall Clock <span class="nolmal" style="color: red">$100</span></h4>
					</div>
					<div class="mb-4">
						<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 290px">
							Edit
						</button>
						<button class="btn btn-danger mt-4" type="submit" style="width: 290px">Delete</button>
					</div>
				</div>
			</div>

		</body>
		</html>